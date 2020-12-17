@extends('base')

@section('content')

@include('info')

<div class="float-right">
    <a href="{{url('/learners/create')}}"  class="btn btn-primary">
    Add New Learner

</a>
</div>

<h1>List of Learners</h1>
<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark white-text">

    <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
            <th>&nbsp;</th>
    
    </tr>

    </thead>

    <tbody>
    @foreach($learners as $ln)

    <tr>
    <td> 
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->level}}</td>
            <td>{{$ln->status}}</td>
            <a href="{{url('/learners/edit',['id'=>$learner])}}" class="btn btn-info btn-sm">
    
                Edit
        </a>
    </td>
    </tr>

    @endforeach
    </tbody>
</table>
@endsection
