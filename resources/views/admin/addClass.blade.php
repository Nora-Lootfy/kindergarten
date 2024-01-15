@extends('layouts.admin')



@section('content')
    <div class="container">
        @if(count($teachers) == 0)
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="display-1">No teachers</h1>
                        <p class="mb-4">Try adding teachers first then back to classes to add them.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('createTeacher')}}">Add a new Teacher</a>
                    </div>
                </div>
            </div>
        @else
            <h2 class="display-2 mb-4">Add Class</h2>
            <form action="{{route('storeClass')}}" method="post" enctype="multipart/form-data">
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
                    <label for="capacity">Capacity:</label>
                    <input type="number"  step="1" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity">
                    @error('capacity')
                    <div class="alert alert-danger">
                        <strong>Error!!</strong> {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number"  step="0.1" class="form-control" id="price" placeholder="Enter price" name="price">
                    @error('price')
                    <div class="alert alert-danger">
                        <strong>Error!!</strong> {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>Age: </label>
                        <div class="col-md-3">
                            <label class="form-label" for="form1Example2">from: </label>
                            <input type="range" max="10" min="1" step="1" onchange="document.getElementById('textStart').value=this.value;"  name="age_from" value="{{old('age_from')}}">
                            <input type="text" disabled id="textStart" value="{{old('age_from')}}" style="background: transparent; border: none; margin-left: 10px" >
                            @error('age_from')
                            <div class="alert alert-danger">
                                <strong>Error!!</strong> {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-offset-1 col-md-3">
                            <label class="form-label" for="form1Example2">to: </label>
                            <input type="range" max="10" min="1" step="1" onchange="document.getElementById('textEnd').value=this.value;" name="age_to" value="{{old('age_to')}}">
                            <input type="text" disabled id="textEnd" value="{{old('age_to')}}" style="background: transparent; border: none; margin-left: 10px" >
                            @error('age_to')
                            <div class="alert alert-danger">
                                <strong>Error!!</strong> {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>Time: </label>
                        <div class="col-md-3">
                            <label class="form-label" for="form1Example2">start: </label>
                            <input type="time" name="starts_at" value="{{old('starts_at')}}">
                            @error('starts_at')
                            <div class="alert alert-danger">
                                <strong>Error!!</strong> {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-offset-1 col-md-3">
                            <label class="form-label" for="form1Example2">end: </label>
                            <input type="time" name="ends_at" value="{{old('ends_at')}}">
                            @error('ends_at')
                            <div class="alert alert-danger">
                                <strong>Error!!</strong> {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label for="teacher">Teacher:</label>
                    <select id="teacher" name="teacher_id">
                        <option value="">Select teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>

                <br>
                <button type="submit" class="btn btn-primary" style="width: 100px">Add</button>
            </form>
        @endif
    </div>
@endsection
