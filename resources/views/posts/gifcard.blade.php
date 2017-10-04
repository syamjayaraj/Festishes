@foreach($gifs as $gif)
<div class="card">
	<img src="{{url('images/wishings/gif/'.$gif->name)}}" alt="Image is not found" class="imagecard">
</div>
@endforeach


