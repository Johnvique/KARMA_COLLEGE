@extends('layouts.main')
@section('content')
   <!-- Start Main Banner Hero -->
   <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
        <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
            <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Services</h1>
            <h3 class="h4 pb-2 regular-400">Contact Us for Quality and Professional Services.</h3>
            <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Courses</button>
        </div>
    </div>
</div>
<!-- End Main Banner Hero -->


 <!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-5 semi-bold-600">Training Services</h2>
            <div class="service-header col-2 col-lg-3 text-end light-300">
                <i class='bx bx-gift h3 mt-1'></i>
            </div>
            <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                <h2 class="h3 pb-4 typo-space-line">We have Gifted You With Life-Changing Services.</h2>
            </div>
        </div>
    </div>

    <div class="service-tag py-5 bg-secondary">
        <div class="col-md-12">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Business Skills</a>
                </li>
                <li class="filter-btn nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">Technical Skills</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Leadership Skills</a>
                </li>
            </ul>
        </div>
    </div>

</section>

<section class="container overflow-hidden py-5">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Basic ICT Training</span>
                        <p class="card-text">Based on our ICT training, learners will be empowered to use information and data from various sources, and critically assessing the quality of the learning materials.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Procurement (Local/International Courses)</span>
                        <p class="card-text">This course equip the trainees with knowledge to understand how the products and services in every business environment are properly acquired so that projects and processes can proceed efficiently and successfully.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Mentorship Programme</span>
                        <p class="card-text">We offer engaging mentorship programs with the aim of accelerating the personal and professional development by providing mentees with guidance, advice and feedback from mentors with more experience than themselves.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Business Management Training</span>
                        <p class="card-text">Business management course enable trainees gain a working knowledge of other business disciplines like marketing, human resources, accounting and finance.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Community Sensitisation Workshops</span>
                        <p class="card-text">Community mobilization programs helps to raise people's awareness of and demand for a particular programme and to strengthen community participation for sustainability and self-reliance.
</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Motivational Talks</span>
                        <p class="card-text">KARMA motivational speakers will ensure that the program engages the minds and hearts of people in such a way that motivates them to think more clearly, see opportunities, and move forward with action throughout their life.</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Anger & Stress Management</span>
                        <p class="card-text">The major goal of introducing this program was to enable the individual mentee to understand the need for reducing both their emotional feelings and the physiological arousal that anger causes.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Recent Work -->
        

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/recent-work-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300 text-primary">Time Management</span>
                        <p class="card-text">Time management as a course helps one prioritize their tasks so that they ensure they have enough time available to complete every project. The quality of the work increases when one is not rushing to complete it ahead of a fast approaching deadline.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Recent Work -->
        

    </div>
</section>
<!-- End Service -->






<!-- Start View Work -->
<section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Karma Training & Empowerment Institute</h3>
                <p class="light-300"><i>The Power Of Positive Thinking</i></p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="{{url('/talk_to_us')}}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Keep In Touch Now!</a>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Counselling Services</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Adolescence Empowerment</h3>
                            <p class="card-text">Adolescence counselling among teengers aimed at behavioral change and focused mindfulness.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Marriage Counselling</h3>
                            <p class="card-text">We help a couple build and maintain an intimate relationship.<p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Drug and Alcohol Addiction Counselling</h3>
                            <p class="card-text">Our therapysts/psychologists/psychiatrists will help to prevent, diagnose, treat, or relieve symptoms of a disease or abnormal conditions.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Trauma Management</h3>
                            <p class="card-text">KARMA therapysts professionally work towards your emotional safety in your sessions and ensures that you live a trauma-free lifestyle.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Crisis Management Empowerment</h3>
                            <p class="card-text">This training helps to reduce the intensity of an individual's emotional, mental, physical and behavioral reactions to a crisis.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/work-slide-02.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300 text-primary">Bible Theology</h3>
                            <p class="card-text">Our trainers helps in explaining the theology found in the Bible in its own historical setting and its own terms, categories, and thought-forms.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Recent Work -->
            
        

        </div>
    </div>
</section>
<!-- End Recent Work -->   
@endsection