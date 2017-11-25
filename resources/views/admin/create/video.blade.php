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
            <p>Note : You can add Festival Category where your wishing message needs to be belonged to if and only if it is not present in the Festival List</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Create</a>
            <a class="breadcrumb-item" href="">{{$cat}}</a>
        </nav>


<p><span class="badge badge-secondary">Image</span></p>

<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/addvideo">
{{csrf_field()}}
  <fieldset>
  <input type="hidden" name="cat_slug" value="{{$cat}}">
  <input type="hidden" name="email" value="{{ Auth::user()->email }}" >
  <div class="form-group">
    <div class="col-lg-12">
      <label>Upload the Video wishing</label>
      <input type="file" class="form-control-file" name="wishing">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-12">
      <input type="text" class="form-control" name="caption" placeholder="Caption for the Video">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-1 col-lg-offset-4">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </fieldset>
</form>
</div>
        @include('admin.layouts.sidebar')
      </div>


@endsection