@extends('layouts.admin')



@section('content')
    <div class="container">

        <div class="row">
            <h2 class="text-light bg-dark" style="padding: 25px; border-radius:25px; text-align: center">{{$teacher->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/'.$teacher->image)}}" alt="" width="75%">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="text-light bg-secondary" style="padding: 25px; border-radius:25px;">Job Title:<br>{{$teacher->job_title}}</p>
                </div>
                <div class="row">
                    @if($teacher->is_popular)
                        <p class="text-light bg-secondary" style="padding: 20px; border-radius:25px; text-align: center">Popular</p>
                    @else
                        <p class="text-light bg-secondary" style="padding: 20px; border-radius:25px; text-align: center">not Popular</p>
                    @endif
                </div>

            </div>
        </div>
        <br>
        <div>
            <a class="btn btn-primary" href="{{route('createTeacher')}}">Add new Teacher!!</a>
            <a class="btn btn-secondary" href="{{route('teachers')}}">Back to All Teachers</a>
        </div>
    </div>

@endsection
