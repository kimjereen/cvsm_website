<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- E-HISTOLOGY -->
    <div class="container my-4 g-0">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">CATTLE IMAGES</h3>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                
        
            <div class="col mt-3 gallery-item">
                <div class="card rounded-shadow img-zoom-container" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">CATTLE Body</h5>
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