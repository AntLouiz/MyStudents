@extends('base')

@section('content')
  <div>
    <ul>
    <div class="container">
      <div class="row">
              @foreach ($students as $student)
                  <li>
                    {{$student->name}}
                    <a href="{{ route('students.update', $student) }}">Update</a>
                  </li>
              @endforeach
      </div>
    </div>
    </ul>
  </div>
@endsection