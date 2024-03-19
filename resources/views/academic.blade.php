<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">ACADEMIC PROGRAMS</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-dvm" onclick="updateURL('#tab-dvm')">Doctor of Veterinary Medicine</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-mvst" onclick="updateURL('#tab-mvst')">Master of Veterinary Studies</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-dvm" class="container tab-pane active">
            @include('academic.dvm')
        </div>
        <div id="tab-mvst" class="container tab-pane active">
            @include('academic.mvst')
        </div>
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection