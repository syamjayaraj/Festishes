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
          <div class="jumbotron jumbo-cover">
            <h1>Hello, guys!</h1>
            <p>Select the festival to get wishing messages,images and videos and send it to those are favorite for you.</p>
          </div>
        <nav class="breadcrumb">           
            <a class="breadcrumb-item" href="">Dashboard</a>
        </nav>
            <p><span class="badge badge-secondary">Posts</span></p>
            <div class="row">
            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Texts</div>
                <div class="card-body">
                  <h4 class="card-title">Total : 20</h4>
                  <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Images</div>
                <div class="card-body">
                  <h4 class="card-title">Total : 20</h4>
                  <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Gifs</div>
                <div class="card-body">
                  <h4 class="card-title">Total : 20</h4>
                  <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header bg-faded">Videos</div>
                <div class="card-body">
                  <h4 class="card-title">Total : 20</h4>
                  <p class="card-text">Published : 17</p>
                  <p class="card-text">Pending : 2</p>
                  <p class="card-text">Rejected : 1</p>
                </div>
              </div>
            </div>
            </div>
      <p><span class="badge badge-secondary">Admins</span></p>
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Joining Date</th>
            <th>Posts</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Syamlal</td>
            <td>26/10/2017</td>
            <td>120</td>
          </tr>

           <tr>
            <td>1</td>
            <td>Syamlal</td>
            <td>26/10/2017</td>
            <td>120</td>
          </tr>
        </tbody>
      </table>

</div>
        @include('admin.layouts.sidebar')
      </div>


@endsection