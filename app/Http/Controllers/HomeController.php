<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Text;
use App\Image;
use App\Gif;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=User::all();
        $txt=Text::count();
        $img=Image::count();
        $gif=Gif::count();
        $vid=Video::count();
        return view('admin.home', compact('admins','txt','img','gif','vid'));
    }
    public function create()
    {
        return view('admin/create');
    }
}
