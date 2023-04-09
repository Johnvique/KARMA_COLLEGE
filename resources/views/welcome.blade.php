@extends('layouts.main')
@section('content')
    
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Welcome To <strong>Karma</strong> Empowerment Center.
                              </h1>
                              <strong><p class="banner-body text-black py-3">
                                We transform individual and communal lives through restoring, building and enhancing hopes and dreams.
                                </p></strong>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{url('/about_karma')}}" target="_blank"  role="button">Progress</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Karma Mediation Centre.
                                </h1>
                                <strong><p class="banner-body text-black py-3">
                                     We offer online and offline mediation services which in comparison with court litigations are cheaper, faster, affordable and confidential in nature leading to a win-win situation.
                                </p></strong>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{url('/what_we_offer')}}" target="_blank"  role="button">Other Services</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Karma School Drop Out Empowerment
                                </h1>
                                <strong><p class="banner-body text-black py-3">
                                We recognise the importance of Primary and Secondary Education for all and especially for the older generation who missed it as it grew for one reason or another.Those interested will be assisted to pick a combination of subjects which does not require practicals and be coached to sit for kcse examinations as private candidates.
                                </p></strong>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{url('/talk_to_us')}}" target="_blank" role="button">Let's Talk</a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Counselling services and Jua Kali Artisan certification
                                </h1>
                                <strong><p class="banner-body text-black py-3">
                                Karma has positioned herself to provide tuition for Jua Kali Artisan courses for those who do not have KCPE/KCSE certificates to access them by sitting KNEC examination as private candidates.
                                </p></strong>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{url('/talk_to_us')}}" target="_blank" role="button">Make Inquiries</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero --><br><br>
    
    <!-- Start Choice -->
<section class="why-us banner-bg bg-light">
    <div class="container my-4">
        <div class="row">
            <div class="banner-img col-lg-5">
                <img src="./assets/img/img8.jpeg" class="rounded img-fluid" alt="">
            </div>
            <div class="banner-content col-lg-7 align-self-end">
                <h2 class="h2 text-primary pb-3">Why you choose KARMA?</h2>
                <p class="text-muted pb-5 light-300"><strong>Reasons why you need to choose Karma for educational and professional value addition in your life is revolving around our major objective for transforming individual and communal lives to enable people live lives that God had intended for them at creation stage.The centre is managed by team of qualified professionals in all areas of undertaking who are out to holistically make change in lives of our students and clients. We treasure and cherish collaboration as a value adition to our products and services, thus enabling us to give the-state-of-art service delivery.</strong></p>
                <p class="text-muted pb-5 light-300"><strong>We are currently collaborating with Kenya Association of psychologists and counsellors in the training and provision of services in the area of Empowerment psychotherapy. We have also collaborated with St. Nicholas Rehabilitation Centre for the same. Other collaborators are the examination bodies notably, Kenya Accountants and Secretaries National Examination Board and Kenya National Examination Council.We will continue to strengthen and create more networks moving forward, to enable the college to grow it's knowledge-base and professionalism.</strong></p>
            </div>
        </div>
    </div>
</section><br><br>
<!-- End Choice -->

<!-- Start Our Partner -->
<section class="bg-secondary py-3">
    <div class="container py-5">
        <h2 class="h2 text-white text-center py-5">Our Partners</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/education.jpg" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/stnik.jpg" class="img-fluid">
                    <p>St. Nicholas Rehabilitation Centre</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/knec.jpg" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/ksneb.jpg" class="img-fluid">
                </div>
            </div>
             <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/karumo.png" class="img-fluid">
                </div>
            </div>
             <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/must.png" class="img-fluid">
                </div>
            </div>
             <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 300px; height: 150px" src="./assets/img/Katti.png" class="img-fluid">
                </div>
            </div>
             <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <img style="width: 200px; height: 150px" src="./assets/img/kcpa.png" class="img-fluid">
                </div>
            </div>
             
        </div>
    </div>
</section>
<!--End Our Partner--><br><br>


<!-- Start Aim -->
<section class="banner-bg bg-white py-5">
    <div class="container my-4">
        <div class="row text-center">

            <div class="objective col-lg-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class="display-4 bx bxs-bulb text-light"></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>
                <p class="light-300">
                    The Vibrant Empowerment Centre of Your Choice.
                </p>
            </div>

            <div class="objective col-lg-4 mt-sm-0 mt-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class='display-4 bx bx-revision text-light'></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>
                <p class="light-300">
                    To restore, build and enhance hopes and dreams to enable students/clients and the community at large to realize their full potential and live thriving lives. This is achieved by using state of art dellivery method to impart knowledge, information, skills and positive attitude and nurturing talents by providing psychological support.
                </p>
            </div>

            <div class="objective col-lg-4 mt-sm-0 mt-4">
                <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                    <i class="display-4 bx bxs-select-multiple text-light"></i>
                </div>
                <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Core Values</h2>
                <p class="light-300">
                    As we pursue the above, we are guided by the following core values; Integrity, Confidentiality, Teamwork, Collaborative patnership, Innovativeness and creativity, Accountability and Respect for all with respect to diversity.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- End Aim -->

@endsection