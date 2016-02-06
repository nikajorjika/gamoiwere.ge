<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Mockery\Exception;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slider'] = Slide::orderBy('created_at', 'desc')->get();
        return view('admin.slide', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slide();
        $slide->fill($request->all());

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/slider/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $slide->image = $fileName;
        $slide->save();
        return Redirect::route('admin.slider.show');
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
        $obj = Slide::findOrFail($id);
        return view('admin.slider-add')->with('obj', $obj);
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
        $slide = Slide::findOrFail($id);
        $slide->title_geo = $request->input('title_geo');
        $slide->title_eng = $request->input('title_eng');
        $slide->title_rus = $request->input('title_rus');
        $slide->link_title_geo = $request->input('link_title_geo');
        $slide->link_title_eng = $request->input('link_title_eng');
        $slide->link_title_rus = $request->input('link_title_rus');
        $slide->url = $request->input('url');

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/slider/' . $slide->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/slider/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $slide->image = $fileName;
        }
        $slide->save();
        return Redirect::route('admin.slider.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/slider/' . $slide->image);
            $slide->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.slider.show');
    }
}
