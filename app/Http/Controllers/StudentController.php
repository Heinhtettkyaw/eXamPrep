<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Rules\Role;
use Psy\Command\WhereamiCommand;

class StudentController extends Controller
{
    //Load Student Batch Page
    public function showStudentBatch()
    {
        // $students = User::select("*")->where('role', 'user')->paginate(2);
        $students = User::when(request('searchKey'), function ($q) {
            $key = request('searchKey');
            $q->Where('name', 'like', '%' . $key . '%');
        })->where('role', '=', 'user')->orderBy('id', 'asc')->paginate(3);



        return view('Admin.student_details', compact('students'));
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
