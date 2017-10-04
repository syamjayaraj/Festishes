
@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact Us</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/addcontact">
                        {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile" class="form-control" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <textarea name="msg"class="form-control" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
@endsection