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
  <nav class="navbar navbar-default">
      <div class="container">

          <div class="navbar-header">
              <a class="navbar-brand" href="/">Logo</a>
          </div>
          <ul class="nav navbar-nav">
              <li>
                <p class="navbar-btn">
                    <a href="#" href="{{ url('students/') }}" class="btn">View All Students</a>
                </p>
              </li>
              <li>
                <p class="navbar-btn">
                  <a href="{{ url('students/create') }}" class="btn">Create a Student</a>
                </p>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <notification-bell></notification-bell>
            </li>
          </ul>
      </div>
  </nav>
  @yield('content')
</body>

<script src="{{ mix('js/app.js') }}"></script>
</html>