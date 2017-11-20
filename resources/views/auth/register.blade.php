@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 center">
                        <h3 class="panel-title">Oopz !!!</h3>
                        <p>You have no permission to be an Admin.</p>
                        <p>If you really like to be a part of Festishes, contact us</p>
                        <h2><a href={{url('contact')}}><button class="btn btn-info btn-lg">Contact</button></a></h2>
            </div>
        </div>
</div>
@endsection
