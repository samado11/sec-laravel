<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;
use App\Models\Event;
use DB;
  

class AdminController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function eventAdminGet()

    {

        return view('eventsDashBoard');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function eventAdminPost(Request $request)

    {
        

        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_ar' => 'required',
            'title_en' => 'required',
            
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/img'), $imageName);
        
        DB::table('events')->insert([
            'title_ar' => $request->input('title_ar'),
            'title_en' => $request->input('title_en'),
            'details_ar' => $request->input('details_ar'),
            'details_en' => $request->input('details_en'),
            'img' => $imageName,
            
        ]);

        return back()->with('success','You have successfully upload image.');

    }

}