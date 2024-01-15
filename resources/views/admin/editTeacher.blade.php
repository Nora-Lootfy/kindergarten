@extends('layouts.admin')



@section('content')
    <div class="container">
        <h2 class="display-2 mb-4">Edit Teacher</h2>
        <form action="{{route('updateTeacher', $teacher->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$teacher->name}}">

                @error('name')
                <div class="alert alert-danger">
                    <strong>Error!!</strong> {{$message}}
                </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="job">Job:</label>
                <input type="text" class="form-control" id="job" placeholder="Enter job" name="job_title" value="{{$teacher->job_title}}">
                @error('job_title')
                <div class="alert alert-danger">
                    <strong>Error!!</strong> {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <br>
                <img src="{{asset('assets/images/'.$teacher->image)}}" alt="teacher" width="15%">
                `@error('image')
                {{ $message }}
                @enderror
            </div>

            <br>
            <button type="submit" class="btn btn-primary" style="width: 100px">Edit</button>
        </form>
    </div>
@endsection

