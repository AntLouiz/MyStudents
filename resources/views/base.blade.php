<!DOCTYPE html>
<html>
<head>
    <title>My students</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
          <a class="navbar-brand">My students</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ url('students/') }}">View All Students</a></li>
          <li><a href="{{ url('students/create') }}">Create a Student</a>
      </ul>
  </nav>
  @yield('content')
</div>
</body>
</html>