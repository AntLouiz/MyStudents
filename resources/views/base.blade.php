<!DOCTYPE html>
<html>
<head>
    <title>My students</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('js/app.js') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style type="text/css">
  .glyphicon-bell{
    font-size: 20px;
    color: gray;
  }
</style>
<div class="container" id="app">

  <nav class="navbar">
      <div class="navbar-header">
          <a class="navbar-brand">My students</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ url('students/') }}">View All Students</a></li>
          <a href="{{ url('students/create') }}" class="btn btn-success">Create a Student</a>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
          <a href="#"><span class="glyphicon glyphicon-bell"></span></a>
      </li>
    </ul>
  </nav>
  @yield('content')
</div>
  <script type="text/javascript">
    var socket = io.connect('http://localhost:3000');

    socket.on('student-channel:studentadded', function(message) {
      $('.glyphicon-bell').css('color', 'red');
    });
  </script>
</body>
</html>