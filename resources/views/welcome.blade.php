@php $nav_home = 'active'; @endphp
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
          <div class="jumbotron " style="background-image: url('../../images/sitedata/cover/home.jpg');">
            <div class="cover-box">
            <h3>It is important to make genuine connections</h3>
            <hr>
            <p>Be the first to wish your favorites</p>
            </div>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Latest</a>
        </nav>
                @include('posts.welcome_featcard')
        @include('layouts.sidebar')
      </div>
@endsection