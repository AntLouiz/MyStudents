<!DOCTYPE html>
<html>
<head>
    <title>My students</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('js/app.js') }}">
</head>
<body>
<div class="container">

  <nav class="navbar">
      <div class="navbar-header">
          <a class="navbar-brand">My students</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ url('students/') }}">View All Students</a></li>
          <a href="{{ url('students/create') }}" class="btn btn-success">Create a Student</a>
      </ul>
  </nav>
  @yield('content')
</div>
</body>
</html>