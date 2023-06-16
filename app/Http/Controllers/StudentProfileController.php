<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\returnSelf;

class StudentProfileController extends Controller
{

    public function changePasswordPage()
    {
        return view('student.profile.StudentChangePass');
    }
    //change password & validation
    public function changePassword(Request $request)
    {
        /*
        1. All fields must be filled.
        2.Passwords must be greater than 6 and less than 16
        3.New Password must be same with ConfimedPassword
        4.current password must be same with old password
        5.All above conditions are satisfied, then password change.
        */

        Validator::make($request->all(), [
            'currentPassword' => 'required|min:6|max:16',
            'newPassword' => 'required|min:6|max:16',
            'confirmedPassword' => 'required|min:6|max:16|same:newPassword'
        ])->validate();

        $currentUserId = Auth::user()->id;
        $user = User::where('id', $currentUserId)->first();
        $dbPassword = $user->password;
        if (Hash::check($request->currentPassword, $dbPassword)) {
            User::where('id', $currentUserId)->update([
                'password' => Hash::make($request->newPassword),
            ]);

            return redirect()->route('student#changePasswordPage')->with(['passwordSuccess' => 'Changed Password Successfully']);
        } else {
            return redirect()->route('student#changePasswordPage')->with(['passwordFail' => 'You enter the wrong password. Please try again!!']);
        }
    }
    //
    public function showProfile()
    {
        return view('Student.profile.profile');
    }
    public function showEdit()
    {
        return view('Student.profile.profile_edit');
    }
    public function updateProfile($id, Request $request)
    {

        $this->profileValidationCheck($request);
        $data = $this->getUserData($request);


        // //for image
        if ($request->hasFile('image')) {
            $dbImage = User::where('id', $id)->first();

            $dbImage = $dbImage->image;

            if ($dbImage != null) {
                Storage::delete('public/' . $dbImage);
            }
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public', $fileName);
            $data['image'] = $fileName;
        }

        User::where('id', $id)->update($data);
        return redirect()->route('student#profile')->with(['updateSuccess' => 'Profile updated Successfully']);
    }
    private function getUserData($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'dob' => $request->dob
        ];
    }
    private function profileValidationCheck($request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required'
        ])->validate();
    }
}
