@extends('layouts.template')

@section('title')
    Teachers Page
@endsection

@push('header')
    Teachers
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.team')
@endsection
