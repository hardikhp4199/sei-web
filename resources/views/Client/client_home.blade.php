<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="CreativeLayers" content="ATFN">
  <!-- css file -->


    @include('headerlink')

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="wrapper ovh">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav nav-innerpage-style main-menu">
      <!-- Ace Responsive Menu -->
      <nav class="posr">
      <div class="container posr menu_bdrt1">
    <div class="row align-items-center justify-content-between">
        <div class="col-auto px-0">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logos">
                    <a class="header-logo logo2" href="{{ url('/') }}">
                        <img src="{{ asset('client/images/seilogo.svg') }}" alt="Header Logo">
                    </a>
                </div>
                <div class="home1_style">
                    <div id="mega-menu">
                        <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Categories</a>
                        <ul class="menu ps-0">
                            <li>
                                <a class="dropdown" href="{{ url('services_display') }}">
                                    <span class="menu-icn flaticon-ruler"></span>
                                    <span class="menu-title">Engineering & Architecture</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between"></div>
                            </li>
                            <li>
                                <a class="dropdown" href="#">
                                    <span class="menu-icn flaticon-goal"></span>
                                    <span class="menu-title">Finance & Accounting</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between"></div>
                            </li>
                            <li>
                                <a class="dropdown" href="#">
                                    <span class="menu-icn flaticon-badge"></span>
                                    <span class="menu-title">Advocate</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between"></div>
                            </li>
                            <li>
                                <a class="dropdown" href="#">
                                    <span class="menu-icn flaticon-developer"></span>
                                    <span class="menu-title">Development & IT</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between">
                                    <div class="one-third">
                                        <div class="h6 cat-title">Web & App Design</div>
                                        <ul class="ps-0 mb40">
                                            <li><a href="#">Website Design</a></li>
                                            <li><a href="#">App DesignUX Design</a></li>
                                            <li><a href="#">Landing Page Design</a></li>
                                            <li><a href="#">Icon Design</a></li>
                                        </ul>
                                        <div class="h6 cat-title">Marketing Design</div>
                                        <ul class="ps-0 mb-0">
                                            <li><a href="#">Social Media Design</a></li>
                                            <li><a href="#">Email Design</a></li>
                                            <li><a href="#">Web Banners</a></li>
                                            <li><a href="#">Signage Design</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-third">
                                        <div class="h6 cat-title">Art & Illustration</div>
                                        <ul class="ps-0 mb40">
                                            <li><a href="#">Illustration</a></li>
                                            <li><a href="#">NFT Art</a></li>
                                            <li><a href="#">Pattern Design</a></li>
                                            <li><a href="#">Portraits & Caricatures</a></li>
                                            <li><a href="#">Cartoons & Comics</a></li>
                                            <li><a href="#">Tattoo Design</a></li>
                                            <li><a href="#">Storyboards</a></li>
                                        </ul>
                                        <div class="h6 cat-title">Gaming</div>
                                        <ul class="ps-0 mb-0">
                                            <li><a href="#">Game Art</a></li>
                                            <li><a href="#">Graphics for Streamers</a></li>
                                            <li><a href="#">Twitch Store</a></li>
                                        </ul>
                                    </div>
                                    <div class="one-third">
                                        <div class="h6 cat-title">Visual Design</div>
                                        <ul class="ps-0 mb40">
                                            <li><a href="#">Image Editing</a></li>
                                            <li><a href="#">Presentation Design</a></li>
                                            <li><a href="#">Infographic Design</a></li>
                                            <li><a href="#">Vector Tracing</a></li>
                                            <li><a href="#">Resume Design</a></li>
                                        </ul>
                                        <div class="h6 cat-title">Print Design</div>
                                        <ul class="ps-0 mb-0">
                                            <li><a href="#">T-Shirts & Merchandise</a></li>
                                            <li><a href="#">Flyer Design</a></li>
                                            <li><a href="#">Brochure Design</a></li>
                                            <li><a href="#">Poster Design</a></li>
                                            <li><a href="#">Catalog Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <span class="menu-icn flaticon-translator"></span>
                                    <span class="menu-title">Writing & Translation</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown" href="#">
                                    <span class="menu-icn flaticon-microphone"></span>
                                    <span class="menu-title">Music & Audio</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between">
                                    <div class="one-third">
                                        <div class="h6 cat-title">Audio</div>
                                        <ul class="ps-0 mb40">
                                            <li><a href="#">Audio Recording</a></li>
                                            <li><a href="#">Audio Editing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown" href="#">
                                    <span class="menu-icn flaticon-video-file"></span>
                                    <span class="menu-title">Video & Animation</span>
                                </a>
                                <div class="drop-menu d-flex justify-content-between">
                                    <div class="one-third">
                                        <div class="h6 cat-title">Video</div>
                                        <ul class="ps-0 mb40">
                                            <li><a href="#">Story Telling Video</a></li>
                                            <li><a href="#">Animation Video</a></li>
                                            <li><a href="#">Informative Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li class="visible_list">
                        <a class="list-item" href="#"><span class="title">SEI Group</span></a>
                        <ul>
                            <li><a href="#"><span class="title">About SEI</span></a></li>
                            <li><a href="#"><span class="title">Our Experts</span></a></li>
                            <li><a href="#"><span class="title">Vision / Mission</span></a></li>
                        </ul>
                    </li>
                    <li><a class="list-item" href="#">Careers</a></li>
                    <li><a class="list-item" href="#">FAQ</a></li>
                    <li><a class="list-item" href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
          @if(session()->has('username'))
      Welcome &nbsp; {{ session('username') }}
  @else
      Welcome Guest
  @endif
    </div>
    
