<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">RESOURCE & FACILITIES</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-lecture-halls" onclick="updateURL('#tab-lecture-halls')">Lecture Halls</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-laboratories" onclick="updateURL('#tab-laboratories')">Laboratories</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-centrad" onclick="updateURL('#tab-centrad')">CenTrAD</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-online-resources" onclick="updateURL('#tab-online-resources')">Online Resources</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-lecture-halls" class="container tab-pane active">
            @include('facilities.lecture')
        </div>
        <div id="tab-laboratories" class="container tab-pane fade">
            @include('facilities.laboratories')
        </div>
        <div id="tab-centrad" class="container tab-pane fade">
            @include('facilities.centrad')
        </div>
        <div id="tab-online-resources" class="container tab-pane fade">
            @include('facilities.onlineresources')
        </div>
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection