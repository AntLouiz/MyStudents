@extends('base')

@section('content')
<h1>Create a Student</h1>

<form class="form" method="POST" action="{{ route('students.store') }}">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>
            Name:
        </label>
        <input class="form-control" type="text" name="name"/>
    </div>

    <div class="form-group">
        <label>
            Age:
        </label>
        <input class="form-control" type="number" name="age"/>
    </div>

    <div class="form-group">
        <label>
            Email:
        </label>
        <input class="form-control" type="email" name="email"/>
    </div>
    <div class="form-group">
        <label>
            Address:
        </label>
        <input class="form-control" type="text" name="Address"/>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection