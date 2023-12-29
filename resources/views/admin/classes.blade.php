@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="display-2 mb-4">All Classes</h2>
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Time</th>
                <th>Age</th>
                <th>Capacity</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($classes as $class)
                <tr>
                    <td>{{$class->name}}</td>
                    <td>{{$class->price}}$</td>
                    <td>{{$class->starts_at}}-{{$class->ends_at}}</td>
                    <td>{{$class->age_from}}-{{$class->age_to}}</td>
                    <td>{{$class->capacity}}</td>

                    <td><a href="{{route('showClass', $class->id)}}">Show</a></td>
                    <td><a href="{{route('editClass', $class->id)}}">Edit</a></td>
                    <td><a href="{{route('destroyClass', $class->id)}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div >
            <a class="btn btn-primary" href="{{route('createClass')}}">Add new Class!!</a>

        </div>

    </div>
@endsection

