@extends('layouts.template')

@section('title')
    Home page
@endsection

@section('content')
    @include('includes.carousel')
    @include('includes.facilities')
    @include('includes.about')
    @include('includes.callToAction')
    @include('includes.classes')
    @include('includes.appointment')
    @include('includes.team')
    @include('includes.testimonial')
@endsection
