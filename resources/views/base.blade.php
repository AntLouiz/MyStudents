<!DOCTYPE html>
<html>
<head>
    <title>My students</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container" id="app">

  <nav class="navbar">
      <div class="navbar-header">
          <a class="navbar-brand" href="/">Logo</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ url('students/') }}">View All Students</a></li>
          <a href="{{ url('students/create') }}" class="btn btn-success">Create a Student</a>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
          <notification-bell></notification-bell>
      </li>
    </ul>
  </nav>
  @yield('content')
</div>
</body>

<script src="{{ mix('js/app.js') }}"></script>
</html>