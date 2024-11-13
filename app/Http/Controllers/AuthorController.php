<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //AuthorDashboard
    public function authorDashboard(){
        return view('author.author_dashboard');
    }
}
