@extends('layouts.template')

@section('title')
    404 page
@endsection

@push('header')
    404 Error
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.404')
@endsection
