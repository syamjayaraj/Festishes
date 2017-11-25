@forelse($texts as $text)
@php $tbody=nl2br(e($text->body)) @endphp
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
        <p class="card-text" id="copy-{{$text->id}}">
          {!!$value=str_limit($tbody,300,
            '...
            <a href="" data-toggle="modal" data-target=#'.$text['id'].' data-toggle="tooltip" title="Expand" >Read more</a>'
          )!!}
        </p>
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-right">
          <small class="text-muted">Fest : <a href={{url('fest/'.$text->cat_slug)}}>{{$text->cat_slug}}</a></small>
          &nbsp&nbsp&nbsp
          <small class="text-muted" data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 10px;"></i> {{$text->feat}}</small>&nbsp&nbsp&nbsp
          <a href="" onclick="copyToClipboard(document.getElementById('copy-{{$text->id}}'));" data-toggle="tooltip" title="Copy to Clipboard"><i class="fa fa-clipboard" style="font-size:20px"></i></a>
          &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$text->cat_slug).'/texts/'.$text->id}}"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;" data-toggle="tooltip" title="Go to Share Wall"></i></a>
        </div>
        </p>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="{{$text->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$text->cat_slug}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$text->body}}
      </div>
      <div class="modal-footer">
        <small class="text-muted">Fest : <a href={{url('fest/'.$text->cat_slug)}}>{{$text->cat_slug}}</a></small>
          &nbsp&nbsp&nbsp
        <small class="text-muted" data-toggle="tooltip" title="Total Views"><i class="fa fa-eye" style="font-size: 10px;"></i> {{$text->feat}}</small>&nbsp&nbsp&nbsp
        <a href="" onclick="copyToClipboard(document.getElementById('copy-{{$text->id}}'));" data-toggle="tooltip" title="Copy to Clipboard"><i class="fa fa-clipboard" style="font-size:36px"></i></a>
        &nbsp&nbsp&nbsp
          <a href="{{ URL::to('fest/'.$text->cat_slug).'/texts/'.$text->id}}" data-toggle="tooltip" title="Go to Share Wall"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 20px;"></i></a>  
      </div>
    </div>
  </div>
</div>

@empty
<div class="col-md-4">
<p>There are no Text wishes yet.</p>
</div>
@endforelse
