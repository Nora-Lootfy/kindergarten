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
                    <td><a href="{{route('showTeacher', $teacher->id)}}">Show</a></td>
                    <td><a href="{{route('editTeacher', $teacher->id)}}">Edit</a></td>
                    <td><a href="{{route('destroyTeacher', $teacher->id)}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <br>

        <div class="container ">

            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>

        </div>

        <script src="{{ $chart->cdn() }}"></script>

        {{ $chart->script() }}

    </div>

    <br>

    <div >
        <a class="btn btn-primary" href="{{route('createTeacher')}}">Add new Teacher!!</a>

    </div>
@endsection