</div>

      </nav>
    </header>
    <!-- Search Modal -->
    <div class="search-modal">
      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fal fa-xmark"></i></button>
            </div>
            <div class="modal-body">
              <div class="popup-search-field search_area">
                <input type="text" class="form-control border-0" placeholder="What service are you looking for today?">
                <label><span class="far fa-magnifying-glass"></span></label>
                <button class="ud-btn btn-thm" type="submit">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hiddenbar-body-ovelay"></div>

    <!-- Mobile Nav  -->
    <div id="page" class="mobilie_header_nav stylehome1">
    @include('mobilemenu')
    </div>

    <div class="body_content">
      <!-- Breadcumb Sections -->
      <!-- <section class="breadcumb-section wow fadeInUp mt40">
      <div class="cta-commmon-v1 cta-banner bgc-thm2 mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg">
        <img class="left-top-img wow zoomIn" src="images/vector-img/left-top.png" alt="">
        <img class="right-bottom-img wow zoomIn" src="images/vector-img/right-bottom.png" alt="">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="position-relative wow fadeInUp" data-wow-delay="300ms">
                <h2 class="text-white">Work Your Way</h2>
                <p class="text mb30 text-white">Give your visitor a smooth online experience with a solid UX design.</p>
                <a class="ud-btn btn-thm" href="page-contact.html">Become Seller<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
      <section class="pt0 pb90 our-ui-elements">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <br><br><br>
              <style>
                /*custom font*/
                @import url(https://fonts.googleapis.com/css?family=Montserrat);

                /*basic reset*/
                * {
                  margin: 0;
                  padding: 0;
                }

                html {
                  height: 100%;
                  /*background: #6441A5;  fallback for old browsers */
                  /*background: -webkit-linear-gradient(to left, #6441A5, #2a0845);  Chrome 10-25, Safari 5.1-6 */
                }

                /* body {
                  font-family: montserrat, arial, verdana;
                  background: transparent;
                } */

                /*form styles*/
                #msform {
                  text-align: center;
                  position: relative;
                  margin-top: 30px;
                }

                #msform fieldset {
                  background: white;
                  border: 0 none;
                  border-radius: 0px;
                  /* box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); */
                  /* padding: 20px 30px; */
                  box-sizing: border-box;
                  width: 80%;
                  margin: 0 10%;

                  /*stacking fieldsets above each other*/
                  position: relative;
                }

                /*Hide all except first fieldset*/
                #msform fieldset:not(:first-of-type) {
                  display: none;
                }


                fieldset {
                  position: relative;
                }

                /*inputs*/
                /* #msform input,
                #msform textarea {
                  padding: 15px;
                  border: 1px solid #ccc;
                  border-radius: 0px;
                  margin-bottom: 10px;
                  width: 100%;
                  box-sizing: border-box;
                  font-family: montserrat;
                  color: #2C3E50;
                  font-size: 13px;
                } */

                #msform textarea {
                  resize: vertical;
                  min-height: 50px
                }

                #msform select {
                  padding: 15px;
                  border: 1px solid #ccc;
                  border-radius: 0px;
                  margin-bottom: 10px;
                  width: 100%;
                  box-sizing: border-box;
                  font-family: montserrat;
                  color: #2C3E50;
                  font-size: 13px;
                }

                #msform input:focus,
                #msform textarea:focus {
                  -moz-box-shadow: none !important;
                  -webkit-box-shadow: none !important;
                  box-shadow: none !important;
                  border: 1px solid #ee0979;
                  outline-width: 0;
                  transition: All 0.5s ease-in;
                  -webkit-transition: All 0.5s ease-in;
                  -moz-transition: All 0.5s ease-in;
                  -o-transition: All 0.5s ease-in;
                }

                #msform label
                {text-align: left !important; }
                /*buttons*/
                #msform .action-button {
                  width: 100px;
                  background: #ee0979;
                  font-weight: bold;
                  color: white;
                  border: 0 none;
                  border-radius: 25px;
                  cursor: pointer;
                  padding: 10px 5px;
                  margin: 10px 5px;
                }

                #msform .action-button:hover,
                #msform .action-button:focus {
                  box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
                }

                #msform .action-button-previous {
                  width: 100px;
                  background: #C5C5F1;
                  font-weight: bold;
                  color: white;
                  border: 0 none;
                  border-radius: 25px;
                  cursor: pointer;
                  padding: 10px 5px;
                  margin: 10px 5px;
                }

                #msform .action-button-previous:hover,
                #msform .action-button-previous:focus {
                  box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
                }

                /*headings*/
                .fs-title {
                  font-size: 18px;
                  text-transform: uppercase;
                  color: #2C3E50;
                  margin-bottom: 10px;
                  letter-spacing: 2px;
                  font-weight: bold;
                }

                .fs-subtitle {
                  font-weight: normal;
                  font-size: 13px;
                  color: #666;
                  margin-bottom: 20px;
                }

                /*progressbar*/
                #progressbar {
                  margin-bottom: 30px;
                  overflow: hidden;
                  /*CSS counters to number the steps*/
                  counter-reset: step;
                }

                #progressbar li {
                  list-style-type: none;
                  color: #1f4b3f;
                  text-transform: uppercase;
                  font-size: 9px;
                  width: 20%;
                  float: left;
                  position: relative;
                  letter-spacing: 1px;
                }
                .mb15
                {text-align: left !important;}

                #progressbar li:before {
                  content: counter(step);
                  counter-increment: step;
                  width: 24px;
                  height: 24px;
                  line-height: 26px;
                  display: block;
                  font-size: 12px;
                  color: #ffffff;
                  background: #1f4b3f;
                  border-radius: 25px;
                  margin: 0 auto 10px auto;
                }

                /*progressbar connectors*/
                #progressbar li:after {
                  content: '';
                  width: 100%;
                  height: 2px;
                  background: #1f4b3f;
                  position: absolute;
                  left: -50%;
                  top: 9px;
                  z-index: -1;
                  /*put it behind the numbers*/
                }

                #progressbar li:first-child:after {
                  /*connector not needed before the first step*/
                  content: none;
                }

                /*marking active/completed steps green*/
                /*The number of the step and the connector before it = green*/
                #progressbar li.active:before,
                #progressbar li.active:after {
                  background: #ee0979;
                  color: #1f4b3f;
                }


                /* Not relevant to this form */
                .dme_link {
                  margin-top: 30px;
                  text-align: center;
                }

                .dme_link a {
                  background: #FFF;
                  font-weight: bold;
                  color: #ee0979;
                  border: 0 none;
                  border-radius: 25px;
                  cursor: pointer;
                  padding: 5px 25px;
                  font-size: 12px;
                }

                .dme_link a:hover,
                .dme_link a:focus {
                  background: #C5C5F1;
                  text-decoration: none;
                }
              </style>


              <!-- MultiStep Form -->
              <div class="row">
                <div class="col-md-12 col-md-offset-3">
                  <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                      <li class="active">Choose Services</li>
                      <li>Choose Experts</li>
                      <li>Schedule</li>
                      <li>Sign Up</li>
                      <li>Payment</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset style="position: relative;">
    <!-- Loop through each service -->

    <div class="row my-5">

    @foreach($services as $service)

        <!-- Service Card -->
        <div class="col-sm-6 col-xl-4 mb40 index-box">
            <a class="me-4 main-card p-relative">
                <div class="freelancer-style1 bdrs12 bdr1 hover-box-shadow p-relative">
                    <div class="d-flex align-items-center sticky-icon">
                        <div class="thumb w40 position-relative rounded-circle">
                            <img class="rounded-circle mx-auto" src="{{ asset('client/images/seilogo.svg') }}" alt="" height="50" width="50">
                            <!-- <span class="online"></span> -->
                        </div>
                    </div>
                    <div class="details">
                        <br>
                        <!-- Dynamic Service Name -->
                        <h3 class="title mb-4">{{ $service->ServiceName }}</h3>
                        <div class="arrow-icon">
                            <i class="fal fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>

                <!-- Accordion and Dynamic Content -->
                <div class="accordion_box" id="accordion_box_{{ $service->ServiceM_IDP }}">
                    <!-- Check if subservices are available -->
                    @if($service->subservices->isNotEmpty())
                        @foreach($service->subservices as $subservice)
                        <div class="Checkbox-parent Accordion">
                            <input class="material-icons" type="checkbox" />
                            <label>{{ $subservice->SubService_Name }}</label>
                            </input>
                        </div>
                        <div class="Accordion-panel">
                            <ul class="Checkbox-child">
                                <!-- Check if activities are available -->
                                @if($subservice->activities->isNotEmpty())
                                    @foreach($subservice->activities as $activity)
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label>{{ $activity->activity_name }}</label>
                                        </input>
                                    </li>
                                    @endforeach
                                @else
                                    <li>No activities available</li>
                                @endif
                            </ul>
                        </div>
                        @endforeach
                    @else
                        <p>No subservices available</p>
                    @endif
                </div>
            </a>
        </div>

    @endforeach
    </div>

                      <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>


                    <fieldset>
                    <center>
                      <h3> Step 2: Choose Your Expert</h3></center>
                        <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                        <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                        <img class="rounded-circle mx-auto" src="{{ asset('client/images/seilogo.svg') }}" alt="">
                        <!-- <span class="online"></span> -->
                        </div>
                        <div class="details">
                        <h5 class="title mb-1">Expert 1</h5>
                        <p class="mb-0">sample text is here!. sample text is here!.</p>

                        <hr class="opacity-100 mt20 mb15">
                        <div class="fl-meta d-flex align-items-center justify-content-between">

                        <h3>$90 / hr</h3>
                        </div>
                        <div class="d-grid mt15">
                        <a href="#" class="ud-btn btn-light-thm">Select Expert<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                        <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                        <img class="rounded-circle mx-auto" src="{{ asset('client/images/seilogo.svg') }}" alt="">
                        <!-- <span class="online"></span> -->
                        </div>
                        <div class="details">
                        <h5 class="title mb-1">Expert 1</h5>
                        <p class="mb-0">sample text is here!. sample text is here!. </p>

                        <hr class="opacity-100 mt20 mb15">
                        <div class="fl-meta d-flex align-items-center justify-content-between">

                        <h3>$90 / hr</h3>
                        </div>
                        <div class="d-grid mt15">
                        <a href="#" class="ud-btn btn-light-thm">Select Expert<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                        <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                        <img class="rounded-circle mx-auto" src="{{ asset('client/images/seilogo.svg') }}" alt="">
                        <!-- <span class="online"></span> -->
                        </div>
                        <div class="details">
                        <h5 class="title mb-1">Expert 1</h5>
                        <p class="mb-0">sample text is here!. sample text is here!. </p>

                        <hr class="opacity-100 mt20 mb15">
                        <div class="fl-meta d-flex align-items-center justify-content-between">

                        <h3>$90 / hr</h3>
                        </div>
                        <div class="d-grid mt15">
                        <a href="#" class="ud-btn btn-light-thm">Select Expert<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                        <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                        <img class="rounded-circle mx-auto" src="{{ asset('client/images/seilogo.svg') }}" alt="">
                        
                        </div>
                        <div class="details">
                        <h5 class="title mb-1">Expert 1</h5>
                        <p class="mb-0">sample text is here!. sample text is here!. </p>

                        <hr class="opacity-100 mt20 mb15">
                        <div class="fl-meta d-flex align-items-center justify-content-between">

                        <h3>$90 / hr</h3>
                        </div>
                        <div class="d-grid mt15">
                        <a href="#" class="ud-btn btn-light-thm">Select Expert<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                      <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                      <center>   <h3> Step 3: Schedule Your Meeting</h3></center>
                      <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                    <center><h3>Step 4: Sign Up</h3></center>
        <div class="checkout_form">
            <h4 class="title mb30">Client Details</h4>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="checkout_coupon">
                <form class="form2" id="client_master_form" name="contact_form" method="POST" action="{{ route('client.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">First Name<span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="first_name" placeholder="Your First Name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">Last Name<span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="last_name" placeholder="Your Last Name" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">Phone <span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">Email Address<span class="text-danger">*</span></h6>
                                <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb25">
                                <h6 class="mb15">Business Category<span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="business_category" placeholder="Business Category">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb25">
                                <h6 class="mb15">Company Name<span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="company_name" placeholder="Company Name">
                            </div>
                        </div>
                       
                        <div class="col-sm-12">
                            <div class="mb25">
                                <h6 class="mb15">Address<span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb25">
                                <h6 class="mb15">Country / Region <span class="text-danger">*</span></h6>
                                <div class="bootselect-multiselect">
                                    <select class="selectpicker" name="country" required>
                                        <option value="">Select</option>
                                        <option value="India">India</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="UK">UK</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb25">
                                <h6 class="mb15">Town / City <span class="text-danger">*</span></h6>
                                <div class="bootselect-multiselect">
                                    <select class="selectpicker" name="city" required>
                                        <option value="Ahemdabad">Ahemdabad</option>
                                        <option value="California">California</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="Los Angeles">Los Angeles</option>
                                        <option value="Manhattan">Manhattan</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New York">New York</option>
                                        <option value="San Diego">San Diego</option>
                                        <option value="San Francisco">San Francisco</option>
                                        <option value="Texas">Texas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">State <span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="state" placeholder="State" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb25">
                                <h6 class="mb15">ZIP <span class="text-danger">*</span></h6>
                                <input class="form-control" type="text" name="zip" placeholder="ZIP" required>
                            </div>
                        </div>
                        <div class="col-lg-2 ps-0 ps-xl-3 pe-0">
                            <div class="details">
                                <div class="d-grid mt15">
                                    <button type="submit" class="next action-button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                  </form>
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                  <input type="button" name="next" class="next action-button" value="Next" />


