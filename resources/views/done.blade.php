@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 center">
                        <h3 class="panel-title">Done !!!</h3>
                        <p>Thank you for being touch with us.We will get back to you as soon as possible.</p>
                        <p>Click the below button to reach home</p>
                        <h2><a href={{url('admin')}}><button class="btn btn-info btn-lg">Home</button></a></h2>
            </div>
        </div>
@endsection