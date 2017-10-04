@extends('admin.layouts.master')
@section('title')
Create
@endsection
@section('content')
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up canvas-button">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Menu </button>
          </p>
          <div class="jumbotron jumbo-cover">
            <h1>Add your wishings to Festishes</h1>
            <p>Select the type of wishing message you wish to add.</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Create</a>
            <a class="breadcrumb-item" href="">{{$cat}}</a>
        </nav>
      <p><span class="badge badge-secondary">Select type of Wish</span></p>

        <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/'.$cat.'/text/')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAA
                AAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Text</h4>
              <div class="text-muted">Create new Text Wishing</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/'.$cat.'/image')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Image</h4>
              <span class="text-muted">Create new Image Wishing</span>
            </div>
                        <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/'.$cat.'/gif')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Gif</h4>
              <span class="text-muted">Create new Gif Wishing</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/'.$cat.'/video')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Video</h4>
              <span class="text-muted">Create new Video Wishing</span>
            </div>
          </section>
</div>
        @include('admin.layouts.sidebar')
      </div>


@endsection