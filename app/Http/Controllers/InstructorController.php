<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    //InstructorDashboard
    public function InstructorDashboard(){

        return view('Instructor.index');
    }
    //InstructorLogout
    public function InstructorLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'You have been successfully logged out!');
    }
    //InstructorProfile
    public function InstructorProfile(){
        $authUser = Auth::user();
        $userData = User::find($authUser->id);

        return view('Instructor.profile', compact('userData'));
    }
    //InstructorProfileStore
    public function InstructorProfileStore(Request $request){
        $authUser = Auth::user();
        $userData = User::find($authUser->id);
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->address = $request->address;
        $userData->phone = $request->phone;
        //image upload
        if($request->file('avatar')){
            $file = $request->file('avatar');
            @unlink(public_path('uploads/instructor_images/'.$userData->avatar));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/instructor_images'), $filename);
            $userData->avatar = $filename;
        }
        $userData->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);  
    }
    //InstructorChangePassword
    public function InstructorChangePassword(){
        return view('Instructor.change_password');
    }
    //UpdatePassword
    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
        ]);
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password Updated Successfully',
            'alert-type' => 'success'
        );
        Auth::logout();
        return back()->with($notification);
    }
}
