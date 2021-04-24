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
  <nav class="navbar navbar-expand-sm bg-light mb-3">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href=" {{ url('/chinese') }}">Chinese</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/italian') }}">Italian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/indian') }}">Indian</a>
      </li>
    </ul>
    <div class="w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
    </div>

  </nav>


@yield('content')

</body>
</html>
