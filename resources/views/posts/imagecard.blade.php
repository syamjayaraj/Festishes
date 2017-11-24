@forelse($images as $image)
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
		<img src="{{url('images/wishings/image/'.$image->name)}}" alt="Image not found" class="imagecard">
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-right">
          <small class="text-muted">Fest : <a href={{url('fest/'.$image->cat_slug)}}>{{$cat_slug->name}}</a></small>
          &nbsp&nbsp&nbsp
          <small class="text-muted" data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 10px;"></i> {{$image->feat}}</small>&nbsp&nbsp&nbsp
          <a href="{{url('images/wishings/image/'.$image->name)}}" download="{{$image->name}}" data-toggle="tooltip" title="Download"><i class="fa fa-download" style="font-size:20px"></i></a>
          &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$image->cat_slug).'/images/'.$image->id}}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;" data-toggle="tooltip" title="Go to Share Wall"></i></a>
        </div>
        </p>
      </div>
  </div>
</div>
@empty
<div class="col-md-4">
<p>There are no Image wishes yet.</p>
</div>
@endforelse

