<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">DEPARTMENTS</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-animal-management" onclick="updateURL('#tab-animal-management')">Animal Management</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-morphophysiology" onclick="updateURL('#tab-morphophysiology')">Morphophysiology</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pathobiology" onclick="updateURL('#tab-pathobiology')">Pathobiology</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-veterinary-clinical-sciences" onclick="updateURL('#tab-veterinary-clinical-sciences')">Veterinary Clinical Sciences</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-animal-management" class="container tab-pane active">
            @include('about.departments.animalmanagement')
        </div>
        <div id="tab-morphophysiology" class="container tab-pane fade">
            @include('about.departments.morphophysiology')
        </div>
        <div id="tab-pathobiology" class="container tab-pane fade">
            @include('about.departments.pathobiology')
        </div>
        <div id="tab-veterinary-clinical-sciences" class="container tab-pane fade">
            @include('about.departments.clinicalscience')
        </div>
    </div>
    
</section>


<!-- Include footer.php -->
@include('footer')

@endsection