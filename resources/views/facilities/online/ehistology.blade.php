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


    <div class="container">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">CATEGORIES</h3>
        </div>



        <div class="row row-cols-1 row-cols-md-3">
            
        <a href="#" class="pop">
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Goat</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
        </a>
            
        <a href="#" class="pop">
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Dog</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
        </a>
            
        <a href="#" class="pop">
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Cat</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
        </a>
            
        <a href="#" class="pop">
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Cattle</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
        </a>
            
        <a href="#" class="pop">
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Horse</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
            
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Pig</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
            
            <div class="col mt-3 ">
                <div class="card rounded-shadow img-zoom-container" >
                    <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom modalImage" alt="Facility 1">
                    <div class=""></div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Others</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>

        </div> 
    </div>

</section>


<!-- Include footer.php -->
@include('footer')

@endsection