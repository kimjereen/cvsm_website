<!-- FOOTER STARTS HERE -->
<div class="footer-bg">
    <img src="{{ asset('assets_cvsm/images/footer-bg.jpg') }}" alt="footer" class="footer-bg-image">
    <div class="container-fluid footer">
        <div class="container">
            <footer>
            <div class="row py-5 my-5">
                <div class="col-sm-4">
                    <!-- School logos -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets_cvsm/images/clsu-logo.png') }}" alt="CLSU Logo" style="max-height: 40px; margin-right: 10px;">
                        <img src="{{ asset('assets_cvsm/images/cvsm-logo.png') }}" alt="CVSM Logo" style="max-height: 40px;">
                    </div>
                    <!-- School name -->
                    <span class="footer-offwhite">Central Luzon State University</span>
                    <!-- College name -->
                    <h5 class="text-white">College of Veterinary Science and Medicine</h5>
                    <!-- Horizontal line -->
                    <hr class="bg-white">
                    <!-- Short intro -->
                    <p class="footer-offwhite"><i>Dedicated to Service and Excellence</i></p>
                    <!-- Social media links -->
                    <div class="social-media mb-5">
                        <a href="https://www.facebook.com/profile.php?id=100057517867278" class="me-3 text-white"><i class="bi bi-facebook" target="_blank"></i></a>
                        <a href="#" class="me-3 text-white"><i class="bi bi-twitter" target="_blank"></i></a>
                        <a href="#" class="me-3 text-white"><i class="bi bi-youtube" target="_blank"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram" target="_blank"></i></a>
                    </div>
                </div>


                <div class="col-sm-1">

                </div>

                <div class="col">
                    <h6 class="text-white">Pages</h6>
                    <ul class="nav flex-column footer-offwhite">
                        <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 ">Home</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 ">About</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('academic') }}" class="nav-link p-0 ">Academic Programs</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('research') }}" class="nav-link p-0 ">Research</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('news') }}" class="nav-link p-0 ">News</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('facilities') }}" class="nav-link p-0 ">Facilities and Resources</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('extension') }}" class="nav-link p-0 ">Extension</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h6 class="text-white">Quick Links</h6>
                    <ul class="nav flex-column footer-offwhite">
                        <li class="nav-item mb-2"><a href="https://clsu.edu.ph/" class="nav-link p-0" target="_blank">CLSU</a></li>
                        <li class="nav-item mb-2"><a href="https://clsu-ovpaa.edu.ph/" class="nav-link p-0" target="_blank">OVPAA</a></li>
                        <li class="nav-item mb-2"><a href="https://oad.clsu2.edu.ph/" class="nav-link p-0" target="_blank">OAD</a></li>
                        <li class="nav-item mb-2"><a href="https://oad.clsu2.edu.ph/star/user-login/" class="nav-link p-0" target="_blank">Student Portal</a></li>
                        <li class="nav-item mb-2"><a href="https://oad.clsu2.edu.ph/star/index.php/user-login/1?fbclid=IwAR0q90-f8SVYf7Bju0dtR_t6d-hbFZd1qIphM_1kC7KCJ2q3eee6uFnOU84" class="nav-link p-0" target="_blank">Faculty Portal</a></li>
                        
                        
                        <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link p-0 ">Login</a></li>
                    </ul>
                </div>

                <div class="col">
                <h6 class="text-white">Contact</h6>
                <ul class="nav flex-column footer-offwhite">
                    <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0">Contact Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="me-3 text-white"><i class="bi bi-telephone-fill"></i></a>044-511-2197</li>
                    <li class="nav-item mb-2"><a href="mailto:cvsm@clsu.edu.ph" class="me-3 text-white"><i class="bi bi-envelope-fill"></i></a>cvsm@clsu.edu.ph</li>
                    <li class="nav-item mb-2"><a href="https://maps.app.goo.gl/ZnxtnoSBimWtak4Y6" target="_blank" class="me-3 text-white"><i class="bi bi-geo-alt-fill"></i></a>Central Luzon State University, Science City of Muñoz, Nueva Ecija, 3120</li>
                </ul>
                </div>
            </div>
            </div>

            <hr class="my-4">
            <div class="row">
                <div class="footer-bottom">
                <div class="container">
                    <div class="row footer-offwhite">
                        <div class="col-md-6">
                            <p>&copy; 2024 CLSU College of Veterinary Science and Medicine. All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline text-md-end">
                                <li class="list-inline-item"><a href="{{ route('privacypolicy') }}" class="a-link">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            </footer>

        <div class="container-fluid footer-end"></div>
    </div>
</div>
<!-- FOOTER ENDS HERE -->
