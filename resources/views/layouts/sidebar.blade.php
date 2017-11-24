<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
<input id="myInput" type="text" placeholder="Search Fest" class="list-group-item list-group-item-action">
<br>
<div class="list-group" >
	<a href="#" class="list-group-item list-group-item-info">FESTIVALS</a>	
	<div id="myDIV">
	    @foreach($categories as $category)
	    <a href="{{ URL::to('fest/'.$category->slug) }}" class="list-group-item list-group-item-action">{{$category->name}}</a>
	    @endforeach
	</div>
</div>
</div><!--/span-->


{{-- jQuery Search Filter --}}
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>