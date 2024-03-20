<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">E-HISTOLOGY</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-mammals" onclick="updateURL('#tab-mammals')">Mammals</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-avians" onclick="updateURL('#tab-avians')">Avians</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-mammals" class="container tab-pane active">
            @include('facilities.onlineresources.ehistology-categories.mammals')
        </div>
        <div id="tab-avians" class="container tab-pane fade">
            @include('facilities.onlineresources.ehistology-categories.avians')
        </div>
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection