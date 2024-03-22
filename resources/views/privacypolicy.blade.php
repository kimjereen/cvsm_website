<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">PRIVACY POLICY</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->

</section>


<!-- Include footer.php -->
@include('footer')

@endsection