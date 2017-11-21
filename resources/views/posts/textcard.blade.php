@forelse($texts as $text)
<div class="col-md-4" style="padding-bottom: 20px"> 
  <div class="card bg-light mb-3  h-100">
      <div class="card-body">
        <p class="card-text" id="copy-{{$text->id}}">{{$value=str_limit($text->body,250)}}</p>
      </div>
      <div class="card-footer">
        <p class="card-text">
        <div class="text-left">
        <small class="text-muted">Fest : <a href={{url('fest/'.$text->cat_slug)}}>Onam</a></small>
       </div>
       <hr>
        <div class="text-right">
          <a href="" class="btn btn-default" data-toggle="modal" data-target="#{{$text->id}}" data-toggle="tooltip" title="Expand" ><i class="fa fa-arrows-alt" aria-hidden="true" style="font-size: 20px;"></i></a>

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