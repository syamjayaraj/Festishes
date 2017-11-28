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
            <p>Select the Festival category.</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Create</a>
        </nav>


      <p><span class="badge badge-secondary">Select Festival Category</span></p>

<form class="form-horizontal" method="POST" action="/selfest">
{{csrf_field()}}
  <fieldset>
        <div class="form-group">
          <div class="col-lg-4">
            <select class="custom-select" name="cat" required>
              <option selected disabled>Select Festival</option>
              @foreach($categories as $category)
              <option value="{{$category->slug}}">{{$category->name}}</option>
              @endforeach
            </select>
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