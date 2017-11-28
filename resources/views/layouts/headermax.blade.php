    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
      <a class="navbar-brand" href="/">Festishes{{-- <img src="{{url('images/logo/logo.png')}}"> --}}</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
{{--         <form class="form-inline ml-auto mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search Wishes" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{$nav_home or ''}}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{$nav_about or ''}}">
            <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item {{$nav_contact or ''}}">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </li>
          <li class="nav-item {{$nav_help or ''}}">
            <a class="nav-link" href="{{url('help')}}">Help</a>
          </li>
{{--           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            En
            </a>
            <div class="dropdown-menu" aria-labelledby="Preview">
            <a class="dropdown-item" href="#">English</a>
            <a class="dropdown-item" href="#">Malayalam</a>
            <a class="dropdown-item" href="#">Hindi</a>
            </div>
          </li> --}}
        </ul>
      </div>
    </nav>