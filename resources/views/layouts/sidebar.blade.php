<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-info">FESTIVALS</a>
    @foreach($categories as $category)
    <a href="{{ URL::to('fest/'.$category->slug) }}" class="list-group-item list-group-item-action">{{$category->name}}</a>
    @endforeach
  </div>
</div><!--/span-->