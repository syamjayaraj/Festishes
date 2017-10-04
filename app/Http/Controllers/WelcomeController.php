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
        $texts = Text::where('feat','=', '1')->get();
        $images = Image::where('feat','=', '1')->get();
        $gifs = Gif::where('feat','=', '1')->get();
        $videos = Video::where('feat','=', '1')->get();        
    	return view('welcome',compact('texts','images','gifs','videos','categories'));
    }
}
