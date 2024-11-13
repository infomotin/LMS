<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $url = '';
        // dd( $request->user());
        if($request->user()->role==='admin'){
            // $url = route('admin.dashboard');
            $url = 'admin/dashboard';
        }elseif($request->user()->role==='instructor'){
            // $url = route('instructor.dashboard');
            $url = 'instructor/dashboard';
        }elseif($request->user()->role==='author'){
            // $url = route('author.dashboard');
            $url = 'author/dashboard';
        }elseif($request->user()->role==='head_instructor'){
            // $url = route('head_instructor.dashboard');
            $url = 'head_instructor/dashboard';
        }elseif($request->user()->role==='lecturer'){
            // $url = route('lecturer.dashboard');
            $url = 'lecturer/dashboard';
        }elseif($request->user()->role==='user'){
            // $url = route('dashboard');
            $url = 'dashboard';
        }
        return redirect()->intended($url);
    }



    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
