<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //AdminDashboard
    public function AdminDashboard(){
        return view('admin.index');
    }
    //Adminlogout
    public function Adminlogout(Request $request):RedirectResponse{
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'You have been successfully logged out!');
    }
    //AdminLogin
    public function AdminLogin(){
        return view('admin.login');
    }
    //AdminProfile  
    public function AdminProfile(){
        $authUser = Auth::user();
        $userData = User::find($authUser->id);

        return view('admin.profile', compact('userData'));
    }
    //UserProfileStore
    public function UserProfileStore(Request $request){
        $authUser = Auth::user();
        $userData = User::find($authUser->id);
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->address = $request->address;
        $userData->phone = $request->phone;
        //image upload
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images'), $filename);
            $userData->avatar = $filename;
        }
        $userData->save();

        return redirect()->back()->with('status', 'Profile Updated Successfully');  
    }
}
