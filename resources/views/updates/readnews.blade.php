<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">


    <!-- read news -->
    <div class="container my-4">
        <!-- Section Header -->
        <div class="container-fluid mt-5">
            <div class="d-flex flex-row my-2">
                <p class="card-text "><small class="text-muted"><i class="bi bi-person-fill btn-icon"></i> Admin</small></p>
                <p class="card-text mx-3"><small class="text-muted"><i class="bi bi-calendar-fill btn-icon"></i> March 05, 2024</small></p>
            </div>    
        </div>

        <div class="container">

            <div class="image-with-text">
                <div class="text-around-container">
                    <img src="{{ asset('assets_cvsm/images/temporary/news-1.png') }}" alt="Timeline Image" class="img-fluid timeline-image">
                </div>
                <div class="text-container">
                    <h3 class="headline-title">US assoc prof delivers diagnostics, infectious disease modeling lecture</h3>
                    <p class="text-around">
                    
                    Iowa State University's (ISU) Dr. Luis Gimenez-Lirola, associate professor from the College of Veterinary Medicine, presented a lecture entitled “Innovations in Diagnostics and Infectious Diseases Modeling: Unveiling Novel Platforms for Emerging Animal Pathogens” at the Center for Transboundary Animal Diseases (CenTrAD) Mini Theater last February 27, 2024.
                    <br><br>
                    Dr. Lirola introduced the already-available next generation of diagnostic laboratory platforms and highlighted the importance of selecting appropriate specimens and sampling strategies in disease diagnosis.
                    <br><br>
                    Together with Dr. Lirola are Dr. Ronaldo Magtoto, also from ISU, and Dr. Precy Dizon Magtoto, a faculty member of the Pampanga State Agricultural University - College of Veterinary Medicine.
                    <br><br>
                    Their visit paved the way for the renewal and realization of the Memorandum of Understanding (MOU) between ISU and Central Luzon State University (CLSU), which will allow faculty exchange and research collaborations between the two universities.
                    <br><br>
                    The event was attended by CLSU faculty members and students from the College of Science, College of Fisheries, College of Agriculture and College of Veterinary Science and Medicine.
                    </p>
                </div>
                
            </div>

        </div>



        <!--
        <div class="container my-4">


                    <div class="row">
                        <div class="col-md p-3">
                            <p>
                            US assoc prof delivers diagnostics, infectious disease modeling lecture
                            <br><br>
                            Iowa State University's (ISU) Dr. Luis Gimenez-Lirola, associate professor from the College of Veterinary Medicine, presented a lecture entitled “Innovations in Diagnostics and Infectious Diseases Modeling: Unveiling Novel Platforms for Emerging Animal Pathogens” at the Center for Transboundary Animal Diseases (CenTrAD) Mini Theater last February 27, 2024.
                            <br><br>
                            Dr. Lirola introduced the already-available next generation of diagnostic laboratory platforms and highlighted the importance of selecting appropriate specimens and sampling strategies in disease diagnosis.
                            <br><br>
                            Together with Dr. Lirola are Dr. Ronaldo Magtoto, also from ISU, and Dr. Precy Dizon Magtoto, a faculty member of the Pampanga State Agricultural University - College of Veterinary Medicine.
                            <br><br>
                            Their visit paved the way for the renewal and realization of the Memorandum of Understanding (MOU) between ISU and Central Luzon State University (CLSU), which will allow faculty exchange and research collaborations between the two universities.
                            <br><br>
                            The event was attended by CLSU faculty members and students from the College of Science, College of Fisheries, College of Agriculture and College of Veterinary Science and Medicine.
                            </p>
                        </div>  
                        <div class="col-md-4">
                        
                        </div>
                    </div>

        </div>-->
    </div>

    <!-- Latest Headlines -->
    <div class="container my-4">
        <!-- Section Title -->
        <div class="container-fluid mt-5">
            <h3 class="section-subtitle font-blue">RECENT NEWS</h3>
        </div>

        <div class="container my-2">
            <div class="row row-cols-1 row-cols-md-3">


                <div class="col mt-2">
                    <div class="page-content-card rounded">
                        <div class="col-lg g-0">
                            <div class="all-news-image-container g-0">
                                <img src="{{ asset('assets_cvsm/images/temporary/news-2.png') }}" class="img-fluid" alt="Headline Image">
                            </div>
                        </div>  <!-- Will have a limit for title num of characters as well as sa content preview-->
                        <div class="col-lg p-4 d-flex flex-column justify-content-between ">
                            <div class="news-content-body ">
                                <h3 class="news-headlines">5 CVSM faculty members are new, official PRC Continuing Professional Development monitors</h3>
                                <div class="d-flex flex-row">
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-person-fill btn-icon"></i> Admin</small></p>
                                    <p class="card-text mx-3"><small class="text-muted"><i class="bi bi-pencil-fill btn-icon"></i> March 04, 2024</small></p>
                                </div>
                                <p class="card-text justified-text news-caption">
                                The presence of CLSU faculty in various conferences and other scientific fora for veterinarians will be inevitable as five...
                                </p>
                            </div>
                            <div class="news-content-footer px-1">
                                <a href="#" class="btn btn-primary cont-reading">Read More <i class="bi bi-arrow-right btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-2">
                    <div class="page-content-card rounded">
                        <div class="col-lg g-0">
                            <div class="all-news-image-container g-0">
                                <img src="{{ asset('assets_cvsm/images/temporary/news-3.png') }}" class="img-fluid" alt="Headline Image">
                            </div>
                        </div>  <!-- Will have a limit for title num of characters as well as sa content preview-->
                        <div class="col-lg p-4 d-flex flex-column justify-content-between ">
                            <div class="news-content-body ">
                                <h3 class="news-headlines">PVMA recognizes CenTrAD director's PRC Outstanding Professional of the Year</h3>
                                <div class="d-flex flex-row"> 
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-person-fill btn-icon"></i> Admin</small></p>
                                    <p class="card-text mx-3"><small class="text-muted"><i class="bi bi-pencil-fill btn-icon"></i> March 01, 2024</small></p>
                                </div>
                                <p class="card-text justified-text news-caption">
                                The award received by Dr. Virginia M. Venturina as the Professional Regulation Commission (PRC) Outstanding Professional...
                                </p>
                            </div>
                            <div class="news-content-footer px-1">
                                <a href="#" class="btn btn-primary cont-reading">Read More <i class="bi bi-arrow-right btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-2">
                    <div class="page-content-card rounded">
                        <div class="col-lg g-0">
                            <div class="all-news-image-container g-0">
                                <img src="{{ asset('assets_cvsm/images/temporary/news-4.png') }}" class="img-fluid" alt="Headline Image">
                            </div>
                        </div>  <!-- Will have a limit for title num of characters as well as sa content preview-->
                        <div class="col-lg p-4 d-flex flex-column justify-content-between ">
                            <div class="news-content-body ">
                                <h3 class="news-headlines">CVSM faculty members share research outputs at the 91st PVMA Convention</h3>
                                <div class="d-flex flex-row">
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-person-fill btn-icon"></i> Admin</small></p>
                                    <p class="card-text mx-3"><small class="text-muted"><i class="bi bi-pencil-fill btn-icon"></i> February 29, 2024</small></p>
                                </div>
                                <p class="card-text justified-text news-caption">
                                Three faculty members from the CLSU College of Veterinary Science and Medicine presented the results of their respective research...
                                </p>
                            </div>
                            <div class="news-content-footer px-1">
                                <a href="#" class="btn btn-primary cont-reading">Read More <i class="bi bi-arrow-right btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


</section>


<!-- Include footer.php -->
@include('footer')

@endsection