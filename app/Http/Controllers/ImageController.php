<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Category;

use App\Image;

class ImageController extends Controller
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
        //
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
            $file=Input::file('wishing');
            $filepath='images/wishings/image';
            $filename=date('D'.'M'.'Y').time('H').rand(0,999).'_'.$file->getClientOriginalName();
            $filesize=$file->getClientSize()/1000;
            $file->move($filepath , $filename);
            $img=new Image;
            $img->cat_slug=request('cat_slug');
            $img->name=$filename;
            $img->size=$filesize;
            $img->feat=0;
            $img->save();

            return view('admin.create.done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories=Category::all();
        $images = Image::where('cat_slug',$slug)->get();
        $cat_slug=Category::where('slug',$slug)->first();
        return view('posts.images', compact('images','categories','cat_slug'));
    }
    public function showexp($slug,$id)
    {
        $image = Image::where('cat_slug',$slug)->where('id',$id)->first();
        return view('posts.imagecardmax',compact('image'));
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
