@extends('layouts.admin')



@section('content')
    <div class="container">
        <h2 class="display-2 mb-4">Add Teacher</h2>
        <form action="{{route('storeTeacher')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">

                @error('name')
                <div class="alert alert-danger">
                    <strong>Error!!</strong> {{$message}}
                </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="job">Job:</label>
                <input type="text" class="form-control" id="job" placeholder="Enter job" name="job_title">
                @error('job_title')
                <div class="alert alert-danger">
                    <strong>Error!!</strong> {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                @error('image')
                {{ $message }}
                @enderror
            </div>

            <div class="checkbox">
                <label><input type="checkbox" name="is_popular"> Is Popular</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="width: 100px">Add</button>
        </form>
    </div>
@endsection
