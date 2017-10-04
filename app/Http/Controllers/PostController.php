<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use Session;

use App\Category;

use App\Text;

use App\Image;

use App\Gif;

use App\Video;


class PostController extends Controller
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
    public function index_wish()
    {
        $categories=Category::all();
        return view('admin/create/wish',compact('categories'));
    }

    public function create_wish(Request $request)
    {
         $cat=request('cat');
         return view('admin/create/type',compact('cat'));
            
    }

    public function create_type_text($cat)
    {   
        return view('admin/create/text',compact('cat'));
    }

        public function create_type_image($cat)
    {   
        return view('admin/create/image',compact('cat'));
    }

        public function create_type_gif($cat)
    {   
        return view('admin/create/gif',compact('cat'));
    }
    
        public function create_type_video($cat)
    {   
        return view('admin/create/video',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showfeat($slug)
    {
        $categories=Category::all();
        $texts = Text::where('cat_slug',$slug)->where('feat','=', '1')->get();
        $images = Image::where('cat_slug',$slug)->where('feat','=', '1')->get();
        $gifs = Gif::where('cat_slug',$slug)->where('feat','=', '1')->get();
        $videos = Video::where('cat_slug',$slug)->where('feat','=', '1')->get();
        $cat_slug=Category::where('slug',$slug)->first();
        return view('posts.feat', compact('texts','images','gifs','videos','categories','cat_slug'));
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
