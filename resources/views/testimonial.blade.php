@extends('layouts.template')

@section('title')
    Testimonials page
@endsection

@push('header')
    Testimonials
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.testimonial')
@endsection

