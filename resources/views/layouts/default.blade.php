<!DOCTYPE HTML>

<html lang="ja">
<head>
	<meta charset="utf-8" />
  <title>@yield("title", "Home")</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/css/custom.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 </head>
  <body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <a href="/" id="logo">LaravelAPP</a>        
        <nav>
          <ul class="nav navbar-nav navbar-right">
            <li>{{ link_to("/", 'HOME')}}</li>
            <li>{{ link_to("/help", 'HELP')}}</li>
            @if (Auth::check())
            <li>{{ link_to('/users', "Users" )}}</li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Account <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li>{{ link_to("/user/{$user->id}", "Profile")}}</li>
              <li>{{ link_to("/user/{$user->id}/edit", "Settings")}}</li>
              <li class="divider"></li>
              <li>
                {{ link_to("/logout/{$user->id}", "Log out")}}
              </li>
            </ul>
            @else
          </li>
            <li>{{ link_to("/login", 'Log in')}}</li>
          </ul>
          @endif
        </nav>
      </div>
    </header>
    <div class="container">
      @yield('content')
      @include('layouts.footer')
    </div>
  </body>
</html>