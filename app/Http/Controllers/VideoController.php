<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Category;

use App\Video;

class VideoController extends Controller
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
        $filepath='images/wishings/video';
        $filename=date('D'.'M'.'Y').time('H').rand(0,999).'_'.$file->getClientOriginalName();
        $filesize=$file->getClientSize()/1000;
        $file->move($filepath , $filename);
        $vdo=new Video;
        $vdo->cat_slug=request('cat_slug');
        $vdo->email=request('email');
        $vdo->name=$filename;
        $vdo->size=$filesize;
        $vdo->caption=request('caption');
        $vdo->feat=0;
        $vdo->save();

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
        $videos = Video::where('cat_slug',$slug)->get();
        $cat_slug=Category::where('slug',$slug)->first();
        return view('posts.videos', compact('videos','categories','cat_slug'));
    }
    public function showexp($slug,$cap,$id)
    {
        $video = Video::where('cat_slug',$slug)->where('id',$id)->first();
        $feat=$video->feat+1;
        Video::where('cat_slug', $slug)->where('id',$id)->update(array('feat' => $feat)); 
        return view('posts.videocardmax',compact('video'));
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
