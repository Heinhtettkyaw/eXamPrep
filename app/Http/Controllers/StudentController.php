<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //Load Student Batch Page
    public function showStudentBatch()
    {
        return view('Admin.student_details');
    }
    //Load add_student page
    public function showAddStudent()
    {
        return view('Admin.add_student');
    }
    //add Student
    public function addStudent(Request $request)
    {


        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'address' => ['required'],
            'password' => ['required', 'min:5', 'max:16'],
            'password_confirmation' => ['required'],
            'gender' => ['required'],
            'dateOfBirth' => ['required']
        ])->validate();

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
            'gender' => $request['gender'],
            'dob' => $request['dateOfBirth'],
        ]);
        return redirect()->route('admin#showStudents')->with(['createSuccess' => "Students added successfullly!!!"]);
    }
}
