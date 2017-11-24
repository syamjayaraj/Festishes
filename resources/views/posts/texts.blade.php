@extends('layouts.master')
@section('title')
{{$cat_slug->name}} | Texts
@endsection
@section('content')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up canvas-button">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">List of Festivals</button>
          </p>
          <div class="jumbotron jumbo-cover" style="background-image: url('../../images/sitedata/cover/{{$cat_slug->cover}}');">
            <div class="cover-box">
              <h4 class="stroke">{{$cat_slug->name}}</h4>
              <p class="stroke">{!!nl2br(e($cat_slug->desc))!!}</p>
            </div>
          </div>
         <nav class="breadcrumb">
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug)}}">Latest</a>            
          <a class="breadcrumb-item active" href="{{url('/fest/'.$cat_slug->slug.'/texts')}}">Texts</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/images')}}">Images</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/gifs')}}">Gifs</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/videos')}}">Videos</a>
        </nav>
          <div class="row">
                @include('posts.textcard')
          </div>
        </div><!--/span-->
        @include('layouts.sidebar')
      </div><!--/row-->
@endsection