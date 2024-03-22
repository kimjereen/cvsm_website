<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">FACULTY INFORMATION</div>
    </div>
    PAGE COVER ENDS HERE -->

    
    <!-- FACULTY INFORMATION STARTS HERE -->
    <div class="container my-5">
        <div class="row justify-content-center">

            <!-- Faculty Member -->
            <div class="col-sm-3 mb-3 d-flex justify-content-center">
                <div>
                    <div class="faculty-container rounded-shadow" style="width:230px;" >
                        <div class="faculty-image-container">
                            <img src="{{ asset('assets_cvsm/images/faculty/Dr. Viernes.JPG') }}" alt="Faculty Head" class="img-fluid">
                        </div>

                        <div class="text-center p-2">
                            <h6 class="faculty-name">DR. VIRGILIO D. VIERNES JR</h6>
                            <p class="faculty-position">Associate Prof V</p>
                            <p class="faculty-title">Head</p>
                        </div>
                    </div>
                </div>
            </div>
                

            <!-- Faculty Information -->
            <div class="col-lg-9">
                    
                    <div class="mb-3">
                        <!-- Section Title -->
                        <div class="container-fluid g-0">
                        <h4 class="section-title text-white faculty-title-bar p-2">DEPARTMENT</h4>
                        </div>

                        <p class="page-content-text p-2">
                            Department of Morphophysiology and Pharmacology 
                        </p>
                    </div>

                    <div class="mb-3">
                        <!-- Section Title -->
                        <div class="container-fluid g-0">
                        <h4 class="section-title text-white faculty-title-bar p-2">ACADEMIC BACKGROUND</h4>
                        </div>

                        <ul class="faculty-ul">
                            <li>
                                <h6 class="faculty-name">PhD in Animal Science (Reproductive Physiology) </h6>
                                <p class="faculty-position">Central Luzon State University</p>
                                <p class="faculty-title">2012</p>
                            </li>

                            <li>
                                <h6 class="faculty-name">MSc in Veterinary Medicine (Anatomy) </h6>
                                <p class="faculty-position">University of the Philippines - Los Baños </p>
                                <p class="faculty-title">2004</p>
                            </li>

                            <li>
                                <h6 class="faculty-name">Doctor of Veterinary Science and Medicine </h6>
                                <p class="faculty-position">Central Luzon State University</p>
                                <p class="faculty-title">1992</p>
                            </li>
                        </ul>

                    </div>
                    

                    <div class="mb-3">
                        <!-- Section Title -->
                        <div class="container-fluid g-0">
                        <h4 class="section-title text-white faculty-title-bar p-2">RESEARCH INTERESTS</h4>
                        </div>

                        <ul class="faculty-ul">
                            <li>
                                <h6 class="faculty-name">Reproductive Physiology</h6>
                            </li>

                            <li>
                                <h6 class="faculty-name">Gross and Comparative Anatomy </h6>
                            </li>

                        </ul>

                    </div>

                    
                    <div class="mb-3">
                        <!-- Section Title -->
                        <div class="container-fluid g-0">
                        <h4 class="section-title text-white faculty-title-bar p-2">CONTACT AND LINKS</h4>
                        </div>


                        <p class="page-content-text p-2">
                            <i class="bi bi-envelope-fill"></i> Email: <a href="mailto:virgilio_viernes@clsu.edu.ph" class="me-3 "> virgilio_viernes@clsu.edu.ph</a>
                            <br>
                            <a href="https://scholar.google.com/citations?user=cHTWKLkAAAAJ&hl=en&oi=ao" target="_blank" class="pop mt-2">
                                <!--<img src="{{ asset('assets_cvsm/images/google-scholar-logo.png') }}" alt="Google Scholar Logo" width="20px">--> 
                                <i class="bi bi-book-fill"></i> Google Scholar:
                                <img src="{{ asset('assets_cvsm/images/full-google-scholar-logo.png') }}" alt="Google Scholar Logo" width="140px">
                            </a>
                            
                        </p>
                
                    </div>
            </div>
        </div>
    </div>
    <!-- FACULTY INFORMATION ENDS HERE -->


</section>


<!-- Include footer.php -->
@include('footer')

@endsection