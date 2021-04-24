<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="{{ URL::asset('app.css') }}" rel="stylesheet">

</head>
<body>

  <div class="jumbotron text-center p-3 mb-0">
    <h1>Online Food Ordering App</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>
  <nav class="navbar navbar-expand-sm bg-light">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href=" {{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register') }}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
      </li>
    </ul>

  </nav>


@yield('content')

</body>
</html>
