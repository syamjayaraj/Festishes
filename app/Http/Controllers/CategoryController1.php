<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\URL;

use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
    	$cat=new Category;
        $cat->name=request('name');
        $cat->slug=request('slug');
        $cat->desc=request('desc');
        $cat->cover='coversamp.jpg';
        $cat->save();	
        return view ('/admin/create/'.$cat->slug.'/upload');
    }

    public function upload(Request $slug)
    {

        if(Input::hasFile('cover'))
        {

        	$file=Input::file('cover');
            $filepath='images/sitedata/cover';
            $filename=date('D'.'M'.'Y').time('H').rand(0,999).'_'.$file->getClientOriginalName();
        	$file->move($filepath, $filename);
        	$cat=new Category;
        	Category::where('slug', '$slug')->update(array('cover' => $filename));
        }
        // return ('Done');
    }
}
