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
}