</div>
</div>


                    </fieldset>

                 <!-- <fieldset>
                      <div class="payment_widget default-box-shadow1">
                        <div class="radio-element">
                                <div class="form-check d-flex align-items-center mb15">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="checked">
                                  <label class="form-check-label" for="flexRadioDefault1">Direct bank transfer</label>
                                </div>
                                <div class="pw-details">
                                  <p class="fz13 mb30">Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have cleared in our account.</p>
                                </div>
                                <div class="form-check d-flex align-items-center mb15">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                  <label class="form-check-label" for="flexRadioDefault2">UPI Payment</label>
                                </div>

                                <div class="form-check d-flex align-items-center">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                  <label class="form-check-label" for="flexRadioDefault4">PayPal</label>
                                </div>
                        </div>
                      </div>
                      <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      <input type="submit" name="submit" class="submit action-button" value="Submit" />

                    </fieldset> -->

                    </form>
                  <!-- link to designify.me code snippets -->
                  <!-- /.link to designify.me code snippets -->
                </div>
              </div>
              <!-- /.MultiStep Form -->
            </div>
          </div>

        </div>
      </section>

      <!-- Our Footer -->
      <section class="footer-style1 at-home5 pt25 pb-0">

      @include('footerarea');


      </section>
      <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
  </div>





  @include('footerlink');


  <script id="rendered-js">
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = now * 50 + "%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'relative'
          });

          next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });

    });

    $(".previous").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //de-activate current step on progressbar
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = (1 - now) * 50 + "%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({ 'left': left });
          previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });

    });

    $(".submit").click(function () {
      return false;
    });
    //# sourceURL=pen.js

    // Select all .main-card elements
    let mainCards = document.querySelectorAll(".main-card");

    mainCards.forEach((card) => {
      // Attach click event listener to each .main-card
      card.addEventListener("click", () => {
        // Hide all .accordion_box elements
        document.querySelectorAll(".accordion_box").forEach((box) => {
          box.style.display = "none";
        });

        // Find the .accordion_box within the clicked .main-card
        let accordionBox = card.querySelector(".accordion_box");

        // Show the corresponding accordion box
        accordionBox.style.display = "block";
      });
    });



    $(".Checkbox-parent input").on('click', function () {
      var _parent = $(this);
      var nextli = $(this).parent().next().children().children();

      if (_parent.prop('checked')) {
        console.log('Checkbox-parent checked');
        nextli.each(function () {
          $(this).children().prop('checked', true);
        });

      }
      else {
        console.log('Checkbox-parent un checked');
        nextli.each(function () {
          $(this).children().prop('checked', false);
        });

      }
    });

    $(".Checkbox-child input").on('click', function () {

      var ths = $(this);
      var parentinput = ths.closest('div').prev().children();
      var sibblingsli = ths.closest('ul').find('li');

      if (ths.prop('checked')) {
        console.log('Checkbox-child checked');
        parentinput.prop('checked', true);
      }
      else {
        console.log('Checkbox-child unchecked');
        var status = true;
        sibblingsli.each(function () {
          console.log('sibb');
          if ($(this).children().prop('checked')) status = false;
        });
        if (status) parentinput.prop('checked', false);
      }
    });

    // show hide accordion

    var acc = document.getElementsByClassName("Accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("Accordion--active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>



</body>

</html>
