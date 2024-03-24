<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <div class="container-fluid back-link-container">
        <div class="d-flex flex-row text-white align-items-center">
            <a href="{{ route('histology') }}#tab-avians" class="back-link px-2"><i class="bi bi-house-fill btn-icon"></i> Avians</a> /
            <a href="{{ route('chicken') }}" class="back-link2 px-2"> Chicken</a>
        </div>  
    </div>

    <!-- E-HISTOLOGY -->
    <div class="container my-4 g-0">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">CHICKEN IMAGES</h3>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 gallery-container">
                
        
            <div class="col mt-3 gallery-item">
                <div class="card rounded-shadow img-zoom-container" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">CHICKEN Body</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>


            </div> 
        </div>
        
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection