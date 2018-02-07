@extends('base')

@section('content')

<div class="container">
  <div class="row">
      <div class="welcome-block">
        <a href="{{ url('students/create') }}" class="welcome-message">
          Manage your students now
        </a>
      </div>
  </div>
</div>

@endsection