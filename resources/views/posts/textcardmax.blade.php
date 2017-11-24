@extends('layouts.mastermax')
@section('title')
Shareboard | Text | {{$text->cat_slug}}
@endsection
@section('content')
@php $tbody=nl2br(e($text->body)) @endphp
<main role="main" class="inner cover">
  <p class="lead" id="copy-wish">{!!$tbody!!}</p>
  <p class="lead">              
          <div class="modal-footer">
          <div data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 20px;"></i> {{$text->feat}}</div>&nbsp&nbsp&nbsp
            <a href="" onclick="copyToClipboard(document.getElementById('copy-wish'));" data-toggle="tooltip" title="Copy to Clipboard"><i class="fa fa-clipboard" style="font-size:36px"></i></a>
                <!-- Default dropup button -->
        <div class="btn-group dropup">
          <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt-square" style="font-size:36px" data-toggle="tooltip" title="Share"></i></a>
          <div class="dropdown-menu">
            <li class="dropdown-item"><a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" data-toggle="tooltip" title="Share Whatsapp"><i class="fa fa-whatsapp"></i>&nbsp&nbsp<span>Whatsapp</span></a></li>
            <li class="dropdown-item" data-href="{{url()->current()}}" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.festishes.com%2Ffest%2F{{$text->cat_slug}}%2Ftexts%2F{{$text->id}}&amp;src=sdkpreparse"><i class="fa fa-facebook"></i>&nbsp&nbsp<span>Facebook</span></a></li>
            <li class="dropdown-item"><a href="https://twitter.com/share?url={{url()->current()}}" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i>&nbsp&nbsp<span>Twitter</span></a></li>
          </div>
        </div>   

        </div>
  </p>
</main>
@endsection