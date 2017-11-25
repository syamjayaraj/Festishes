@php $nav_create = 'active'; @endphp
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
        </nav>


        <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/fest')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAA
                AAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Fest</h4>
              <div class="text-muted">Create new Festival Categories if it is not in the current list.</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <a href="{{url('admin/create/wish')}}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              </a>
              <h4>Wishing</h4>
              <span class="text-muted">Create new Wishing messages by selecting the Fest.</span>
            </div>
          </section>
</div>
        @include('admin.layouts.sidebar')
      </div>


@endsection