<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Helpers\Helpers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['staff'] = Staff::all();
        return view('admin.staff', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->fill($request->all());
        $slug = Helpers::makeSlug($request->input('full_name_geo'), 'staff');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $staff->slug = $slug;

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/staff/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $staff->image = $fileName;
        $staff->save();
        return Redirect::route('admin.staff.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Staff::findOrFail($id);
        return view('admin.staff-add')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->full_name_geo = $request->input('full_name_geo');
        $staff->full_name_eng = $request->input('full_name_eng');
        $staff->full_name_rus = $request->input('full_name_rus');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->fb = $request->input('fb');
        $staff->li = $request->input('li');
        $staff->tw = $request->input('tw');
        $staff->content_geo = $request->input('content_geo');
        $staff->content_eng = $request->input('content_eng');
        $staff->content_rus = $request->input('content_rus');
        $staff->position_geo = $request->input('position_geo');
        $staff->position_eng = $request->input('position_eng');
        $staff->position_rus = $request->input('position_rus');
        $slug = Helpers::makeSlug($request->input('full_name_geo'), 'staff');
        if($slug == ""){
            return Redirect::route('admin.staff.show');
        }
        $staff->slug = $slug;

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/staff/' . $staff->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/staff/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $staff->image = $fileName;
        }
        $staff->save();
        return Redirect::route('admin.staff.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/staff/' . $staff->image);
            $staff->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.staff.show');
    }
}
