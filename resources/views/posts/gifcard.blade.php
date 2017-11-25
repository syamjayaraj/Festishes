@forelse($gifs as $gif)
@php $size=round($gif->size/1000,1);  @endphp
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
	<img src="{{url('images/wishings/gif/'.$gif->name)}}" alt="Gif not found" class="imagecard">
    <br><br>
    <small class="">{{$gif->caption}}</small>
      </div>
      <div class="card-footer">
        <p class="card-text">
          <small class="text-muted">Fest : <a href={{url('fest/'.$gif->cat_slug)}}>{{$gif->cat_slug}}</a></small>
          &nbsp&nbsp&nbsp
          <small class="text-muted" data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 10px;">(</i>{{$gif->feat}})</small>&nbsp&nbsp&nbsp
        </p>
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-right">
          <a href="{{url('images/wishings/gif/'.$gif->name)}}" download="{{$gif->name}}" data-toggle="tooltip" title="Download"><i class="fa fa-download" style="font-size:20px"></i><small>({{$size}}mb)</small></a>
          &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$gif->cat_slug).'/gifs/'.$gif->id}}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;" data-toggle="tooltip" title="Go to Share Wall"></i></a>
        </div>
        </p>
      </div>
  </div>
</div>
@empty
<div class="col-md-4">
<p>There are no Gif wishes yet.</p>
</div>
@endforelse


