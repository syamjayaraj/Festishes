@extends('layouts.mastermax')
@section('title')
Shareboard | Video | {{$video->cat_slug}}
@endsection
@section('content')
<main role="main" class="inner cover">           
    <div class="video-container">
      <video width="460" height="340" controls>
        <source src="{{url('images/wishings/video/'.$video->name)}}" type="video/mp4" alt="Gif not found">
        Your browser does not support This video.
      </video>  
    </div>
  <p class="lead">             
          <div class="modal-footer">
          <div data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 20px;"></i> {{$video->feat}}</div>&nbsp&nbsp&nbsp
          <a href="{{url('images/wishings/video/'.$video->name)}}" download="{{$video->name}}" data-toggle="tooltip" title="Download"><i class="fa fa-download" style="font-size:36px"></i></a>
                <!-- Default dropup button -->
        <div class="btn-group dropup">
          <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt-square" style="font-size:36px" data-toggle="tooltip" title="Share"></i></a>
          <div class="dropdown-menu">
            <li class="dropdown-item"><a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" data-toggle="tooltip" title="Share Whatsapp"><i class="fa fa-whatsapp"></i>&nbsp&nbsp<span>Whatsapp</span></a></li>
            <li class="dropdown-item" data-href="{{url()->current()}}" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.festishes.com%2Ffest%2F{{$video->cat_slug}}%2Fvideos%2F{{$video->id}}&amp;src=sdkpreparse"><i class="fa fa-facebook"></i>&nbsp&nbsp<span>Facebook</span></a></li>
            <li class="dropdown-item"><a href="https://twitter.com/share?url={{url()->current()}}" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i>&nbsp&nbsp<span>Twitter</span></a></li>
          </div>
        </div>   
        </div>
  </p>
</main>
@endsection