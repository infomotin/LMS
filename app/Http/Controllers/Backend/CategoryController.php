<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;

class CategoryController extends Controller
{
    //Index
    public function index(){
        return view('admin.category.index');
    }
}
