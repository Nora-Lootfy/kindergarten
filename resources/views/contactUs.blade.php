@extends('layouts.template')

@section('title')
    Contact Us page
@endsection

@push('header')
    Contact US
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.contact')
@endsection
