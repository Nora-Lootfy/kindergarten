@extends('layouts.template')

@section('title')
    Call to Action Page
@endsection

@push('header')
    Become A Teachers
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.callToAction')
@endsection

