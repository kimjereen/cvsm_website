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


    <!-- Google Analytics (viewers of website) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWL863DX70"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HWL863DX70');
    </script>

    <!-- EmailJs for Contact Form -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        emailjs.init("IlX-GhO-OpUQE3uUi");
    </script>
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
                ✖
                </button>
                <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="CVSM Logo" style="max-height: 100px; margin: 20px 100px;">
            </div>

            <div class="offcanvas-body">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active navigate" href="{{ route('home') }}">Home</a>
                </li>
                
                <!-- About Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navigate" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-mission-vision">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-history">History</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-objectives">Objectives</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-administration">Administration</a></li>
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="{{ route('about') }}#tab-departments">Departments</a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-animal-management">Animal Management</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-morphophysiology">Morphophysiology</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-pathobiology">Pathobiology</a></li>
                            <li><a class="dropdown-item" href="{{ route('departments') }}#tab-clinical-sciences">Veterinary Clinical Sciences</a></li>
                        </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-accreditations">Accreditations</a></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#tab-student-organizations">Student Organizations</a></li>
                    </ul>
                </li>

                <!-- Academic Programs Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navigate" href="{{ route('academic') }}" role="button" data-bs-toggle="dropdown">Academic Programs</a>
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
                        <a class="dropdown-item dropdown-toggle navigate" href="{{ route('academic') }}#tab-mvst" >Master of Veterinary Studies</a>
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
                    <a class="nav-link dropdown-toggle navigate" href="{{ route('research') }}" role="button" data-bs-toggle="dropdown">Research</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-ongoing-projects">On-going Projects</a></li>
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-publications">Publications</a></li>
                        <li><a class="dropdown-item" href="{{ route('research') }}#tab-research-partners">Research Partners</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('news') }}" role="button" data-bs-toggle="dropdown">News</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('news') }}#tab-news">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('news') }}#tab-events">Events and Announcements</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navigate" href="{{ route('facilities') }}" role="button" data-bs-toggle="dropdown">Facilities and Resources</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('facilities') }}#tab-lecture-halls">Lecture Halls</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities') }}#tab-laboratories">Laboratories</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities') }}#tab-centrad">CenTrAD</a></li>
                        <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="{{ route('facilities') }}#tab-online-resources">Online Resources</a>
                        <ul class="dropdown-menu dropdown-submenu">
                            <li><a class="dropdown-item" href="{{ route('histology') }}">e-Histology</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navigate" href="{{ route('extension') }}" role="button" data-bs-toggle="dropdown">Extension</a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="{{ route('extension') }}#tab-vet-mission">Vet Mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('extension') }}#tab-cattle-dispersal">Cattle Dispersal</a></li>
                        <li><a class="dropdown-item" href="{{ route('extension') }}#tab-veterinary-teaching-hospital">Veterinary Teaching Hospital</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link navigate" href="{{ route('contact') }}">Contact Us</a>
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
    <script src="{{ asset('assets_cvsm/bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}">
    </script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

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


        function updateURL(hash) {
            history.pushState(null, null, hash);
        }


        // Activate the correct tab when the page loads
        $(document).ready(function () {
            activateTab();
            activateTabFromHash();
            loadProjects(10, '.publication-list', '#loadMorePublication');
            loadProjects(10, '.ongoing-list', '#loadMoreOngoing');

            // Update the tab when the hash changes (e.g., clicking on a dropdown link)
            $(window).on('hashchange', function () {
                activateTab();
            });

            // Get the current pathname
             var currentPath = window.location.pathname;

            // Loop through each nav link
            $('.navbar-nav .nav-link.navigate').each(function() {
                // Get the href attribute of the nav link
                var href = $(this).attr('href');

                // Log the current href and currentPath for debugging
                console.log('Current href:', href);
                console.log('Current path:', currentPath);

                // Extract the last segment of the href (assuming it's the page name)
                var pageName = href.split('/').pop();
                 
                console.log('pageName:', pageName);

                // Check if the current path contains the href attribute
                if (currentPath.includes(pageName)) {
                    // Add the 'active' class to the parent li element
                    $(this).addClass('active');

                    // Log a message indicating that the class has been added
                    console.log('Added active class to:',$(this));
                }


            });

        });

       

    
        // Function to activate tab and display its content based on URL hash
        function activateTabFromHash() {
            // Get the hash from the URL
            var hash = window.location.hash;

            // Check if hash exists and if it corresponds to a tab
            if (hash && $(hash).length) {

                // Get the ID of the tab containing the hash
                var tabId = $(hash).closest('.tab-pane').attr('id');

                // Check if the tab ID exists
                if (tabId) {
                    // Remove 'active' class from all tabs
                    $('.nav-link').removeClass('active');

                    // Add 'active' class to the tab corresponding to the hash
                    $('a[href="#' + tabId + '"]').addClass('active');


                    // Show the tab's content
                    $('.tab-pane').removeClass('show active');
                    $('#' + tabId).addClass('show active');
                }
            }
        }

        // Activate tab based on URL hash when hash changes
        $(window).on('hashchange', function() {
            activateTabFromHash();
        });

    </script>


    <!-- FOR GALLERY ITEMS -->
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <button type="button" class="custom-close-btn position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close">✖</button>

        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-body p-0">
                    <div class="text-center">
                        <img src="" alt="" id="modalImage" class="img-fluid">
                    </div>
                    <div class="p-3 text-white" id="modalBodyContent"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
    var modalImage = document.getElementById('modalImage');
    var modalBodyContent = document.getElementById('modalBodyContent');
    var modal = new bootstrap.Modal(document.getElementById('imageModal'));

    // Function to set modal image source and body content
    function setModalContent(imageSrc, bodyContent) {
        console.log("Image Source:", imageSrc);
        console.log("Body Content:", bodyContent);
        modalImage.src = imageSrc;
        modalBodyContent.innerHTML = bodyContent;
    }

    // Add event listeners to gallery items
    document.addEventListener('DOMContentLoaded', function() {
        var galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach(function(item) {
            item.addEventListener('click', function() {
                var imageSrc = this.querySelector('img').getAttribute('src');
                var bodyContent = this.querySelector('.card-body1').innerHTML;
                setModalContent(imageSrc, bodyContent);
                modal.show();
            });
        });
    });
    </script>
    <!-- FOR GALLERY ITEMS -->



    <!-- FOR LOAD MORE RESEARCH -->
    <script>
        function loadProjects(numToShow, containerSelector, loadMoreBtnSelector) {
            // Initially hide all projects beyond the specified number to show
            $(containerSelector + ' .project:gt(' + (numToShow - 1) + ')').hide();

            // If the number of shown projects is less than the total projects, show the load more button
            if ($(containerSelector + ' .project').length <= numToShow) {
                $(loadMoreBtnSelector).hide();
            } else {
                $(loadMoreBtnSelector).show();
            }
            
            // Function to handle load more button click
            $(loadMoreBtnSelector).click(function(){
                // Show next set of projects
                $(containerSelector + ' .project:lt(' + ($(containerSelector + ' .project:visible').length + numToShow) + '):hidden').show();
                
                // If no more hidden projects, hide the load more button
                if($(containerSelector + ' .project:hidden').length === 0){
                    $(loadMoreBtnSelector).hide();
                }
            });
        }
    </script>
    <!-- FOR LOAD MORE RESEARCH -->


    
    <!-- GO TO TO STARTS -->
    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Optional - adds smooth scrolling
            });
        }

        // Show the scroll-to-top button when scrolling down
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            var scrollToTopButton = document.querySelector('.scroll-to-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        }

    </script>

    <!-- Scroll to top button -->
    <button class="scroll-to-top" onclick="scrollToTop()">
        <i class="bi bi-chevron-up"></i>
    </button>

@yield('content')