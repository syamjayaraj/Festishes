@extends('layouts.master')
@section('title')
Home
@endsection
@section('content')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up canvas-button">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">List of Festivals</button>
          </p>
          <div class="jumbotron jumbo-cover" style="background-image: url('../../images/sitedata/cover/{{$cat_slug->cover}}');">
            <div class="rectangle">
              <h4>{{$cat_slug->name}}</h4>
              <br>
              <p>{{$cat_slug->desc}}</p>
            </div>
          </div>
         <nav class="breadcrumb">
          <a class="breadcrumb-item active" href="#">Featured</a>            
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/texts')}}">Texts</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/images')}}">Images</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/gifs')}}">Gifs</a>
          <a class="breadcrumb-item" href="{{url('/fest/'.$cat_slug->slug.'/videos')}}">Videos</a>
        </nav>
          @include('posts.featcard')
        @include('layouts.sidebar')
      </div>


@endsection