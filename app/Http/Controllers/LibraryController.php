<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Mockery\Exception;
use App\Library;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['library'] = Library::all();
        return view('admin.library', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $library = new Library();
        $library->fill($request->all());

        $image = $request->file('image');
        $imageName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/library/';
            $imageName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $imageName);
        }else{
            App::abort(404);
        }

        $file = $request->file('file');
        $fileName = "";
        if($file->isValid()){
            $path = public_path().'/uploads/library/';
            $fileName = str_random(32).'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }else{
            App::abort(404);
        }

        $library->filename = $fileName;
        $library->image = $imageName;
        $library->save();
        return Redirect::route('admin.library.show');
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
        $obj = Library::findOrFail($id);
        return view('admin.library-add')->with('obj', $obj);
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
        $library = Library::findOrFail($id);
        $library->title_geo = $request->input('title_geo');
        $library->title_eng = $request->input('title_eng');
        $library->title_rus = $request->input('title_rus');

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/library/' . $library->image);
            $image = $request->file('image');
            $imageName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/library/';
                $imageName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $imageName);
            }
            $library->image = $imageName;
        }

        if(NULL !== ($request->file('file'))) {
            File::delete(public_path() . '/uploads/library/' . $library->filename);
            $file = $request->file('file');
            $fileName = "";
            if ($file->isValid()) {
                $path = public_path() . '/uploads/library/';
                $fileName = str_random(32) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $fileName);
            }
            $library->filename = $fileName;
        }

        $library->save();
        return Redirect::route('admin.library.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $library = Library::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/library/' . $library->image);
            $library->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.library.show');
    }
}
