<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ URL::asset('css/exp.css') }}" rel="stylesheet">
  </head>

<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">



          <main role="main" class="inner cover">
            <p class="lead" id="copy-wish">{{$text->body}}</p>
            <p class="lead">
              
                    <div class="modal-footer">
                      <a href="" onclick="copyToClipboard(document.getElementById('copy-wish'));" data-toggle="tooltip" title="Copy to Clipboard"><i class="fa fa-clipboard" style="font-size:36px"></i></a>


                          <!-- Default dropup button -->
                  <div class="btn-group dropup">
                    <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt-square" style="font-size:36px" data-toggle="tooltip" title="Share"></i></a>
                    <div class="dropdown-menu">
                      <li class="dropdown-item"><a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" data-toggle="tooltip" title="Share Whatsapp"><i class="fa fa-whatsapp"></i>&nbsp&nbsp<span>Whatsapp</span></a></li>

                      <li class="dropdown-item" data-href="{{url()->current()}}" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.festishes.com%2Ffest%2F{{$text->cat_slug}}%2Ffeat%2F{{$text->id}}&amp;src=sdkpreparse"><i class="fa fa-facebook"></i>&nbsp&nbsp<span>Facebook</span></a></li>

                      <li class="dropdown-item"><a href="https://twitter.com/share?url={{url()->current()}}" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i>&nbsp&nbsp<span>Twitter</span></a></li>
                    </div>
                  </div>   

                  </div>

                  




            </p>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>Made with Love in God's own country | Designed by <a href="http://devhornet.com">DevHornet</a></p>
              <p>Copyright &copy; <a href="http://floyet.com">FloYET</a> 2017</p>
            </div>
          </footer>

        </div>

      </div>

    </div>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="{{ URL::asset('js/jquery-3.2.1.js') }}"><\/script>')</script>
    <script src="{{ URL::asset('js/slim.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ URL::asset('js/offcanvas.js') }}"></script>
    <script src="{{ URL::asset('js/modal.js') }}"></script>











    <script>
window.copyToClipboard = function (node) {
  // Skip IE < 9 which uses TextRange instead of Range
  if (!window.getSelection) {
    return false;
  }

  var doc = document;
  var result = false;
  var ranges = [];
  var selection = window.getSelection();

  if (typeof node === 'string' || node instanceof String) {
    var container = doc.createElement('div');
    container.appendChild(doc.createTextNode(node));
    
    doc.body.appendChild(container);
    result = copyToClipboard(container);
    doc.body.removeChild(container); 

    return result;
  }

  for(var i = 0; i < selection.rangeCount; i++) {
    ranges[i] = selection.getRangeAt(i);
  }

  selection.selectAllChildren(node);

  try {  
    result = doc.execCommand('copy');
  } catch(err) { }

  // Restore previous selection if any
  selection.removeAllRanges();
  ranges.forEach(selection.addRange.bind(selection));

  return result;
};
</script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  </body>
</html>