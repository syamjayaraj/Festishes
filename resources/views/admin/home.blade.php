@php $nav_home = 'active'; @endphp
@extends('admin.layouts.master')
@section('title')
Dashboard
@endsection
@section('content')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up canvas-button">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Menu </button>
          </p>
<section id="dashboard">
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Dashboard</a>
        </nav>
            <p><span class="badge badge-secondary">Posts</span></p>
            <div class="row">
            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Texts</div>
                <div class="card-body">
                  <h4 class="card-title">Total : {{$txt}}</h4>
{{--                   <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p> --}}
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Images</div>
                <div class="card-body">
                  <h4 class="card-title">Total : {{$img}}</h4>
{{--                   <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p> --}}
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Gifs</div>
                <div class="card-body">
                  <h4 class="card-title">Total : {{$gif}}</h4>
{{--                   <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p> --}}
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Videos</div>
                <div class="card-body">
                  <h4 class="card-title">Total : {{$vid}}</h4>
{{--                   <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p> --}}
                </div>
              </div>
            </div>
          </div>
</section>
<section id="admins">
      <p><span class="badge badge-secondary">Top Admins</span></p>
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Joining Date</th>
          </tr>
        </thead>
        <tbody>
@php $id=0; @endphp          
@foreach($admins as $admin)
@php $id=$id+1; @endphp          
          <tr>
            <td>{{$id}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->created_at}}</td>
          </tr>
@endforeach
        </tbody>
      </table>

</div>
        @include('admin.layouts.sidebar')
      </div>
</section>

@endsection