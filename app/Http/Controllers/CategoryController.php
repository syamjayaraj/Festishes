<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\URL;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/fest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $cat=new Category;
        $cat->name=request('name');
        $cat->slug=request('slug');
        $cat->desc=request('desc');
        $cat->cover='coversamp.jpg';
        $cat->save();
        $slug=$cat->slug;  
        return view ('/admin/create/fest_upload', compact('slug'));
    }
    public function upload(Request $request)
    {
            $input = $request->all();
            $file=Input::file('cover');
            $slug=request('cat_slug');
            $filepath='images/sitedata/cover';
            $filename=date('D'.'M'.'Y').time('H').rand(0,999).'_'.$file->getClientOriginalName();
            $file->move($filepath, $filename);
            $cat=new Category;
            Category::where('slug', $slug)->update(array('cover' => $filename));

        return view('admin.create.done');
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
    public function destroy($id)
    {
        //
    }
}
