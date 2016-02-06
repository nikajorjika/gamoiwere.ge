<?php

namespace App\Http\Controllers;

use App\SideSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Mockery\Exception;

class SideSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sideslider'] = SideSlider::orderBy('created_at', 'desc')->get();
        return view('admin.sideslider', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sideslider-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new SideSlider();
        $slide->fill($request->all());

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/sideslider/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $slide->image = $fileName;
        $slide->save();
        return Redirect::route('admin.sideslider.show');
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
        $obj = SideSlider::findOrFail($id);
        return view('admin.sideslider-add')->with('obj', $obj);
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
        $slide = SideSlider::findOrFail($id);
        $slide->title_geo = $request->input('title_geo');
        $slide->title_eng = $request->input('title_eng');
        $slide->title_rus = $request->input('title_rus');
        $slide->link_title_geo = $request->input('link_title_geo');
        $slide->link_title_eng = $request->input('link_title_eng');
        $slide->link_title_rus = $request->input('link_title_rus');
        $slide->url = $request->input('url');

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/sideslider/' . $slide->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/sideslider/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $slide->image = $fileName;
        }
        $slide->save();
        return Redirect::route('admin.sideslider.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = SideSlider::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/sideslider/' . $slide->image);
            $slide->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.sideslider.show');
    }

}
