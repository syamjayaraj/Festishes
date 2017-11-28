@forelse($videos as $video)
@php
$size=round($video->size/1000,1);
$videourl=str_limit(preg_replace('/\s+/', '-', $video->caption),60,'-');
@endphp
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
		<div class="video-container">
			<video width="230" height="170" controls class="imagecard">
			  <source src="{{url('images/wishings/video/'.$video->name)}}" type="video/mp4" alt="Gif not found">
			  Your browser does not support this Video.
			</video>  
		</div>
    <br><br>
    <small class="">{{$video->caption}}</small>
      </div>
      <div class="card-footer">
        <p class="card-text">
          <small class="text-muted">Fest : <a href={{url('fest/'.$video->cat_slug)}}>{{$video->cat_slug}}</a></small>
          &nbsp&nbsp&nbsp
          <small class="text-muted" data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 10px;">(</i>{{$video->feat}})</small>&nbsp&nbsp&nbsp
        </p>
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-right">
          <a href="{{url('images/wishings/video/'.$video->name)}}" download="{{$video->name}}" data-toggle="tooltip" title="Download"><i class="fa fa-download" style="font-size:20px"></i><small>({{$size}}mb)</small></a>
          &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$video->cat_slug).'/videos/'.$videourl.$video->id}}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;" data-toggle="tooltip" title="Go to Share Wall"></i></a>
        </div>
        </p>
      </div>
  </div>
</div>
@empty
<div class="col-md-4">
<p>There are no Video wishes yet.</p>
</div>
@endforelse
