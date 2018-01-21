@extends('base')

@section('content')
<div class="container">

    <h1>Update the student {{ $student->name }}</h1>
    <form class="form" method="PATCH" action="{{ route('students.update', $student) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
            <label>
                Perfil image:
            </label>
            <div class="form-group">
                <img class="form-img" src="{{ asset('images/students/'.$student->image_url) }}" alt="Card image cap">
            </div>
        </div>
        <div class="form-group">
            <label for="name">
                *Name:
            </label>
            <input 
                class="form-control" 
                type="text" 
                name="name"
                value="{{ $student->name }}"
            />
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('name') }}
                    </ul>
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>
                *Age:
            </label>
            <input 
                class="form-control" 
                type="number" 
                name="age"
                value="{{ $student->age }}"
            />
            @if ($errors->has('age'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('age') }}
                    </ul>
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>
                *Email:
            </label>
            <input 
                class="form-control" 
                type="email" 
                name="email"
                value="{{ $student->email }}"
            />
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('email') }}
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>
                Address:
            </label>
            <input 
                class="form-control" 
                type="text" 
                name="address"
                value="{{ $student->address }}"
            />
            @if ($errors->has('address'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('address') }}
                    </ul>
                </div>
            @endif
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
        
    </form>
</div>
@endsection