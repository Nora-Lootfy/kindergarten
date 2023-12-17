@extends('layouts.template')

@section('title')
    Appointment Page
@endsection

@push('header')
    Appointment
@endpush

@section('content')
    @include('includes.pageHeader')
    @include('includes.appointment')
@endsection


