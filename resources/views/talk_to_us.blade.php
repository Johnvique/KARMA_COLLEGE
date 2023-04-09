@extends('layouts.main')
@section('content')
        <!-- Start Banner Hero -->
        <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
            <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
                <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                    <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Talk To Us</h1>
                    <h3 class="h4 pb-2 regular-400">Feel free to communicate to us about your inquiries or suggestions and we will get back to you soonest possible.</h3>
                    <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button>
                </div>
            </div>
        </div>
        <!-- End Banner Hero -->
    
    
        <!-- Start Contact -->
        <section class="container py-5">
    
            <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Get In Touch.</h1>
            <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
                Let's Engage Now!
            </p>
    
            <div class="row pb-4">
                <div class="col-lg-4">
    
                    <div class="contact row mb-4">
                        <div class="contact-icon col-lg-3 col-3">
                            <div class="py-3 mb-2 text-center border rounded text-secondary">
                                <i class='display-6 bx bx-phone-call'></i>
                            </div>
                        </div>
                        <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                            <li class="h5 mb-0">Phone Number</li>
                            <li class="text-muted">Main Office</li>
                            <li class="text-muted">+254722953886</li>
                        </ul>
                    </div>
    
                    <div class="contact row mb-4">
                        <div class="contact-icon col-lg-3 col-3">
                            <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                <i class='bx bx-envelope display-6' ></i>
                            </div>
                        </div>
                        <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                            <li class="h5 mb-0">Email Address</li>
                            <li class="text-muted">Technical Desk</li>
                            <li class="text-muted">karma.institute22@gmail.com</li>
                        </ul>
                    </div>
    
                    <div class="contact row mb-4">
                        <div class="contact-icon col-lg-3 col-3">
                            <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                <i class='bx bx-map display-6'></i>
                            </div>
                        </div>
                        <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                            <li class="h5 mb-0">Postal Address</li>
                            <p class="text-muted">Karma Training & Empowerment Centre, <br>P.O Box 67-60602, <br> Kianjai, Meru. </p>
                        </ul>
                    </div>
    
                </div>
    
    
                <!-- Start Contact Form -->
                <div class="col-lg-8 ">
                    <form class="contact-form row" method="post" action="#" role="form">
    
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="inputname" placeholder="Name">
                                <label for="floatingname light-300">Name</label>
                            </div>
                        </div><!-- End Input Name -->
    
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="inputemail" placeholder="Email">
                                <label for="floatingemail light-300">Email</label>
                            </div>
                        </div><!-- End Input Email -->
    
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingphone" name="inputphone" placeholder="Phone">
                                <label for="floatingphone light-300">Phone</label>
                            </div>
                        </div><!-- End Input Phone -->
    
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingIDNumber" name="inputIDNumber" placeholder="ID Number">
                                <label for="floatingIDNumber light-300">ID Number</label>
                            </div>
                        </div><!-- End Input ID Number -->
    
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="inputsubject" placeholder="Subject">
                                <label for="floatingsubject light-300">Subject</label>
                            </div>
                        </div><!-- End Input Subject -->
    
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea"></textarea>
                                <label for="floatingtextarea light-300">Message</label>
                            </div>
                        </div><!-- End Textarea Message -->
    
                        <div class="col-md-12 col-12 m-auto text-end">
                            <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Message</button>
                        </div>
    
                    </form>
                </div>
                <!-- End Contact Form -->
    
    
            </div>
        </section>
        <!-- End Contact -->
@endsection