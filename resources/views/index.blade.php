<!-- Include header.php -->
@extends('header')

@section('content')
  <!-- CAROUSEL STARTS HERE -->
  <div id="home-carousel" class="carousel slide w-100 vh-100" data-bs-ride="carousel" data-bs-interval="4000">
      <!-- Gradient Overlay -->
      <div class="gradient-overlay position-absolute top-0 start-0 w-100 vh-100"></div>

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3"></button>
      </div>

      <div class="container">
        <div class="carousel-caption text-start align-items-center hero-caption" style="padding-bottom: 120px;">
          
          <div class="d-flex flex-container align-items-center mb-1">
              <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="CLSU Logo" class="img-fluid hero-logo" style="width: 35px; height: auto; margin-right: 10px;">
              <span class="hero-univ fs-4">Central Luzon State University</span>
          </div>
          
            <h1 class="hero-college">COLLEGE OF VETERINARY SCIENCE AND MEDICINE</h1>
          <br>
            <p class="hero-quote fs-5"><i>Veterinarians for the Countryside</i></p>
          <br>
          <p><a class="btn btn-success" href="{{ route('about') }}">Learn More</a></p>
        </div>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets_cvsm/images/home-carousel1.jpeg') }}" alt="carousel 1" class="d-block w-100 vh-100 object-fit-cover">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets_cvsm/images/home-carousel2.jpeg') }}" alt="carousel 2" class="d-block w-100 vh-100 object-fit-cover">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets_cvsm/images/home-carousel3.jpg') }}" alt="carousel 3" class="d-block w-100 vh-100 object-fit-cover">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets_cvsm/images/temporary/main-gate.JPG') }}" alt="carousel 4" class="d-block w-100 vh-100 object-fit-cover">
            <div class="carousel-caption hero-button">
              <a href="https://clsu.edu.ph/" class="btn btn-sm btn-dark" target="_blank">VISIT CLSU WEBSITE</a>
            </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
      </button>
  </div>
  <!-- CAROUSEL ENDS HERE -->

  <!-- NUMBER OF STARTS HERE -->
  <!--<div class="container-fluid mb-5 py-5 add-spacing number-of-section">
    <div class="row text-center">
      <div class="col">
        <h1 class="number-of" id="students">0</h1>
        <h5 class="number-of-text">Number of Students</h5>
      </div>
      <div class="col">
        <h1 class="number-of" id="visitors">0</h1>
        <h5 class="number-of-text">Number of Visitors</h5>
      </div>
      <div class="col">
        <h1 class="number-of" id="faculty">0</h1>
        <h5 class="number-of-text">Number of Faculty</h5>
      </div>
    </div>
  </div>-->
  <!-- NUMBER OF ENDS HERE -->

  <!-- NEWS & ANNOUNCEMENTS STARTS HERE -->
  <div class="container my-5 add-spacing">
    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">NEWS AND EVENTS</h3>
    </div>

    <!-- Section News & Announcements -->
    <div class="container-fluid">
    <div class="row">

    <!-- LATEST NEWS -->
      <div class="col-lg-8 p-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="section-subtitle">Latest News</h5>
          <span><a class="navbar-brand text-muted fs-6" href="#">See all</a></span>
        </div>

        <!-- News Carousel -->
        <div id="news-carousel" class="carousel slide rounded-shadow" data-bs-ride="carousel" data-bs-interval="4000">

            <div class="carousel-inner text-white bg-success" style="height: 363px;">
            
              <a href="#" class="pop">
                <div class="carousel-item active h-100">
                    <img src="{{ asset('assets_cvsm/images/temporary/news-1.png') }}" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                    <div class="carousel-caption text-start">
                        <h4>US assoc prof delivers diagnostics, infectious disease modeling lecture</h4>
                    </div>
                </div>
              </a>

              <a href="#" class="pop">
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets_cvsm/images/temporary/news-2.png') }}" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                    <div class="carousel-caption text-start">
                        <h4>5 CVSM faculty members are new, official PRC Continuing Professional Development monitors</h4>
                    </div>
                </div>
              </a>

              <a href="#" class="pop">
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets_cvsm/images/temporary/news-3.png') }}" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                    <div class="carousel-caption text-start">
                        <h4>CVSM faculty members elected as PVMA national officers</h4>
                    </div>
                </div>
              </a>

              

            </div>


            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#news-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#news-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>

      <!-- UPCOMING EVENTS -->
      <div class="col-lg-4 p-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="section-subtitle">Events</h5>
          <span><a class="navbar-brand text-muted fs-6" href="#">See all</a></span>
        </div>

        <!-- The Events -->
        <div class="container-fluid" style="height: 340px;">
          
        <a href="#" class="pop">
          <div class="calendar row mb-2 rounded" style="height: 85px;">
              
                  <div class="col-4 event-date d-flex align-items-center justify-content-center">
                    <div class="text-center py-4">
                        <h2 class="event-num text-white">27</h2>
                        <span class="event-month">FEBRUARY</span>
                    </div>
                  </div>

              <div class="col-8 event-description d-flex flex-column justify-content-center">
                  <h5 class="mt-3">Lecture on Innovations in Diagnostics and Infectious Diseases Modeling</h5>
                  <p><i class="bi bi-geo-alt-fill event-loc"></i>Center for Transboundary Animal Diseases (CenTrAD) Mini Theater</p>
              </div>
          </div>
        </a>

        <a href="#" class="pop">
          <div class="calendar row mb-2 rounded" style="height: 85px;">
              
                  <div class="col-4 event-date d-flex align-items-center justify-content-center">
                    <div class="text-center py-4">
                        <h2 class="event-num text-white">23</h2>
                        <span class="event-month">FEBRUARY</span>
                    </div>
                  </div>

              <div class="col-8 event-description d-flex flex-column justify-content-center">
                  <h5 class="mt-3">Pass with Flying Colors: Seminar on Healthy Academic Habits</h5>
                  <p><i class="bi bi-geo-alt-fill event-loc"></i>CEd Amphitheater</p>
              </div>
          </div>
        </a>

        <a href="#" class="pop">
          <div class="calendar row mb-2 rounded" style="height: 85px;">
              
                  <div class="col-4 event-date d-flex align-items-center justify-content-center">
                    <div class="text-center py-4">
                        <h2 class="event-num text-white">23</h2>
                        <span class="event-month">FEBRUARY</span>
                    </div>
                  </div>

              <!--<div class="col-4 text-center justify-content-center text-white rounded">
                  <div class="row align-items-center event-header">
                    <span>February</span>
                  </div>
                  <div class="row align-items-center event-body">
                    <h2>23</h2>
                  </div>
              </div>-->

              <div class="col-8 event-description d-flex flex-column justify-content-center">
                  <h5 class="mt-3">WEBINAR ALERT! Online Seminar on Freshwater Eel Management</h5>
                  <p><i class="bi bi-geo-alt-fill event-loc"></i>Online Seminar</p>
              </div>
          </div>
        </a>

        <a href="#" class="pop">
          <div class="calendar row mb-2 rounded" style="height: 85px;">
             
                  <div class="col-4 event-date d-flex align-items-center justify-content-center">
                    <div class="text-center py-4">
                        <h2 class="event-num text-white">16</h2>
                        <span class="event-month">FEBRUARY</span>
                    </div>
                  </div>

              <div class="col-8 event-description d-flex flex-column justify-content-center">
                  <h5 class="mt-3">WCLSU-VTH Awareness Campaign</h5>
                  <p><i class="bi bi-geo-alt-fill event-loc"></i>CLSU Community</p>
              </div>
          </div>
        </a>

        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- NEWS & ANNOUNCEMENTS ENDS HERE -->


  <!-- ACADEMIC PROGRAMS STARTS HERE -->
  <div class="container my-5 add-spacing">

    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">ACADEMIC PROGRAMS</h3>
    </div>

    <!-- Academic Programs Container -->
    <div class="row g-0 my-1">
        <!-- Academic Program 1 -->
        <div class="col-md-6 mt-3">
          <a href="{{ route('academic') }}#tab-dvm">
          <div class="container">
          <div class="card rounded-shadow img-zoom-container">
              <img src="{{ asset('assets_cvsm/images/temporary/Student - Dog checking.jpeg') }}" class="img-fluid img-zoom" alt="Academic Program 1">
              <div class="card-overlay"></div>
              <div class="card-body  text-center">
                <h5 class="card-title">Doctor of Veterinary Medicine</h5>
              </div>
              <div class="card-body2  text-center">
                <h5 class="card-title">Doctor of Veterinary Medicine</h5>
                <p class="card-text">DVM is a 6-year curricular program designed to  produce well-balanced veterinarians, knowledgeable in animal production, welfare and One Health.</p>
                <p><a class="btn card-btn" href="{{ route('academic') }}#tab-dvm">Learn More</a></p>
              </div>
          </div>
          </div>
          </a>
        </div>

        <!-- Academic Program 2 -->
        <div class="col-md-6 mt-3">
        <a href="{{ route('academic') }}#tab-mvst">
        <div class="container">
          <div class="card rounded-shadow img-zoom-container">
              <img src="{{ asset('assets_cvsm/images/temporary/MVSt - 1.jpg') }}" class="img-fluid img-zoom" alt="Academic Program 2">
              <div class="card-overlay"></div>
              <div class="card-body  text-center">
                <h5 class="card-title">Master of Veterinary Studies</h5>
              </div>
              <div class="card-body2  text-center">
                <h5 class="card-title">Master of Veterinary Studies</h5>
                <p class="card-text">MVSt is a 2-year post-graduate degree for veterinarians designed to specialize in either Veterinary Public Health or Veterinary Preventive Medicine.</p>
                <p><a class="btn card-btn" href="{{ route('academic') }}#tab-mvst">Learn More</a></p>
              </div>
          </div>
          </div>
        </a>
        </div>
      </div>
    </div>
  </div>
  <!-- ACADEMIC PROGRAMS ENDS HERE -->


  <!-- ABOUT US AND RESEARCH & PUBLICATIONS STARTS HERE -->
  <div class="container-fluid g-0">

    <!-- About Us -->
    <div class="row four-view g-0">

      <!-- About Us Video-->
      <div class="col-lg-6">
        <img src="{{ asset('assets_cvsm/images/temporary/Student - Anatomy.jpg') }}" class="img-fluid" alt="Research & Publication BG">
      </div>

      <!-- About Us Learn More -->
      <div class="col-lg-6 position-relative">
        <div class="ov-image-container">
          <img src="{{ asset('assets_cvsm/images/temporary/bones.jpg') }}" class="img-fluid" alt="About Us BG">
          <div class="ov-overlay"></div>
          <div class="ov-content">
            <h3 class="ov-title">About Us</h3>
            <p class="ov-description">The College envisions to become a multi veterinary institution dedicated to countryside development by providing excellent veterinary education to produce graduates equipped with technical, entrepreneurial, managerial, and leadership skills necessary for optimum animal production. </p>
            <a href="{{ route('about') }}" class="btn btn-success">Learn More</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Research & Publications Learn More-->
    <div class="row four-view g-0">

      <!-- Research & Publications Learn More -->
      <div class="col-lg-6 position-relative">
        <div class="ov-image-container">
          <img src="{{ asset('assets_cvsm/images/temporary/STudent - chicken sorting.jpg') }}" class="img-fluid" alt="Research & Publication BG">
          <div class="ov-overlay"></div>
          <div class="ov-content">
            <h3 class="ov-title">Research & Publications</h3>
            <p class="ov-description">Our researches focus on transboundary and zoonotic animal disease, disease profiling, antimicrobial resistance and test kit development to address industry-need solutions.</p>
            <a href="{{ route('research') }}" class="btn btn-success">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Research & Publications Picture-->
      <div class="col-lg-6">
        <img src="{{ asset('assets_cvsm/images/temporary/Research - centrifuge.jpg') }}" class="img-fluid" alt="Research & Publication BG">
      </div>
    </div>
  </div>
  <!-- ABOUT US AND RESEARCH & PUBLICATIONS ENDS HERE -->

  
  <!-- RESOURCE & FACILITIES STARTS HERE -->
  <div class="container my-5 add-spacing">

    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">RESOURCE AND FACILITIES</h3>
    </div>

    <!-- Resources -->
    <div class="container-fluid my-3">
        <!-- The Resources and Facilities -->
        <div class="container my-4" style="width: 80%;">
          <div class="align-items-center text-center mx-3">
              <p class="text-muted">CVSM is housed in two main facilities: the CVSM main building and the Veterinary Teaching Hospital. Both are equipped with lecture halls and laboratory facilities for conducive and collaborative learning of students.</p>   
              <p><a class="btn card-btn btn-success" href="{{ route('facilities') }}">Learn More</a></p>
          </div>
        </div>
    </div>

    <!-- Facilities -->
    <div class="container-fluid mt-5">
      <!-- Facilities Subtitle -->
      <div class="d-flex justify-content-between align-items-center">
          <div></div>
          <span><a class="navbar-brand text-muted fs-6" href="#">See all</a></span>
      </div>


        <!-- Facilities Card Lists -->
        <div class="row row-cols-1 row-cols-md-3 mt-3">
            <!-- Example loop for generating items -->
            <!-- Replace the content of the div with your dynamic content -->
            <!-- This is just a placeholder example -->
            <!-- Begin loop -->
            <a href="#" class="pop">
            <div class="col mt-3">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/lecture.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 1">
                    <div class="card-overlay"></div>
                    
                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>
              
                    <div class="card-body1">
                        <h5 class="card-title">Lecture Halls</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
            </a>

            <a href="#" class="pop">
            <div class="col mt-3">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/CVSM_1.jpeg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 2">
                    <div class="card-overlay"></div>

                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Laboratories</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
            </a>

            <a href="#" class="pop">
            <div class="col mt-3">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/cover-centrad.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 3">
                    <div class="card-overlay"></div>
                    
                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>

                    <div class="card-body1">
                        <h5 class="card-title">Center for Transboundary Animal Diseases (CenTrAD)</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </div>
            </a>
            <!-- End loop -->
        </div>

    </div>
  </div>
  <!-- RESOURCE & FACILITIES ENDS HERE -->


  <!-- DEPARTMENTS STARTS HERE -->
  <div class="container my-5 add-spacing">

    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">DEPARTMENTS</h3>
    </div>
    <div class="container d-flex justify-content-between align-items-center">
      <h3 class="section-title"></h3>
      <span><a class="navbar-brand text-muted fs-6" href="#">See all</a></span>
    </div>
    
      <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col mt-4">
        <a href="{{ route('departments') }}#tab-morpho" class="pop">
            <div class="card rounded-shadow img-zoom-container">
                <img src="{{ asset('assets_cvsm/images/temporary/cover-morpho.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 1">
                <div class="card-overlay"></div>
                
                <div class="card-logo-container d-flex">
                    <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                    <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                </div>
          
                <div class="card-body">
                    <h5 class="card-title">Department of Morphophysiology</h5>
                </div>

                <div class="card-body2">
                  <h5 class="card-title">Department of Morphophysiology</h5>
                  <p class="ov-description">Explore anatomy, physiology, and pharmacology in animals, unraveling the intricacies of living organisms.</p>
                </div>
            </div>
        </a>
        </div>

        
        <div class="col mt-4">
        <a href="{{ route('departments') }}#tab-animal" class="pop">
            <div class="card rounded-shadow img-zoom-container">
                <img src="{{ asset('assets_cvsm/images/temporary/Student - milking.jpeg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 2">
                <div class="card-overlay"></div>

                <div class="card-logo-container d-flex">
                    <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                    <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">Department of Animal Management</h5>
                </div>
                <div class="card-body2">
                    <h5 class="card-title">Department of Animal Management</h5>
                    <p class="ov-description">Delve into animal care, behavior, and welfare, equipping students to manage diverse animal populations with compassion and skill.</p>
                </div>
            </div>
        </a>
        </div>


        <div class="col mt-4">
        <a href="{{ route('departments') }}#tab-patho" class="pop">
            <div class="card rounded-shadow img-zoom-container">
                <img src="{{ asset('assets_cvsm/images/temporary/Student - fish.jpeg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 3">
                <div class="card-overlay"></div>
                
                <div class="card-logo-container d-flex">
                    <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                    <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Department of Pathobiology</h5>
                </div>
                <div class="card-body2">
                    <h5 class="card-title">Department of Pathobiology</h5>
                    <p class="ov-description">Investigate disease processes in animals, preparing students to diagnose, treat, and prevent diseases for enhanced animal health.</p>
                </div>
            </div>
        </a>
        </div>


        <div class="col mt-4">
        <a href="{{ route('departments') }}#tab-clinical" class="pop">
            <div class="card rounded-shadow img-zoom-container">
                <img src="{{ asset('assets_cvsm/images/temporary/Student- centrifuge.jpeg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Facility 3">
                <div class="card-overlay"></div>
                
                <div class="card-logo-container d-flex">
                    <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                    <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Department of Clinical Sciences</h5>
                </div>
                <div class="card-body2">
                    <h5 class="card-title">Department of Clinical Sciences</h5>
                    <p class="ov-description">Gain hands-on experience in veterinary care, where students learn to diagnose and treat a variety of medical and surgical conditions in animals.</p>
                </div>
            </div>
        </a>
        </div>
      </div> 
    </div>
    

    <!--
    <div class="accordion accordion-flush my-3 container rounded p-1" id="accordionFlushExample">

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Morphophysiology
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body p-0">
            <div id="accordion-img" class="accordion-img">
                <img src="assets/images/temporary/bones.jpg" class="img-fluid" alt="Department 1">
                <div class="ov-content">
                    <h3 class="ov-title">Department of Morphophysiology and Pharmacology</h3>
                    <p class="ov-description">Explore anatomy, physiology, and pharmacology in animals, unraveling the intricacies of living organisms.</p>
                    <a href="#" class="btn btn-success">Learn More</a>
                </div>
              </div>
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Animal Management
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body p-0">
            <div id="accordion-img" class="accordion-img">
              <img src="assets/images/temporary/Student - milking.jpeg" class="img-fluid" alt="Department 2">
              <div class="ov-content">
                  <h3 class="ov-title">Department of Animal Management</h3>
                  <p class="ov-description">Delve into animal care, behavior, and welfare, equipping students to manage diverse animal populations with compassion and skill.</p>
                  <a href="#" class="btn btn-success">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Pathobiology
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body p-0">
            <div id="accordion-img" class="accordion-img">
              <img src="assets/images/temporary/Student - fish.jpeg" class="img-fluid" alt="Department 3">
              <div class="ov-content">
                  <h3 class="ov-title">Department of Pathobiology</h3>
                  <p class="ov-description">Investigate disease processes in animals, preparing students to diagnose, treat, and prevent diseases for enhanced animal health.</p>
                  <a href="#" class="btn btn-success">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Clinical Sciences
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <div id="accordion-img" class="accordion-img">
            <img src="assets/images/temporary/Student- centrifuge.jpeg" class="img-fluid" alt="Department 4">
            <div class="ov-content">
                <h3 class="ov-title">Department of Clinical Science</h3>
                <p class="ov-description">Gain hands-on experience in veterinary care, where students learn to diagnose and treat a variety of medical and surgical conditions in animals.</p>
                <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>-->

  </div>
  <!-- DEPARTMENTS ENDS HERE -->


  <!-- COMMERCIAL STARTS HERE -->
  <div class="container-fluid p-5 commercial">
    <div class="showcase-img">
      <img src="{{ asset('assets_cvsm/images/temporary/facade.jpg') }}" alt="Commercial BG" class="img-fluid g-0"> 
    </div>
    
    <div class="showcase-overlay"></div>

    <div class="container">
     <div class="row showcase-section align-items-center ">
        
        <div class="col-lg">
            <div class="showcase-text">
              <h3 class="showcase-title">Where Learning Extends Beyond the Classroom</h3>
              <p class="showcase-caption">
              At CLSU College of Veterinary Science and Medicine, education goes beyond textbooks and lectures; it's about empowering students to become leaders in their fields and communities. Here, we foster a community where students not only excel in their academic pursuits but also engage in hands-on experiences and research that shape the future of veterinary medicine. From clinical rotations to community outreach programs, our students are equipped with the skills, knowledge, and compassion to make a real difference in the lives of animals and society. 
              </p>
              <p class="text-white">Check out the different CVSM Student Organizations</p>
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
        </div>

        <div class="col-lg align-items-center">
          <div class="showcase-vid">
            <div class="iframe-container">
              <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0V7i1txvfj9ewtX4A7uev7hDM2bneAM3k6f2q6PinWLevaTMEtQfrrzLZSdXx9W7el%26id%3D1704530979769491&width=750&show_text=false&appId=895115338865715&height=423" class="responsive-iframe" style="overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
        </div>
      </div> 

    </div>
  </div>
  <!-- COMMERCIAL ENDS HERE -->



  <!-- EXTENSION STARTS HERE -->
  <div class="container my-5 add-spacing">

    <!-- Section Title -->
    <!--<div class="container d-flex justify-content-between align-items-center my-3">
      <h3 class="section-title">EXTENSION</h3>
      <span><a class="navbar-brand text-muted" href="#">See all</a></span>
    </div>-->
    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">EXTENSION ACTIVITIES</h3>
    </div>
    <div class="container d-flex justify-content-between align-items-center">
      <h3 class="section-title"></h3>
      <span><a class="navbar-brand text-muted fs-6" href="#">See all</a></span>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3">

            <div class="col mt-3">
            <a href="#" class="pop">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/vetmission.png') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Extension 1">
                    <div class="card-overlay"></div>
                    
                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>
              
                    <div class="card-body1">
                        <h5 class="card-title">Vet Mission</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </a>
            </div>


            <div class="col mt-3">
            <a href="#" class="pop">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/Student - Cattle Dispersal.jpg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Extension 2">
                    <div class="card-overlay"></div>

                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>
                    
                    <div class="card-body1">
                        <h5 class="card-title">Cattle Dispersal</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </a>
            </div>


            <div class="col mt-3">
            <a href="#" class="pop">
                <div class="card rounded-shadow img-zoom-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/CVSM_2.jpeg') }}" class="img-fluid d-block w-100 h-100 object-fit-cover img-zoom" alt="Extension 3">
                    <div class="card-overlay"></div>
                    
                    <div class="card-logo-container d-flex">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="Logo 1" class="card-logo">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="Logo 2" class="card-logo">
                    </div>

                    <div class="card-body1">
                        <h5 class="card-title">Veterinary Teaching Hospital</h5>
                    </div>
                    <div class="container-fluid page-content-footer"></div>
                </div>
            </a>
            </div>

            
        </div>
    </div>
  </div>
  <!-- EXTENSION ENDS HERE -->

<!-- Include footer.php -->
@include('footer')

@endsection