<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/extension-cover.jpeg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">EXTENSION</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-vet-mission" onclick="updateURL('#tab-vet-mission')">Vet Mission</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-cattle-dispersal" onclick="updateURL('#tab-cattle-dispersal')">Cattle Dispersal</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-veterinary-teaching-hospital" onclick="updateURL('#tab-veterinary-teaching-hospital')">Veterinary Teaching Hospital</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-vet-mission" class="container tab-pane active">
            @include('extension.vetmission')
        </div>
        <div id="tab-cattle-dispersal" class="container tab-pane fade">
            @include('extension.cattledispersal')
        </div>
        <div id="tab-veterinary-teaching-hospital" class="container tab-pane fade">
            @include('extension.teachinghospital')
        </div>
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection