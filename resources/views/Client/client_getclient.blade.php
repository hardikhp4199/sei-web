<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="CreativeLayers" content="ATFN">





@include('headerlink');



<!-- Title -->
<title></title>

</head>
<body>
<div class="wrapper ovh">
  <!-- <div class="preloader"></div> -->
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style bg-transparent zi9 position-relative main-menu border-0">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
    <?php // include("menu.php"); ?>
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
        <div class="col-auto px-0">
            <div class="d-flex align-items-center">
                
               
                
            </div>
        </div>
    </div>
</div>

    </nav>
  </header>
  <!-- Search Modal -->
  <div class="search-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-xmark"></i></button>
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
   


  <?php //// include("mobilemenu.php"); ?>
  @include('mobilemenu');
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
            <div class="ui-content">
           
              <div class="navpill-style1 mb70">
                <ul class="nav nav-pills mb30" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active fw500 dark-color" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1 Services</button>
                  </li>
                  <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2 Product Details</button>
                  </li> -->
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">2 Expert</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3  Schedule</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">4  Sign Up</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link fw500 dark-color" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">5  Payment</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade fz15 text show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                  <div class="row">
               <center>   <h3> Step 1: Choose Your Services</h3></center>

                  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
       

            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <div class="freelancer-style1 bdr1 bdrs12 hover-box-shadow row ms-0 align-items-lg-center">
                  <div class="col-lg-10 ps-0 bdrr1 bdrn-xl">
                    <div class="d-lg-flex">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-1.png" alt="">
                        <span class="online-badge2"></span>
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h2 class="title mb-3">IT Services</h2>
                       </div>
                    </div>
                    <p class="text mt10">Sample text is Here!..Sample text is Here!..Sample text is Here!..Sample text is Here!..
                    Sample text is Here!..Sample text is Here!..Sample text is Here!..
                    </p>
                  
                  </div>
                  <div class="col-lg-2 ps-0 ps-xl-3 pe-0">
                    <div class="details">
                   
                    <div class="d-grid mt15">
                      <a href="#" class="ud-btn btn-thm-border bdrs12 default-box-shadow1">Explore More<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                    </div>
                  </div>
                </div>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">

                <div class="accordion" id="sub-accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="sub-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <label class="custom_checkbox">Sub Category 1
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                            </button>
                        </h2>
                        <div id="sub-collapseOne" class="accordion-collapse collapse" aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
                            <div class="accordion-body">
                            <div class="checkbox-style1">
                    <label class="custom_checkbox">Activity 1
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 2
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 3
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 4
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="sub-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo" aria-expanded="false" aria-controls="sub-collapseTwo">
                            <label class="custom_checkbox">Sub Category 2
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                            </button>
                        </h2>
                        <div id="sub-collapseTwo" class="accordion-collapse collapse" aria-labelledby="sub-headingTwo" data-bs-parent="#sub-accordionExample">
                            <div class="accordion-body">
                            <div class="checkbox-style1">
                    <label class="custom_checkbox">Activity 1
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 2
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 3
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Activity 4
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <div class="freelancer-style1 bdr1 bdrs12 hover-box-shadow row ms-0 align-items-lg-center">
                  <div class="col-lg-10 ps-0 bdrr1 bdrn-xl">
                    <div class="d-lg-flex">
                      <div class="thumb w60 position-relative rounded-circle mb15-md">
                        <img class="rounded-circle mx-auto" src="images/team/client-1.png" alt="">
                        <span class="online-badge2"></span>
                      </div>
                      <div class="details ml15 ml0-md mb15-md">
                        <h2 class="title mb-3">Legal Service</h2>
                       </div>
                    </div>
                    <p class="text mt10">Sample text is Here!..Sample text is Here!..Sample text is Here!..Sample text is Here!..
                    Sample text is Here!..Sample text is Here!..Sample text is Here!..
                    </p>
                  
                  </div>
                  <div class="col-lg-2 ps-0 ps-xl-3 pe-0">
                    <div class="details">
                   
                    <div class="d-grid mt15">
                      <a href="#" class="ud-btn btn-thm-border bdrs12 default-box-shadow1">Explore More<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                    </div>
                  </div>
                </div>
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
      

