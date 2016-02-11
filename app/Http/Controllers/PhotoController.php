<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use File;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['photos'] = Photo::where('album_id', $id)->get();
        return view('admin.photos', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        foreach($request->file('images') as $p){
            $photo = new Photo();
            $photo->album_id = $id;
            $fileName = "";
            if($p->isValid()){
                $path = public_path().'/uploads/photos/';
                $fileName = str_random(32).'.'.$p->getClientOriginalExtension();
                $p->move($path, $fileName);
            }else{
                App::abort(404);
            }
            $photo->photo = $fileName;
            $photo->save();
        }
        return Redirect::route('admin.photos.show', $id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumId, $id)
    {
        $photo = Photo::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/photos/' . $photo->photo);
            $photo->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.photos.show', $albumId);
    }
}
