@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="display-2 mb-4">All Teachers</h2>
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Job</th>
                <th>IS Popular</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->job_title}}</td>
                    <td>{{$teacher->is_popular? 'Yes': 'No'}}</td>
                    <td><a href="{{route('showTeacher', $teacher->id)}}">Show</a></td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div >
            <a class="btn btn-primary" href="{{route('createTeacher')}}">Add new Teacher!!</a>

        </div>

    </div>
@endsection

