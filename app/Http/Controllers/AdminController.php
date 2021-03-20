<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;
use App\Models\Event;
use DB;
  

class AdminController extends Controller

{
    public function eventAdminGet() { return view('eventsDashBoard'); }
    public function eventAdminPost(Request $request)
    {
        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_ar' => 'required',
            'title_en' => 'required',
            
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/events'), $imageName);
        
        DB::table('events')->insert([
            'title_ar' => $request->input('title_ar'),
            'title_en' => $request->input('title_en'),
            'details_ar' => $request->input('details_ar'),
            'details_en' => $request->input('details_en'),
            'img' => $imageName,
        ]);
        return back()->with('success','You have successfully upload image.');
    }
    public function productAdminGet() { return view('productsDashBoard'); }
    public function productAdminPost(Request $request)
    {
        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_ar' => 'required',
            'title_en' => 'required',
            
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/products'), $imageName);
        
        DB::table('products')->insert([
            'title_ar' => $request->input('title_ar'),
            'title_en' => $request->input('title_en'),
            'details_ar' => $request->input('details_ar'),
            'details_en' => $request->input('details_en'),
            'category' => $request->input('category'),
            'img' => $imageName,
        ]);
        return back()->with('success','You have successfully upload image.');
    }
}