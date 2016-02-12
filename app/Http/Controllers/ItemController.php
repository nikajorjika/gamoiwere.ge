<?php

namespace App\Http\Controllers;

use App\Category;
use App\ItemColors;
use App\ItemPhotos;
use App\Items;
use App\ItemSize;
use Helpers\Helpers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['item'] = Items::all();
        return view('admin.item', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::with('SubCategory')->orderby('created_at','asc')->get();
        $data['color'] = ItemColors::orderby('created_at','asc')->get();
        $data['size'] = ItemSize::orderby('created_at','asc')->get();
        return view('admin.item-add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spec = implode('-',$request->get('spec'));
        $item = new Items();
        $item->fill($request->all());
        $pieces = explode("-", $request->input('category'));
        $item->category_id =$pieces[1];
        $item->subcategory_id =$pieces[0];
        $item->spec = $spec;
        $slug = Helpers::makeSlug($request->input('title_geo'));
        $item->slug = $slug;

        $image = $request->file('main_image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/item/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $item->main_image = $fileName;


        $big_image = $request->file('big_image');
        $fileNameBig = "";
        if($big_image->isValid()){
            $path = public_path().'/uploads/item/';
            $fileNameBig = str_random(32).'.'.$big_image->getClientOriginalExtension();
            $big_image->move($path, $fileNameBig);
        }else{
            App::abort(404);
        }
        $item->main_image = $fileName;
        $item->big_image = $fileNameBig;
        $item->save();
        $item->ItemColors()->sync($request->color);
        $item->ItemSize()->sync($request->size);
        foreach($request->file('images') as $p){
            $fileName = "";
            if($p->isValid()){
                $path = public_path().'/uploads/photos/'.$item->id.'/';
                $fileName = str_random(32).'.'.$p->getClientOriginalExtension();
                $p->move($path, $fileName);
            }else{
                App::abort(404);
            }
        }
        return Redirect::route('admin.item.show');

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
        $data['item'] = Items::findOrFail($id);
        $data['category'] = Category::with('SubCategory')->orderby('created_at','asc')->get();
        $data['color'] =ItemColors::all();
        $data['size'] = ItemSize::all();
        if(is_dir( public_path().'/uploads/photos/'.$id.'/')){
            $photos  = scandir(public_path().'/uploads/photos/'.$id.'/',1);
            $files = array_diff($photos, array('.', '..'));
        }else{
            $files = [];
        }
        $data['photos'] = $files;
        return view('admin.item-add',$data)->with('obj', $data);
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
        $item = Items::findOrFail($id);
        $item->title_geo = $request->input('title_geo');
        $item->title_eng = $request->input('title_eng');
        $item->title_rus = $request->input('title_rus');
        $item->content_geo = $request->input('content_geo');
        $item->content_eng = $request->input('content_eng');
        $item->content_rus = $request->input('content_rus');
        $pieces = explode("-", $request->input('category'));
        $item->category_id =$pieces[1];
        $item->subcategory_id =$pieces[0];
        $item->price = $request->input('price');

        if(NULL !== ($request->file('main_image'))) {
            File::delete(public_path() . '/uploads/item/' . $item->main_image);
            $image = $request->file('main_image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/item/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $item->main_image = $fileName;
        }
        $item->save();
        foreach($request->file('images') as $p){
            $fileName = "";
            if($p->isValid()){
                $path = public_path().'/uploads/photos/'.$item->id.'/';
                $fileName = str_random(32).'.'.$p->getClientOriginalExtension();
                $p->move($path, $fileName);
            }else{
                App::abort(404);
            }
        }
        return Redirect::route('admin.item.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/item/' . $item->main_image);
            $item->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.item.show');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $name
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_photo($id, $name)
    {
        File::delete(public_path().'/uploads/photos/'.$id.'/'.$name);
        return Redirect::back();
    }
}
