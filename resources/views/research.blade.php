<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/research-cover.png') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">RESEARCH AND PUBLICATIONS</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->


    <ul class="nav nav-tabs page-bar text-center justify-content-center" role="tablist">
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-ongoing-projects" onclick="updateURL('#tab-ongoing-projects')">Ongoing Projects</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-publications" onclick="updateURL('#tab-publications')">Publications</a>
        </li>
        <li class="nav-item col-md container-fluid p-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-research-partners" onclick="updateURL('#tab-research-partners')">Research Partners</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="tab-ongoing-projects" class="container tab-pane active">
            @include('research.ongoing')
        </div>
        <div id="tab-publications" class="container tab-pane fade">
            @include('research.publication')
        </div>
        <div id="tab-research-partners" class="container tab-pane fade">
            @include('research.researchpartners')
        </div>
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection