<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

use Psy\Command\WhereamiCommand;
use Laravel\Jetstream\Rules\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as AuthUser;

class StudentController extends Controller
{
    //Load Student Batch Page
    public function showStudentBatch()
    {
        // $students = User::select("*")->where('role', 'user')->paginate(2);
        $students = User::when(request('searchKey'), function ($q) {
            $key = request('searchKey');
            $q->Where('name', 'like', '%' . $key . '%');
        })->where('role', '=', 'user')->orderBy('id', 'asc')->paginate(5);

        return view('Admin.student_details', compact('students'));
    }
    //Load add_student page
    public function showAddStudent()
    {
        return view('Admin.add_student');
    }
    //add New Student to database
    public function addStudent(Request $request)
    {

        $this->userValidationCheck($request, 'add');

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

    // load Edit Student Page on Site

    public function loadEditStudent($id)
    {
        $student = User::where('id', $id)->first()->toArray();

        return view('Admin.student_edit', compact('student'));
    }

    //Edit Student
    public function editStudent(Request $request)
    {
        $this->userValidationCheck($request, 'update');
        $response = $this->getUserData($request);

        $id = $request->id;
        //        User::where('id', $id)->update($response);
        User::where('id', $id)->update($response);
        return redirect()->route('admin#showStudents')->with(['editSuccess' => "Student's info edited successfullly!!!"]);
    }

    //delete Student

    public function deleteStudent($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin#showStudents')->with(['deleteSuccess' => "Deleted Successfully!!!"]);
    }

    //reset Password
    public function resetPass($id)
    {
        $reset = [
            'password' => Hash::make('student123'),
        ];
        $name = DB::table('users')->where('id', $id)->value('name');
        User::where('id', $id)->update($reset);
        return redirect()->route('admin#showStudents')->with(['resetSuccess' => "Reset student password Successfully!!! Default Password is student123", 'name' => $name]);
    }

    private function getUserData($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'dob' => $request->dateOfBirth,
            'gender' => $request->gender,
        ];

        return $data;
    }
    private function userValidationCheck($request, $status)
    {
        if ($status == 'add') {
            $validationRules = [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required'],
                'address' => ['required'],
                'password' => ['required', 'min:5', 'max:16'],
                'gender' => ['required'],
                'dateOfBirth' => ['required', 'date_format:Y-m-d', 'before:15 years ago']
            ];
        } elseif ($status == 'update') {
            $validationRules =  [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required'],
                'address' => ['required'],
                'gender' => ['required'],
                'dateOfBirth' => ['required', 'date_format:Y-m-d', 'before:15 years ago'],
                'email' => ['required', 'unique:users,email,' . $request->id],

            ];
        }
        Validator::make($request->all(), $validationRules)->validate();
    }
}
