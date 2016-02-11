<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Mockery\Exception;
use App\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['partner'] = Partner::all();
        return view('admin.partner', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->fill($request->all());

        $image = $request->file('image');
        $fileName = "";
        if($image->isValid()){
            $path = public_path().'/uploads/partner/';
            $fileName = str_random(32).'.'.$image->getClientOriginalExtension();
            $image->move($path, $fileName);
        }else{
            App::abort(404);
        }
        $partner->image = $fileName;
        $partner->save();
        return Redirect::route('admin.partner.show');
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
        $obj = Partner::findOrFail($id);
        return view('admin.partner-add')->with('obj', $obj);
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
        $partner = partner::findOrFail($id);
        $partner->title_geo = $request->input('title_geo');
        $partner->title_eng = $request->input('title_eng');
        $partner->title_rus = $request->input('title_rus');
        $partner->url = $request->input('url');
        $partner->content_geo = $request->input('content_geo');
        $partner->content_eng = $request->input('content_eng');
        $partner->content_rus = $request->input('content_rus');

        if(NULL !== ($request->file('image'))) {
            File::delete(public_path() . '/uploads/partner/' . $partner->image);
            $image = $request->file('image');
            $fileName = "";
            if ($image->isValid()) {
                $path = public_path() . '/uploads/partner/';
                $fileName = str_random(32) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $fileName);
            }
            $partner->image = $fileName;
        }
        $partner->save();
        return Redirect::route('admin.partner.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        try {
            File::delete(public_path() . '/uploads/partner/' . $partner->image);
            $partner->destroy($id);
        }catch (Exception $e){
            App::abort(404);
        }
        return Redirect::route('admin.partner.show');
    }
}
