@extends('layouts.admin')



@section('content')
    <div class="container">

        <div class="row">
            <h2 class="text-light bg-dark" style="padding: 25px; border-radius:25px; text-align: center">{{$testimonial->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets/images/'.$testimonial->image)}}" alt="" width="75%">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="text-light bg-secondary" style="padding: 25px; border-radius:25px;">Comment:<br>{{$testimonial->comment}}</p>
                </div>
                <div class="row">
                    @if($testimonial->published)
                        <p class="text-light bg-secondary" style="padding: 20px; border-radius:25px; text-align: center">Is Published</p>
                    @else
                        <p class="text-light bg-secondary" style="padding: 20px; border-radius:25px; text-align: center">Is not Published</p>
                    @endif
                </div>

            </div>
        </div>
        <br>
        <div>
            <a class="btn btn-primary" href="{{route('createTestimonial')}}">Add new Testimonial!!</a>
            <a class="btn btn-secondary" href="{{route('Testimonials')}}">Back to All Testimonials</a>
        </div>
    </div>

@endsection
