@extends('layouts.admin')



@section('content')
    <div class="container">

        <div class="row">
            <h2 class="text-light bg-dark" style="padding: 25px; border-radius:25px; text-align: center">{{$class->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/'.$class->image)}}" alt="" width="70%">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="text-light" style="padding: 25px; border-radius:25px; background-color: #FE5D37">Age:<br>{{$class->age_from}}-{{$class->age_to}}Years</p>
                </div>
                <div class="row">
                    <p class="text-light" style="padding: 25px; border-radius:25px; background-color: #198754">Time:<br>from:{{$class->starts_at}} to:{{$class->ends_at}}</p>
                </div>
                <div class="row">
                    <p class="text-light" style="padding: 25px; border-radius:25px; background-color: #ffc107">Capacity:<br>{{$class->capacity}}Kids</p>
                </div>
                <div class="row">
                    <p class="text-light bg-secondary" style="padding: 25px; border-radius:25px;">Teacher:<br>{{$class->teacher->name}}</p>
                </div>

            </div>
        </div>
        <br>
        <div>
            <a class="btn btn-primary" href="{{route('createClass')}}">Add new Class!!</a>
            <a class="btn btn-secondary" href="{{route('class')}}">Back to All Classes</a>
        </div>
    </div>

@endsection
