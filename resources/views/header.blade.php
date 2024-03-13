<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLSU College of Veterinary Science and Medicine</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_cvsm/images/cvsm-logo.png') }}">
    <!-- Bootstrap 5  -->
    <link href="{{ asset('/assets_cvsm/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" rel= "stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">



    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">-->
    <!-- Bootstrap Bundle with Popper -->
    <!-- Bootstrap 5 JavaScript Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Mi/2fGt8cy0oC9P5MY3HpfBjiPnOZ+zE1wBBuUpvZrKwGfsNgFCOzC8rBxIIj4nI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-BFpN2ABaVc/U3IMHzI2BX4zKvlLO8KGB8/+tCvEVy8wbzTtZnGdR/rthB37gZZOy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>-->
    <!-- JQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets_cvsm/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets_cvsm/css/pages.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-wrapper">

    <!-- PAGE HEADER BAR STARTS HERE -->
    <div class="container-fluid page-header">
        <div class="d-flex justify-content-between">
            <div class="header-contacts">
                <a href="mailto:cvsm@clsu.edu.ph" class="me-3 text-white"><i class="bi bi-envelope-fill"></i>  cvsm@clsu.edu.ph</a>
                <a href="#" class="me-3 text-white"><i class="bi bi-telephone-fill"></i>  044-511-2197</a>
            </div>

            <div class="header-socials social-media">
                <a href="https://www.facebook.com/profile.php?id=100057517867278" class="me-3 text-white"><i class="bi bi-facebook" target="_blank"></i></a>
                <a href="#" class="me-3 text-white"><i class="bi bi-twitter" target="_blank"></i></a>
                <a href="#" class="me-3 text-white"><i class="bi bi-youtube" target="_blank"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram" target="_blank"></i></a>
            </div>
        </div>
    </div>
    <!-- PAGE HEADER BAR ENDS HERE -->


    <!-- NAVIGATION HEADER BAR STARTS HERE -->
    <div class="container-fluid navbar-header justify-content-center">
        <div class="row justify-content-between">
            <div class="col-md-10 nav-header-college align-items-start">
                <div class="navbar-header-logo-container" id="navbar-header-logo-container">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="CVSM Logo" class="img-fluid navbar-header-logo" style="width: 80px;">
                    </a>  
                </div>
                <div class="nav-header-left align-items-center">
                    <div class="row nav-header-college"><h2>COLLEGE OF VETERINARY SCIENCE AND MEDICINE</h2></div>
                    <div class="row nav-header-address"><h6>Central Luzon State University, Science City of Muñoz, Nueva Ecija, 3120</h6></div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVIGATION HEADER BAR STARTS HERE -->


    <!-- NAVIGATION BAR STARTS HERE -->
    <nav class="navbar navbar-expand-lg navbar-dark position-relative sticky-top">
        <div class="container">
            <div></div>
        <!-- Hamburger Bar -->
        <button id="navbar-toggler" class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="custom-toggler-icon"><i class="bi bi-list fs-2"></i></span>
        </button>
    
        <!-- Offcanvas Sidebar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel" data-bs-backdrop="false">
            <div class="offcanvas-header">
                <button id="offcanvas-close" type="button" class="custom-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <span class="custom-close-icon"><i class="bi bi-x fs-1"></i></span>
                </button>
                <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="CVSM Logo" style="max-height: 100px; margin: 20px 100px;">
            </div>

            <div class="offcanvas-body">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                
                <!-- About Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-missionvision">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-history">History</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-objectives">Objectives</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-administration">Administration</a></li>
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="{{ route('about') }}#tab-departments">Departments</a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-morpho">Morphophysiology</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-animal">Animal Management</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-patho">Pathobiology</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-clinical">Clinical Sciences</a></li>
                        </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-accreditations">Accreditations</a></li>
                    </ul>
                </li>

                <!-- Academic Programs Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('academic') }}" role="button" data-bs-toggle="dropdown">Academic Programs</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="{{ route('academic') }}#tab-dvm">Doctor of Veterinary Medicine</a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="{{ route('academic') }}#dvm-program-objectives">Program Educational Objective</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#dvm-admission">Admission</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#dvm-program-of-study">Program of Study</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#dvm-courses-and-description">Course and Description</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#dvm-prerequisite-map">Prerequisite Map</a></li>
                        </ul>
                        </li>
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="{{ route('academic') }}#tab-mvst">Master of Veterinary Studies</a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="{{ route('academic') }}#mvst-program-objectives">Program Educational Objective</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#mvst-admission">Admission</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#mvst-program-of-study">Program of Study</a></li>
                            <li><a class="dropdown-item" href="{{ route('academic') }}#mvst-courses-and-description">Courses and Description</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('research') }}" role="button" data-bs-toggle="dropdown">Research</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-ongoing">On-going Project</a></li>
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-publications">Publication</a></li>
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-researchpartners">Research Partners</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('news') }}" role="button" data-bs-toggle="dropdown">News</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('news') }}#tab-news">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('news') }}#tab-events">Events & Announcements</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('facilities') }}" role="button" data-bs-toggle="dropdown">Resource & Facilities</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('facilities') }}">Lecture Halls</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities') }}">Laboratories</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities') }}">CenTrAD</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities') }}">e-Histology</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('extension') }}" role="button" data-bs-toggle="dropdown">Extension</a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Vet Mission</a></li>
                        <li><a class="dropdown-item" href="#">Cattle Dispersal</a></li>
                        <li><a class="dropdown-item" href="#">Veterinary Teaching Hospital</a></li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">Student Organizations</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                            </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        </div>
        </div>
    </nav>
    <!-- NAVIGATION BAR ENDS HERE -->

    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="{{ asset('assets_cvsm/bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets_cvsm/js/scripts.js') }}"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            // Check if the screen width is less than 992px
            if (window.innerWidth < 800) {
                var navbarToggler = document.querySelector('.navbar-toggler');
                var offcanvasCloseBtn = document.getElementById('offcanvas-close');
                var logoContainer = document.getElementById('navbar-header-logo-container');
                var offcanvas = document.querySelector('.offcanvas');

                // Function to hide the logo
                function hideLogo() {
                    logoContainer.style.display = 'none';
                }

                // Function to show the logo
                function showLogo() {
                    logoContainer.style.display = 'block';
                }

                // Event listener for navbar toggler button
                navbarToggler.addEventListener('click', function() {
                    hideLogo();
                });

                // Event listener for offcanvas close button
                offcanvasCloseBtn.addEventListener('click', function() {
                    showLogo();
                });

                // Event listener for offcanvas hidden event
                offcanvas.addEventListener('hidden.bs.offcanvas', function() {
                    showLogo();
                });

                // Event listener for clicks on the document body
                document.body.addEventListener('click', function(event) {
                    // Check if the offcanvas is open and if the clicked element is not part of the offcanvas
                    if (offcanvas.classList.contains('show') && !offcanvas.contains(event.target)) {
                        // Close the offcanvas
                        offcanvas.classList.remove('show');
                        // Show the logo
                        showLogo();
                    }
                });
            }
        });


        // Function to activate the correct tab based on the URL anchor
        function activateTab() {
            // Get the anchor from the URL
            var hash = window.location.hash;

            // Check if the hash is not empty
            if (hash !== '') {
                // Activate the tab with the corresponding ID
                $('a[data-bs-toggle="tab"][href="' + hash + '"]').tab('show');
            }
        }


        // Activate the correct tab when the page loads
        $(document).ready(function () {
            activateTab();

            // Update the tab when the hash changes (e.g., clicking on a dropdown link)
            $(window).on('hashchange', function () {
                activateTab();
            });
        });

        
    </script>

@yield('content')