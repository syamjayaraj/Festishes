<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Text;

class TextController extends Controller
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
        $txt=new Text;
        $txt->cat_slug=request('cat_slug');
        $txt->email=request('email');
        $txt->body=request('wishing');
        $txt->feat=0;
        $txt->save();
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
        $texts = Text::where('cat_slug',$slug)->get();
        $cat_slug=Category::where('slug',$slug)->first();
        return view('posts.texts', compact('texts','categories','cat_slug'));
    }

    public function showexp($slug,$id)
    {
        $text = Text::where('cat_slug',$slug)->where('id',$id)->first();
        $feat=$text->feat+1;
        Text::where('cat_slug', $slug)->where('id',$id)->update(array('feat' => $feat)); 
        return view('posts.textcardmax',compact('text'));
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
