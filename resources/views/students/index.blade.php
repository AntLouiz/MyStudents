@extends('base')

@section('content')
  <style type="text/css">
    .card{
          width: 26rem;
          border: solid #4a549c;
          padding: 1em;
          margin: 7px;
    }
    .card-img-top{
          width: 6em;
          border-radius: 100%;
    }
  </style>
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
                      <img class="card-img-top" src="{{ asset('images/default_avatar.png') }}" alt="Card image cap">
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