<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Helpers\Helpers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pages'] = Page::all();
        return view('admin.pages', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->fill($request->all());
        $slug = Helpers::makeSlug($request->input('title_geo'), 'pages');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $page->slug = $slug;

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/pages/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $page->image = $fileName;
        $page->save();
        return Redirect::route('admin.pages.show');
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
        $obj = Page::findOrFail($id);
        return view('admin.pages-add')->with('obj', $obj);
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
        $page = Page::findOrFail($id);
        $page->title_geo = $request->input('title_geo');
        $page->title_eng = $request->input('title_eng');
        $page->title_rus = $request->input('title_rus');
        $page->content_geo = $request->input('content_geo');
        $page->content_eng = $request->input('content_eng');
        $page->content_rus = $request->input('content_rus');
        $slug = Helpers::makeSlug($request->input('title_geo'), 'pages');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $page->slug = $slug;

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/pages/' . $page->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/pages/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $page->image = $fileName;
        }
        $page->save();
        return Redirect::route('admin.pages.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/pages/' . $page->image);
            $page->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.pages.show');
    }
}
