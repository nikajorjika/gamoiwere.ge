<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Mockery\Exception;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::orderBy('created_at', 'desc')->get();
        return view('admin.news', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->fill($request->all());
        $slug = Helpers::makeSlug($request->input('title_geo'), 'news');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $news->slug = $slug;

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/news/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $news->image = $fileName;
        $news->save();
        return Redirect::route('admin.index');
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
        $obj = News::findOrFail($id);
        return view('admin.news-add')->with('obj', $obj);
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
        $news = News::findOrFail($id);
        $news->title_geo = $request->input('title_geo');
        $news->title_eng = $request->input('title_eng');
        $news->title_rus = $request->input('title_rus');
        $news->content_small_geo = $request->input('content_small_geo');
        $news->content_small_eng = $request->input('content_small_eng');
        $news->content_small_rus = $request->input('content_small_rus');
        $news->content_geo = $request->input('content_geo');
        $news->content_eng = $request->input('content_eng');
        $news->content_rus = $request->input('content_rus');
        $slug = Helpers::makeSlug($request->input('title_geo'), 'news');
        if($slug == ""){
            return Redirect::route('admin.index');
        }
        $news->slug = $slug;

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/news/' . $news->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/news/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $news->image = $fileName;
        }
        $news->save();
        return Redirect::route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/news/' . $news->image);
            $news->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.index');
    }
}
