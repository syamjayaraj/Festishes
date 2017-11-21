<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Text;

use App\Image;

use App\Gif;

use App\Video;

use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
    	$categories=Category::all();
        $texts = Text::orderBy('created_at', 'desc')->take(6)->get();
        $images = Image::orderBy('created_at', 'desc')->take(6)->get();
        $gifs = Gif::orderBy('created_at', 'desc')->take(6)->get();
        $videos = Video::orderBy('created_at', 'desc')->take(6)->get();        
    	return view('welcome',compact('texts','images','gifs','videos','categories'));
    }
}
