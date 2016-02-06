<?php

namespace App\Http\Controllers;

use App\Album;
use Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['album'] = Album::all();
        return view('admin.album', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->fill($request->all());


        $image = $request->file('thumbnail');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/albums/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $album->thumbnail = $fileName;
        $album->save();
        return Redirect::route('admin.album.show');
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
        $obj = Album::findOrFail($id);
        return view('admin.album-add')->with('obj', $obj);
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
        $album = Album::findOrFail($id);
        $album->title_geo = $request->input('title_geo');
        $album->title_eng = $request->input('title_eng');
        $album->title_rus = $request->input('title_rus');
        $slug = Helpers::makeSlug($request->input('title_geo'), 'album');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $album->slug = $slug;

        if(NULL !== ($request->file('thumbnail'))) {
            File::delete(public_path() . '/uploads/albums/'.$album->thumbnail);
            $image = $request->file('thumbnail');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/albums/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $album->thumbnail = $fileName;
        }
        $album->save();
        return Redirect::route('admin.album.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/albums/' . $album->thumbnail);
            $album->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.album.show');
    }
}
