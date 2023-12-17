@extends('layouts.template')

@section('title')
    Facilities Page
@endsection

@push('header')
    Facilities
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.facilities')
@endsection

