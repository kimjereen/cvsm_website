<section>
<!-- PAGE CONTENT STARTS HERE -->

    <!-- About DVM -->
    <div class="container my-4 g-0">
        
        <!-- Section Title -->
        <div class="container-fluid mt-5">
            <h3 class="section-subtitle font-blue">ABOUT</h3>
        </div>

        <div class="row mt-2 mx-2">
            <div class="col-md-6 mt-3">
                <div class="card img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/Student - Dog checking.jpeg') }}" class="img-fluid" alt="Academic Program 1">
                </div>
            </div>

            <div class="col-md-6 mt-3 page-content-card rounded white-texture">
                <div class="container page-content-body">
                    <p class="page-content-text">
                        DVM is a 6-year curricular program designed to  produce well-balanced veterinarians, knowledgeable in animal production, welfare and One Health.
                    </p>
                </div>
            <div class="container-fluid page-content-footer"></div>
            </div>
        </div>
    </div>

    <!-- Program Educational Objective -->
    <div class="container my-4 g-0"  id="dvm-program-objectives">
        
        <!-- Section Title -->
        <div class="container-fluid mt-5">
            <h3 class="section-subtitle font-blue">PROGRAM EDUCATIONAL OBJECTIVE (PEO)</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                <div class="container page-content-body">
                    <h6 class="col m-3 fs-5">
                        The following PEOs are applied to graduates under the DVM Curriculum based on CHED Memo No. 1 s 2018:
                    </h6>
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">01</span>
                        <p class="page-content-text ">
                        DVM graduates are globally competent in the prevention, diagnosis, treatment, and control of diseases of different animal species,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row objective-list">
                        <span class="number text-center">02</span>
                        <p class="page-content-text ">
                        DVM graduates are globally competent to formulate, communicate, and implement programs in animal health, animal production and health management, food safety, public health, animal welfare, and environmental protection and preservation,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">03</span>
                        <p class="page-content-text ">
                        DVM graduates are achievers, team players, and leaders in the profession or related fields of practice,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">04</span>
                        <p class="page-content-text ">
                        DVM graduates are capable of handling and conducting research in pharmaceutical, biotechnological, and other industrial fields, and
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">05</span>
                        <p class="page-content-text ">
                        DVM graduates are capable of imparting knowledge, and conducting training and extension services.
                        </p>
                    </div>
                </div>
            
            <div class="container-fluid page-content-footer"></div>
        </div>

    </div>

    <!-- Admission -->
    <div class="container my-4 g-0" id="dvm-admission">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Admission</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                <div class="container page-content-body">
                    <h6 class="col m-3 fs-5">
                        Visit CLSU Office of Admission Website for Admission Requirements:
                    </h6>
                    <div class="d-flex d-flex justify-content-between  objective-list">
                        <img src="{{ asset('assets_cvsm/images/OAD banner.png') }}" alt="OAD Banner" width="200px" height="100%">
                        
                        <a href="https://oad.clsu2.edu.ph/" class="btn btn-primary" height="20px" target="_blank">Learn More <i class="bi bi-arrow-right btn-icon"></i></a>
                    
                    </div>

                </div>
        
            </div>
        </div>

    </div>

    <!-- Program of the Study -->
    <div class="container my-4"  id="dvm-program-of-study">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Program of the Study</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                <div class="container page-content-body">
                    <h6 class="col m-3 fs-5">
                        Doctor of Veterinary Medicine Curriculum Checklist
                    </h6>
                    <div class="d-flex d-flex justify-content-between align-items-center objective-list">
                        <div class="align-items-center">
                            <i class="bi bi-file-earmark-pdf"></i>DVM Prospectus.pdf
                        </div>
                        <div>
                            <a href="https://drive.google.com/file/d/19235RMjh0l0a9AEy_8M_32iGS_bk9RIT/view?usp=sharing" class="btn btn-primary" height="20px" target="_blank">Download <i class="bi bi-download btn-icon"></i></a>
                        </div>
                        
                    </div>

                </div>
        
            </div>
        </div>

    </div>

    <!-- Courses and Description -->
    <div class="container my-4" id="dvm-courses-and-description">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Courses and Description</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                    <div class="container page-content-body">
                        <h6 class="col m-3 fs-5">
                            Here are the courses that you will take in your DVM program:
                        </h6>
                            
                        <div class="accordion accordion-flush my-3" id="accordionFlushDVM">


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    FIRST YEAR
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushDVM">
                                    <div class="accordion-body">
                                        @include('academic.courses.dvm-child1')
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    SECOND YEAR
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushDVM">
                                    <div class="accordion-body">
                                        @include('academic.courses.dvm-child2')
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    THIRD YEAR
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushDVM">
                                    <div class="accordion-body">
                                        @include('academic.courses.dvm-child3')
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    FOURTH YEAR
                                </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushDVM">
                                    <div class="accordion-body">
                                        @include('academic.courses.dvm-child4')
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                
                <div class="container-fluid page-content-footer"></div>
            </div>
        </div>

    </div>

    <!-- Prerequisite Map -->
    <div class="container my-4"  id="dvm-prerequisite">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Prerequisite Map</h3>
        </div>

        <div class="justify-content-center my-4">
            <div class="image-content-container rounded">
                <img src="{{ asset('assets_cvsm/images/temporary/New Prerequisite Map.png') }}" alt="Curriculum Subj Coded" class="page-content-image">
            </div>
        </div>

    </div>

<!-- PAGE CONTENT ENDS HERE -->
</section>