<p><span class="badge badge-secondary">Texts</span></p>
<div class="row">
@forelse($texts as $text)
<div class="col-md-4">
	<div class="card bg-light mb-3" style="max-width: 20rem;">
		<div class="card-header">{{$text->cat_slug}}</div>
		<div class="card-body">
		  {{-- <h4 class="card-title">Light card title</h4> --}}
		  <p class="card-text">{{$text->body}}</p>
		</div>
	</div>
</div>
@empty
<div class="col-md-4">
<p>There are no Text wishes yet.</p>
</div>
@endforelse
</div>

{{-- ----------------------------------------------------------------- --}}
<p><span class="badge badge-secondary">Images</span></p>
<div class="row">
@forelse($images as $image)
<div class="col-md-4">
	<div class="card bg-light mb-3" style="max-width: 20rem;">
		<div class="card-header">{{$image->cat_slug}}</div>
		<div class="card-body">
		  {{-- <h4 class="card-title">Light card title</h4> --}}
		  <p class="card-text">{{$image->body}}</p>
		</div>
	</div>
</div>
@empty
<div class="col-md-4">
<p>There are no Image wishes yet.</p>
</div>
@endforelse
</div>

{{-- ----------------------------------------------------------------- --}}
<p><span class="badge badge-secondary">Gifs</span></p>
<div class="row">
@forelse($gifs as $gif)
<div class="col-md-4">
	<div class="card bg-light mb-3" style="max-width: 20rem;">
		<div class="card-header">{{$gif->cat_slug}}</div>
		<div class="card-body">
		  {{-- <h4 class="card-title">Light card title</h4> --}}
		  <p class="card-text">{{$gif->body}}</p>
		</div>
	</div>
</div>
@empty
<div class="col-md-4">
<p>There are no Gif wishes yet.</p>
</div>
@endforelse
</div>

{{-- ----------------------------------------------------------------- --}}
<p><span class="badge badge-secondary">Videos</span></p>
<div class="row">
@forelse($videos as $video)
<div class="col-md-4">
	<div class="card bg-light mb-3" style="max-width: 20rem;">
		<div class="card-header">{{$video->cat_slug}}</div>
		<div class="card-body">
		  {{-- <h4 class="card-title">Light card title</h4> --}}
		  <p class="card-text">{{$video->body}}</p>
		</div>
	</div>
</div>
@empty
<div class="col-md-4">
<p>There are no Video wishes yet.</p>
</div>
@endforelse
</div>

</div>