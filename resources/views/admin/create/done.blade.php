@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 center">
                        <h3 class="panel-title">Done !!!</h3>
                        <p>You have successfully posted in Festishes.</p>
                        <p>Go back to Dashboard.</p>
                        <h2><a href={{url('admin')}}><button class="btn btn-info btn-lg">Dashboard</button></a></h2>
            </div>
        </div>
@endsection