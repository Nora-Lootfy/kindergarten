<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div class="container-xxl bg-white p-0">
    @yield('content')
    @include('includes.footer')
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
