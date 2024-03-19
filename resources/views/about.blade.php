<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">ABOUT US</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-mission-vision" onclick="updateURL('#tab-mission-vision')">Mission Vision</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-history" onclick="updateURL('#tab-history')">History</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-objectives" onclick="updateURL('#tab-objectives')">Objectives</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-administration" onclick="updateURL('#tab-administration')">Administration</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-departments" onclick="updateURL('#tab-departments')">Departments</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-accreditations" onclick="updateURL('#tab-accreditations')">Accreditations</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-mission-vision" class="container tab-pane active">
            @include('about.missionvision')
        </div>
        <div id="tab-history" class="container tab-pane fade">
            @include('about.history')
        </div>
        <div id="tab-objectives" class="container tab-pane fade">
            @include('about.objectives')
        </div>
        <div id="tab-administration" class="container tab-pane">
            @include('about.administration')
        </div>
        <div id="tab-departments" class="container tab-pane fade">
            @include('about.departments')
        </div>
        <div id="tab-accreditations" class="container tab-pane fade">
            @include('about.accreditations')
        </div>
    </div>
    
</section>


<!-- Include footer.php -->
@include('footer')

@endsection