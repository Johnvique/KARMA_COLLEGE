@extends('layouts.main')
@section('content')
        <!-- Start Banner Hero -->
        <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
            <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
                <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                    <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Make Application</h1>
                    <h3 class="h4 pb-2 regular-400">For any inquiries, kindly make a formal application.</h3>
                    <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Apply</button>
                </div>
            </div>
        </div>
        <!-- End Banner Hero -->
    
    
        <!-- Start Contact -->
        <section class="container py-5">
    
            <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Formal Application.</h1><br><br>
    
            <div class="row pb-4">
                <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
         <div class="text"><span style="text-danger"></span>
                    <a href="{{url('/#')}}" target="_blank" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
              <span class="icon-download">Click Here To Download Application Form</span>
            </a>
						    </div>
					    </div>
                <div class="col-lg-4">
    
                    <div class="contact row mb-4">
                        <div class="contact-icon col-lg-3 col-3">
                            <div class="py-3 mb-2 text-center border rounded text-secondary">
                                <i class='display-6 bx bx-desktop'></i>
                            </div>
                        </div>
                        <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                            <strong><li class="h5 mb-0">Instructions</li>
                            <li class="text-muted">01. Download the top-left attached application form and fill it.</li>
                            <li class="text-muted">02. In the below input fields, enter the required personal details.</li>
                            <li class="text-muted">03. In the file input, upload the duly filled application letter</li>
                            <li class="text-muted">04. Leave a note inform of application letter.</li>
                            <li class="text-muted">05. Submit Your Application</li></strong>
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
                            <input type="text" class="form-control form-control-lg light-300" id="floatingIDnumber" name="inputIDnumber" placeholder="ID Number">
                                <label for="floatingIDnumber light-300">ID Number</label>
                            </div>
                        </div><!-- End Input ID Number -->
    
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <input type="file" class="form-control form-control-lg light-300" id="floatingFile" name="inputsubFile" placeholder="Upload Your Document">
                            </div>
                        </div><!-- End Input File -->
    
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea"></textarea>
                                <label for="floatingtextarea light-300">Application Note</label>
                            </div>
                        </div><!-- End Textarea Message -->
    
                        <div class="col-md-12 col-12 m-auto text-end">
                            <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Submit Application</button>
                        </div>
    
                    </form>
                </div>
                <!-- End Contact Form -->
    
    
            </div>
        </section>
        <!-- End Contact -->
@endsection