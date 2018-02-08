@extends('base')

@section('content')
<div class="container">
    <form class="form" method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <h1>Create a Student</h1>
        <div class="form-group">
            <label>
                Perfil image:
            </label>
            <input type="file" name="image" value="{{ old('image') }}" />
            @if ($errors->has('image'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('image') }}
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="name">
                *Name:
            </label>
            <input 
                class="form-control" 
                type="text" 
                name="name"
                value="{{old('name')}}"
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
                value="{{old('age')}}"
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
                value="{{old('email')}}"
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
                value="{{old('address')}}"
            />
            @if ($errors->has('address'))
                <div class="alert alert-danger">
                    <ul>
                        {{ $errors->first('address') }}
                    </ul>
                </div>
            @endif
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
        
    </form>
</div>
@endsection