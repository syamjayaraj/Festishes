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
          <div class="jumbotron jumbo-cover">
            <h1>Hello, guys!</h1>
            <p>Select the festival to get wishing messages,images and videos and send it to those are favorite for you.</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Featured</a>
        </nav>
                @include('posts.welcome_featcard')
        @include('layouts.sidebar')
      </div>


@endsection