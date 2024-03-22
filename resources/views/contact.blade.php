<!-- Include header.php -->
@extends('header')

@section('content')

<section class="page-wrapper">

    <!-- PAGE COVER STARTS HERE -->
    <div class="page-cover">
        <img src="{{ asset('assets_cvsm/images/about-cover.jpg') }}" alt="About Cover">
        <div class="cover-overlay"></div>
        <div class="cover-title">CONTACT US</div>
    </div>
    <!-- PAGE COVER ENDS HERE -->

    <!-- Section Title -->
    <div class="container-fluid text-center">
      <div class="shorter-line"></div>
      <h3 class="section-title mb-4">GET IN TOUCH</h3>

    <div class="contact-info">
        <p>
            <small class="text-muted"><i class="bi bi-telephone-fill"></i><strong>Phone:</strong> 044-511-2197</small> 
            <small class="text-muted"><a href="mailto:cvsm@clsu.edu.ph" target="_blank"><i class="bi bi-envelope-fill"></i><strong>Email:</strong> cvsm@clsu.edu.ph</a></small>
        </p>
        <p><small class="text-muted"><a href="https://maps.app.goo.gl/ZnxtnoSBimWtak4Y6" target="_blank"><i class="bi bi-geo-alt-fill"></i><strong>Where to find us?</strong> Central Luzon State University, Science City of Muñoz, Nueva Ecija, 3120</a></small></p>
    </div>


    </div>

    

    <main>
        <div class="container my-5">
            <div class="row page-content-card rounded" >
                
                <div class="col-md g-0" data-aos="fade-up" data-aos-delay="800">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3840.2220350434745!2d120.9312484!3d15.7393891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3390d65305145975%3A0xdaf16a5df195e2ae!2sCollege%20of%20Veterinary%20Science%20and%20Medicine!5e0!3m2!1sen!2sph!4v1710742606295!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

               <!-- Contact Form -->
                <div class="col-md p-4">
                    <h2 class="py-4 section-subtitle font-blue">Leave us a message</h2>
                    <form id="contactForm">
                        <div class="row g-4">
                            <div class="col-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control custom-input" id="firstName" name="visitor_firstname" placeholder="First Name" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control custom-input" id="lastName" name="visitor_lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control custom-input" id="email" name="visitor_email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control custom-input" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" class="form-control custom-input" id="to_name" name="to_name" placeholder="to" value="webdev@clsucvsm.edu.ph">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control custom-input" id="message" name="message" rows="3" placeholder="Write a message" required></textarea>
                        </div>
                        <input type="submit" id="sendEmail" value="Send Message" class="btn btn-success w-100 mb-4">
                    </form>
                </div>


                
                <div class="container-fluid page-content-footer"></div>
            </div>
        </div>
    </main>

</section>

<script>
    const btn = document.getElementById('sendEmail');

    document.getElementById('contactForm')
    .addEventListener('submit', function(event) {
    event.preventDefault();

    btn.value = 'Sending...';

    const serviceID = 'service_geu1hea';
    const templateID = 'template_yre4yye';

    emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
        btn.value = 'Send Email';
        alert('Email Sent to CVSM!');
        }, (err) => {
        btn.value = 'Send Email';
        alert(JSON.stringify(err));
        });
    });
</script>


<!-- Include footer.php -->
@include('footer')

@endsection