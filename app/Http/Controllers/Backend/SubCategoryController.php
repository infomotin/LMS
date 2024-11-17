<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\SubCategory;
use App\Models\Backend\Category;

class SubCategoryController extends Controller
{
    //index
    public function index()  {
        $subcategories = SubCategory::latest()->get();
        return view('admin.backend.sub_category.index', compact('subcategories'));
    }
    //create
    public function create()  {
        $categories = Category::latest()->get();
        return view('admin.backend.sub_category.add',compact('categories'));
    }
    //store
    public function store(Request $request){
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);

        $subcategories = new SubCategory();
        $subcategories->category_id = $request->category_id;
        $subcategories->sub_category_name = $request->sub_category_name;
        $subcategories->sub_category_slug = strtolower(str_replace(' ', '-',$request->sub_category_name));
        // $subcategories->sub_category_image = $request->sub_category_image;
        $subcategories->sub_category_status = 'active';
        $subcategories->sub_category_description = '';
        $subcategories->save();
        $notification = array(
            'message' => 'Sub Category Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('sub-category.index')->with($notification);
    }
    //edit
    public function edit($id){
        $subcategories = SubCategory::find($id);
        $categories = Category::latest()->get();
        return view('admin.backend.sub_category.edit',compact('subcategories','categories'));
    }
    //update
    public function update(Request $request,$id){
        $subcategories = SubCategory::find($id);
        $subcategories->category_id = $request->category_id;
        $subcategories->sub_category_name = $request->sub_category_name;
        $subcategories->sub_category_slug = strtolower(str_replace(' ', '-',$request->sub_category_name));
        // $subcategories->sub_category_image = $request->sub_category_image;
        $subcategories->sub_category_status = $request->sub_category_status;
        $subcategories->sub_category_description = $request->sub_category_description;
        $subcategories->save();
        $notification = array(
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('sub-category.index')->with($notification);
    }

    public function delete($id){
        $subcategories = SubCategory::find($id);
        $subcategories->delete();
        $notification = array(
            'message' => 'Sub Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('sub-category.index')->with($notification);
    }
    //GetSubCategory
    // public function GetSubCategory($category_id){
    //     $subcategories = SubCategory::where('category_id', $category_id)->orderBy('sub_category_name', 'asc')->get();
    //     // dd($subcategories);
    //     return json_encode($subcategories);
    // }
}
