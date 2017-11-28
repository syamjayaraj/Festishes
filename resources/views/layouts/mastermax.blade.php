<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>@yield('title') | Festishes-Be the first to wish your favorites | Wishing messages-Texts,Images,Gifs,Videos</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ URL::asset('css/exp.css') }}" rel="stylesheet">
  </head>
<body class="flexcroll">
@include('layouts.headermax')
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          @yield('content')
          <footer class="mastfoot">
            <div class="inner">
              <p>Made with Love in God's own country | Designed by <a href="http://www.devhornet.com">DevHornet</a></p>
              <p>Copyright &copy; <a href="http://www.festishes.com">Festishes</a> 2017</p>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110090941-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110090941-1');
    </script>
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