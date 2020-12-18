@extends('base')

@section('content')

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header" style="background-color: pink"><h1>Create New Instructor</h1></div>
            <div class="card-body">

            @include('errors')

            {!!Form::open(['url'=>'/instructors', 'method'=>'post'])!!}
            @include('instructors._form')

            <div class="form-group">
                <a href="{{url('/instructors')}}" class="btn btn-dark float-right" style="margin-left: 5px">Cancel</a>
                <button class="btn btn-info float-right">Create</button>

            </div>

            </div>

        </div>
        {!!Form::close()!!}

    </div>

</div>

@endsection