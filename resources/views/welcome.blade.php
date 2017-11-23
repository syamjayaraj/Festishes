@extends('layouts.master')
@section('title')
Home | Festishes
@endsection
@section('content')
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up canvas-button">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">List of Festivals</button>
          </p>
          <div class="jumbotron jumbo-cover" style="background-image: url('../../images/sitedata/cover/home.jpg');">
            <h2 class="stroke">Festival + Wishes</h2>
            <p class="stroke">Be the first to wish your favorites.</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Latest</a>
        </nav>
                @include('posts.welcome_featcard')
        @include('layouts.sidebar')
      </div>
@endsection