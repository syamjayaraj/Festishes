@foreach($texts as $text)
<div class="col-md-4">
	<div class="card bg-light mb-3" style="max-width: 20rem;">
		<div class="card-header">{{$text->cat_slug}}</div>
		<div class="card-body">
		  {{-- <h4 class="card-title">Light card title</h4> --}}
		  <p class="card-text">{{$text->body}}</p>
		</div>
	</div>
</div>
@endforeach