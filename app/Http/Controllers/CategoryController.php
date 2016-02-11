<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Category::all();
        return view('admin.category', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->fill($request->all());

        $image = $request->file('image');
        $imageName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/category/';
            $imageName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $imageName);
        }else{
            App::abort(404);
        }
        $small_image = $request->file('small_image');
        $imageNamesmall = "";
        if($small_image->isValid()){
            $path = public_path().'/uploads/category/';
            $imageNamesmall = str_random(32).'.'.$small_image->getClientOriginalExtension();
            $small_image->move($path, $imageNamesmall);
        }else{
            App::abort(404);
        }
        $category->image = $imageName;
        $category->small_image = $imageNamesmall;
        $category->save();
        return Redirect::route('admin.category.show');
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
        $obj = Category::findOrFail($id);
        return view('admin.category-add')->with('obj', $obj);
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
        $category = Category::findOrFail($id);
        $category->title_geo = $request->input('title_geo');
        $category->title_eng = $request->input('title_eng');
        $category->title_rus = $request->input('title_rus');

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/category/' . $category->image);
            $image = $request->file('image');
            $imageName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/category/';
                $imageName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $imageName);
            }
            $category->image = $imageName;
        }

        $category->save();
        return Redirect::route('admin.category.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/category/' . $category->image);
            $category->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.category.show');
    }
}
