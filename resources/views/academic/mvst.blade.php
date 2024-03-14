<section>
<!-- PAGE CONTENT STARTS HERE -->

    <!-- About MVST -->
    <div class="container my-4 g-0">
        
        <!-- Section Title -->
        <div class="container-fluid mt-5">
            <h3 class="section-subtitle font-blue">ABOUT</h3>
        </div>


        <div class="row mt-2 mx-2">
            <div class="col-md-6 mt-3 page-content-card rounded white-texture">
                <div class="container page-content-body">
                    <p class="page-content-text">
                    MVSt is a 2-year post-graduate degree for veterinarians designed to specialize in either Veterinary Public Health or Veterinary Preventive Medicine.
                    </p>
                </div>
            <div class="container-fluid page-content-footer"></div>
            </div>

            <div class="col-md-6 mt-3">
                <div class="card img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/MVSt - 1.jpg') }}" class="img-fluid" alt="Academic Program 1">
                </div>
            </div>
        </div>
    </div>

    <!-- Program Educational Objective -->
    <div class="container my-4 g-0"  id="mvst-program-objectives">
        
        <!-- Section Title -->
        <div class="container-fluid mt-5">
            <h3 class="section-subtitle font-blue">PROGRAM EDUCATIONAL OBJECTIVE (PEO)</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                <div class="container page-content-body">
                    <h6 class="col m-3 fs-5">
                        The following PEOs are applied to graduates under the MVSt Curriculum based on CHED Memo No. 1 s 2018:
                    </h6>
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">01</span>
                        <p class="page-content-text ">
                        MVSt graduates are equipped with advanced knowledge and practical skills such as veterinary public health and preventive medicine through coursework,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row objective-list">
                        <span class="number text-center">02</span>
                        <p class="page-content-text ">
                        MVSt graduates are globally competent to formulate, communicate, and implement programs in animal health, animal production and health management, food safety, public health, animal welfare, and environmental protection and preservation,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">03</span>
                        <p class="page-content-text ">
                        MVSt graduates have developed interpersonal and organizational skills toward leadership within the profession and the community to assist the national government in implementing programs on animal health and control of zoonotic diseases affecting public health,
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">04</span>
                        <p class="page-content-text ">
                        MVSt graduates are capable of handling and conducting research in preventive veterinary medicine, public health, biotechnological, and other industrial fields, and 
                        </p>
                    </div>
                    
                    <div class="d-flex flex-row  objective-list">
                        <span class="number text-center">05</span>
                        <p class="page-content-text ">
                        MVSt graduates can impart knowledge through the conduct of training and extension services.
                        </p>
                    </div>
                </div>
            
            <div class="container-fluid page-content-footer"></div>
        </div>

    </div>

    <!-- Admission -->
    <div class="container my-4 g-0" id="mvst-admission">
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
                        
                        <a href="https://oad.clsu2.edu.ph/" class="btn btn-primary " height="20px" target="_blank">Learn More <i class="bi bi-arrow-right btn-icon"></i></a>
                    </div>

                </div>
        
            </div>
        </div>

    </div>

    <!-- Program of the Study -->
    <div class="container my-4"  id="mvst-program-of-study">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Program of the Study</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                <div class="container page-content-body">
                    <h6 class="col m-3 fs-5">
                        Master of Veterinary Studies Curriculum Checklist
                    </h6>
                    <div class="d-flex d-flex justify-content-between align-items-center objective-list">
                        <div class="align-items-center">
                            <i class="bi bi-file-earmark-pdf"></i>MVSt Prospectus.pdf
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary" height="20px" target="_blank">Download <i class="bi bi-download btn-icon"></i></a>
                        </div>
                        
                    </div>

                </div>
        
            </div>
        </div>

    </div>

    <!-- Courses and Description -->
    <div class="container my-4" id="mvst-courses-and-description">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
        <h3 class="section-subtitle font-blue">Courses and Description</h3>
        </div>

        <div class="justify-content-center">
            <div class="m-3 page-content-card rounded">
                    <div class="container page-content-body">
                        <h6 class="col m-3 fs-5">
                            Here are the courses that you will take in your MVST program:
                        </h6>
                            
                        <div class="accordion accordion-flush my-3" id="accordionFlushMVSt">


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    CORE SUBJECT
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushMVSt">
                                    <div class="accordion-body">
                                        @include('academic.courses.mvst-child1')
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    MAJOR - PREVENTIVE VETERINARY MEDICINE
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushMVSt">
                                    <div class="accordion-body">
                                        @include('academic.courses.mvst-child2')
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    MAJOR - PUBLIC HEALTH
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushMVSt">
                                    <div class="accordion-body">
                                        @include('academic.courses.mvst-child3')
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed parent-accord" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    COGNATE
                                </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushMVSt">
                                    <div class="accordion-body">
                                        @include('academic.courses.mvst-child4')
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                
                <div class="container-fluid page-content-footer"></div>
            </div>
        </div>

    </div>

<!-- PAGE CONTENT ENDS HERE -->
</section>



<!--
                                    <table class="table table-hover custom-table">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>



-->