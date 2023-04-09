@extends('layouts.main')
@section('content')
    <!-- Start Main Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Payment Plan</h1>
                <h3 class="h4 pb-2 regular-400">Register a Course Today and Transform your life.</h3>
                <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Admission</button>
            </div>
        </div>
    </div>
    <!-- End Main Banner Hero -->

    <!-- Start pricing -->
    <div class="container-lg py-5">
        <div class="col-md-12 m-auto text-center py-5">
            <h1 class="pricing-header h2 semi-bold-600">Training Prerequisites</h1>
        </div>


        <div class="row px-lg-3">


            <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <img style="height: 150px; width: 200px" class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/join.jpg" alt="Card image">
                        <h2 class="pricing-table-heading h5 semi-bold-600">Joining Criteria </h2>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>National Identity Cards</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Any relevant academic Stationeries/gadgets </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Application Fee</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Approval Note of Fee Clearance</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <img style="height: 150px; width: 200px" class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/paybill.jpeg" alt="Card image">
                        <h2 class="pricing-table-heading h5 semi-bold-600">MPESA Payment Option </h2>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Access the SIM ToolKit in your phone</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Go to MPESA.</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Select Lipa na M-PESA </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Select Buy Goods and Services</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Enter Paybill No. 4108381 </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Enter Account No. (Student's Name/Registration No.) </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Enter M-PESA Pin</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Click OK.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <img style="height: 150px; width: 200px" class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/bank.jpg" alt="Card image">
                        <h2 class="pricing-table-heading h5 semi-bold-600">Cooperative Bank Payment Option </h2>
                        <strong><ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Main Campus</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Cooperative Bank</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Kianjai Branch </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Account Number: xxxxxxxxxxx</li>
                        </ul></strong> <br>

                        <h2 class="pricing-table-heading h5 semi-bold-600">National Bank Payment Option </h2>
                        <strong><ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Main Campus</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>National Bank</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Town Branch </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Account Number: xxxxxxxxxxx</li>
                        </ul></strong>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Content -->





    <!-- Start Pricing Horizontal Section -->
    <section class="bg-light pt-sm-0 py-5">
        <div class="container py-5">

            <h1 class="h2 semi-bold-600 text-center mt-2">Fee Structure</h1>

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Free Offer (Bronze)</h5>
                </div>
                <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                <ul class="text-left px-4 list-unstyled mb-0 light-300">
                    <li><i class="bx bxs-circle me-2"></i>Partially Registered Member</li>
                    <li><i class="bx bxs-circle me-2"></i>Single User</li>
                    <li><i class="bx bxs-circle me-2"></i>Little Access to Offers</li>
                    <li><i class="bx bxs-circle me-2"></i>Free Mentorship Program</li>
                </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>Ksh. 0.00</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Standard (Silver)</h5>
                </div>
                <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                    <li><i class="bx bxs-circle me-2"></i>Averagely Registered Members</li>
                    <li><i class="bx bxs-circle me-2"></i>Max. of 5-10 Users</li>
                    <li><i class="bx bxs-circle me-2"></i>Medium Access to Programs</li>
                    <li><i class="bx bxs-circle me-2"></i>Medium Access to Offers</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>Ksh. 0.00</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Advanced (Gold)</h5>
                </div>
                <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                    <li><i class="bx bxs-circle me-2"></i>Fully Registered Member</li>
                    <li><i class="bx bxs-circle me-2"></i>Infinity Users</li>
                    <li><i class="bx bxs-circle me-2"></i>Full Access to Programmes</li>
                    <li><i class="bx bxs-circle me-2"></i>Full Access to Offers</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>ksh.0.00</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

        </div>
    </section>
    <!--End Pricing Horizontal Section-->
@endsection