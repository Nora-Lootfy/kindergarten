@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="display-2 mb-4">All Testimonials</h2>
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Job</th>
                <th>Comment</th>
                <th>Published</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

                @foreach($testimonials as $testimonial)
                    <tr>
                    <td>{{$testimonial->name}}</td>
                    <td>{{$testimonial->job}}</td>
                    <td>{{$testimonial->comment}}</td>
                    <td>{{$testimonial->published? 'Yes': 'No'}}</td>
                    <td><a href="{{route('showTestimonial', $testimonial->id)}}">Show</a></td>
                    <td><a href="{{route('editTestimonial', $testimonial->id)}}">Edit</a></td>
                    <td><a href="{{route('destroyTestimonial', $testimonial->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div >
            <a class="btn btn-primary" href="{{route('createTestimonial')}}">Add new Testimonial!!</a>

        </div>

    </div>
@endsection

