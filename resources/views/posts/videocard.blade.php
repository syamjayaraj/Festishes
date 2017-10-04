@foreach($videos as $video)
<div class="video-container">
<iframe src="{{url($video->link)}}"	
  allowfullscreen="allowfullscreen" width="230" height="170"
  frameborder="1">
</iframe>  
</div>
@endforeach