<div class="accordion" id="sub-accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="sub-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <label class="custom_checkbox">Sub Category 1
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
            </button>
        </h2>
        <div id="sub-collapseOne" class="accordion-collapse collapse" aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
            <div class="accordion-body">
            <div class="checkbox-style1">
    <label class="custom_checkbox">Activity 1
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 2
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 3
      <input type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 4
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
  </div>


            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="sub-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo" aria-expanded="false" aria-controls="sub-collapseTwo">
            <label class="custom_checkbox">Sub Category 2
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
            </button>
        </h2>
        <div id="sub-collapseTwo" class="accordion-collapse collapse" aria-labelledby="sub-headingTwo" data-bs-parent="#sub-accordionExample">
            <div class="accordion-body">
            <div class="checkbox-style1">
    <label class="custom_checkbox">Activity 1
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 2
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 3
      <input type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>
    <label class="custom_checkbox">Activity 4
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
  </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</div>
</div>
</div>


                  
                  <div class="tab-pane fade fz15 text" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                  <center>   <h3> Step 2: Choose Your Expert</h3></center>


                  <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
              <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                <span class="online"></span>
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
                <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                <span class="online"></span>
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
                <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                <span class="online"></span>
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
                <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                <span class="online"></span>
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
                    </div>
                  <div class="tab-pane fade fz15 text" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                  <center>   <h3> Step 3: Schedule Your Meeting</h3></center>


                     </div>
                     <div class="tab-pane fade fz15 text" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                   

                     <center>   <h3> Step 4: Sign Up</h3></center>

                     <div class="checkout_form">
              <h4 class="title mb30">Client Details</h4>
              <div class="checkout_coupon">
                <form class="form2" id="coupon_form" name="contact_form" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="mb25">
                        <h6 class="mb15">First Name</h6>
                        <input class="form-control" type="text" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb25">
                        <h6 class="mb15">Last Name</h6>
                        <input class="form-control" type="text" placeholder="Your Last Name">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb25">
                        <h6 class="mb15">Company Name</h6>
                        <input class="form-control" type="text" placeholder="Company Name">
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="mb25">
                        <h6 class="mb15">Address</h6>
                        <input class="form-control" type="text" placeholder="Address">
                      </div>
                    </div>


                    <div class="col-lg-3">
                      <div class="mb25">
                        <h6 class="mb15">Country / Region *</h6>
                        <div class="bootselect-multiselect">
                          <select class="selectpicker">
                            <option>Select</option>
                            <option>Turkey</option>
                            <option>United Kingdom</option>
                            <option>United State</option>
                            <option>Ukraine</option>
                            <option>Uruguay</option>
                            <option>UK</option>
                            <option>Uzbekistan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                   
                 
   
                    <div class="col-lg-3">
                      <div class="mb25">
                        <h6 class="mb15">Town / City *</h6>
                        <div class="bootselect-multiselect">
                          <select class="selectpicker">
                            <option data-tokens="California">California</option>
                            <option data-tokens="Chicago">Chicago</option>
                            <option data-tokens="LosAngeles">Los Angeles</option>
                            <option data-tokens="Manhattan">Manhattan</option>
                            <option data-tokens="NewJersey">New Jersey</option>
                            <option data-tokens="NewYork">New York</option>
                            <option data-tokens="SanDiego">San Diego</option>
                            <option data-tokens="SanFrancisco">San Francisco</option>
                            <option data-tokens="Texas">Texas</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb25">
                        <h6 class="mb15">State *</h6>
                        <input class="form-control" type="text" placeholder="Ali">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb25">
                        <h6 class="mb15">ZIP *</h6>
                        <input class="form-control" type="text" placeholder="Ali">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb25">
                        <h6 class="mb15">Phone *</h6>
                        <input class="form-control" type="text" placeholder="Ali">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb25">
                        <h6 class="mb15">Email Address</h6>
                        <input class="form-control" type="email" placeholder="Ali">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb25">
                        <h4 class="mb15" class="mb15">Additional information</h4>
                     
                        <textarea name="form_message" class="" rows="3" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>


                     </div>
                     <div class="tab-pane fade fz15 text" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                   
                                  <div class="payment_widget default-box-shadow1">
                              <h4 class="title"></h4>
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
                            <div class="d-grid default-box-shadow2">
                              <button class="ud-btn btn-thm">Submit<i class="fal fa-arrow-right-long"></i></button>
                            </div>

                     </div>
                     <div class="tab-pane fade fz15 text" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                    66 nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, 
                    vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. 
                    Aliquam eget posuere sit enim elementum nulla vulputate magna.
                     Morbi sed arcu proin quis tortor non risus.
                     </div>
                </div>
              </div>
     
            </div>
          </div>
        </div>

        </div>
    </section>
 
<!-- Our Footer --> 
<section class="footer-style1 at-home5 pt25 pb-0">
    
    <?php // include("footerarea.php"); ?>
    @include('footerarea');


    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>






<?php // include("footerlink.php"); ?>
@include('footerlink');
</body>

</html>