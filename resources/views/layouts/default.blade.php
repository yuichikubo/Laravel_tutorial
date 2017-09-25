<!DOCTYPE HTML>

<html lang="ja">
<head>
	<meta charset="utf-8" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 </head>
  <body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <a href="/bbc" id="logo">Laravel掲示板</a>        
        <nav>
          <ul class="nav navbar-nav navbar-right">
            <li>{{ link_to("#", 'HOME')}}</li>
            <li>{{ link_to("#", 'HELP')}}</li>
            <li>{{ link_to("#", 'Log in')}}</li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>