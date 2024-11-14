<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    // ShowUserProfile
    public function ShowUserProfile(){
        $id = Auth::user()->id;
        $profileData = \App\Models\User::find($id);
        return view('frontend.dashboard.profile', compact('profileData'));
    }
    //UserLogout
    public function UserLogout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'You have been successfully logged out!');
    }
}
