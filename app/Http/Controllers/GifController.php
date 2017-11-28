<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Category;

use App\Gif;


class GifController extends Controller
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
            $filepath='images/wishings/gif';
            $filename=date('D'.'M'.'Y').time('H').rand(0,999).'_'.$file->getClientOriginalName();
            $filesize=$file->getClientSize()/1000;
            $file->move($filepath , $filename);
            $gif=new Gif;
            $gif->cat_slug=request('cat_slug');
            $gif->email=request('email');
            $gif->name=$filename;
            $gif->size=$filesize;
            $gif->caption=request('caption');
            $gif->feat=0;
            $gif->save();

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
        $gifs=Gif::where('cat_slug',$slug)->get();
        $cat_slug=Category::where('slug',$slug)->first();
        return view('posts.gifs',compact('categories','gifs','cat_slug'));
    }
    public function showexp($slug,$cap,$id)
    {
        $gif = Gif::where('cat_slug',$slug)->where('id',$id)->first();
        $feat=$gif->feat+1;
        Gif::where('cat_slug', $slug)->where('id',$id)->update(array('feat' => $feat)); 
        return view('posts.gifcardmax',compact('gif'));
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
