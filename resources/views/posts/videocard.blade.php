@forelse($videos as $video)
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
		<div class="video-container">
			<video width="230" height="170" controls>
			  <source src="{{url('images/wishings/video/'.$video->name)}}" type="video/mp4" alt="Gif not found">
			  Your browser does not support this Video.
			</video>  
		</div>
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-right">
          <small class="text-muted">Fest : <a href={{url('fest/'.$video->cat_slug)}}>{{$cat_slug->name}}</a></small>
          &nbsp&nbsp&nbsp
          <a href="{{url('images/wishings/video/'.$video->name)}}" download="{{$video->name}}" data-toggle="tooltip" title="Download"><i class="fa fa-download" style="font-size:20px"></i></a>
          &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$video->cat_slug).'/videos/'.$video->id}}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;" data-toggle="tooltip" title="Go to Share Wall"></i></a>
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
