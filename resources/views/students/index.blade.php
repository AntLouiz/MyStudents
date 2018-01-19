@extends('base')

@section('content')
  <div>
    <div class="container center">
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
      <div class="row">
              @foreach ($students as $student)
              
                    <div class="card col-md-2">
                      @if ($student->image_url)
                        <img class="card-img-top" src="{{ asset('images/students/'.$student->image_url) }}" alt="Card image cap">
                      @else
                        <img class="card-img" src="{{ asset('images/default_avatar.png') }}" alt="Card image cap">
                      @endif
                      <div class="card-body">
                        <h5 class="card-title">{{$student->name}}</h5>
                        <p class="card-text">
                          Email: {{$student->email}}
                        </p>
                        <a 
                          href="{{ route('students.update', $student) }}"
                          class="btn btn-primary"
                        >
                          Update
                        </a>
                        <a 
                          href="{{ route('students.update', $student) }}"
                          class="btn btn-danger"
                        >
                          Delete
                        </a>
                      </div>
                    </div>
              @endforeach
    </div>
    </div>
  </div>
@endsection