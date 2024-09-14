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
    @include('menu');
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
    <!-- Home Banner Style V1 -->
    <section class="hero-home5 pb-0 pt90">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6">
            <div class="pr30 pr0-lg mb30-md position-relative">
              <h1 class="animate-up-1 mb25 text-thm2">More than 10K expert <br class="d-none d-xl-block">clients are waiting for you</h1>
              <div class=" at-home6 p10 position-relative zi2 animate-up-3 mr30 mr0-lg">
                <div class="row">
              
                <div class="d-sm-flex justify-content-left banner-btn">
                          <a href="{{ route('client.register') }}" class="ud-btn btn-thm2 mb25 me-4">Become Client</a>
                          <a href="{{ route('expert.index') }}" class="ud-btn btn-thm mb25">Join Our Network</a>
                        </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-sm-between mt30 animate-up-4">
                <div class="funfact_one at-home5-hero me-2 me-sm-0">
                  <div class="details">
                    <ul class="ps-0 mb-0 d-flex">
                      <li><div class="timer">834</div></li>
                      <li><span>M</span></li>
                    </ul>
                    <p class="text mb-0">Total Freelancer</p>
                  </div>
                </div>
                <div class="funfact_one at-home5-hero me-2 me-sm-0">
                  <div class="details">
                    <ul class="ps-0 mb-0 d-flex">
                      <li><div class="timer">732</div></li>
                      <li><span>M</span></li>
                    </ul>
                    <p class="text mb-0">Positive Review</p>
                  </div>
                </div>
                <div class="funfact_one at-home5-hero me-2 me-sm-0">
                  <div class="details">
                    <ul class="ps-0 mb-0 d-flex">
                      <li><div class="timer">90</div></li>
                      <li><span>M</span></li>
                    </ul>
                    <p class="text mb-0">Order recieved</p>
                  </div>
                </div>
                <div class="funfact_one at-home5-hero">
                  <div class="details">
                    <ul class="ps-0 mb-0 d-flex">
                      <li><div class="timer">236</div></li>
                      <li><span>M</span></li>
                    </ul>
                    <p class="text mb-0">Projects Completed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <div class="home5-hero-content position-relative text-center">
              <div class="iconbox-small1 d-none d-xl-block wow fadeInRight default-box-shadow4 bounce-x animate-up-1">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6 class="mb-1">4.9/5</h6>
                  <p class="text fz13 mb-0">Clients rate professionals</p>
                </div>
              </div>
              <div class="iconbox-small2 d-none d-xl-block wow fadeInLeft default-box-shadow4 bounce-y animate-up-2">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6 class="mb-1">+12M</h6>
                  <p class="text fz13 mb-0">Project Completed</p>
                </div>
              </div>
              
              <img src="{{ asset('client/images/about/happy-client.png') }}" alt="" class="bounce-y img-1 default-box-shadow4">
              <img src="{{ asset('client/images/about/home5-hero-element-1.png') }}" alt="" class="animate-up-1">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners bgc-thm2 pt70 pb40 cta-home5-style ml30 ml0-lg">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="main-title text-center">
              <h6 class="text-white">Trusted by the world’s best</h6>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/7.png') }}" alt="7.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/8.png') }}" alt="8.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/9.png') }}" alt="9.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/10.png') }}" alt="10.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/11.png') }}" alt="11.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30"><img class="wa m-auto" src="{{ asset('client/images/partners/12.png') }}" alt="12.png"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Talent by category -->
    <section class="pb40-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Browse service by category</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="#">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="category-slider-home10 navi_pagi_bottom_center slider-7-grid owl-carousel owl-theme wow fadeInUp">
              <div class="item">
                <div class="iconbox-style1 bdr1 default-box-shadow1">
                  <div class="icon"><span class="flaticon-developer"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Development & IT</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-web-design-1"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Design & Creative</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Digital Marketing</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-translator"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Writing & Translation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-microphone"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Music & Audio</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-video-file"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Video & Animation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-ruler"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Engineering & Architecture</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 mb60">
                  <div class="icon"><span class="flaticon-goal"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Finance & Accounting</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Need something --> 
    <section class="our-features pt-0 pb90 pb30-md">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title">
              <h2>Need something done?</h2>
              <p class="text">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 at-home5 p-0">
              <div class="icon before-none"><span class="flaticon-cv"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Post a job</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 at-home5 p-0">
              <div class="icon before-none"><span class="flaticon-web-design"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Choose experts</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 at-home5 p-0">
              <div class="icon before-none"><span class="flaticon-secure"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Pay safely</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 at-home5 p-0">
              <div class="icon before-none"><span class="flaticon-customer-service"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">We’re here to help</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trending Services -->
    <section class="pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 wow fadeInUp">
            <div class="main-title">
              <h2 class="title">Trending Services</h2>
              <!-- <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p> -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-3">
              <a class="ud-btn2" href="#">All Services<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="category-slider-home10 navi_pagi_bottom_center slider-4-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-1.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <!-- <i class="fas fa-star fz10 review-color me-2"></i> -->
                      <!-- <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p> -->
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="{{ asset('client/images/team/fl-s-1.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-2.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                    <div class="review-meta d-flex align-items-center">
                    
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="{{ asset('client/images/team/fl-s-2.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Ali Tufan</span>
                      </a>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-3.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>   <div class="review-meta d-flex align-items-center">
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{ asset('client/images/team/fl-s-3.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-4.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                    <div class="review-meta d-flex align-items-center">
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{ asset('client/images/team/fl-s-4.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-5.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                     <div class="review-meta d-flex align-items-center">
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{ asset('client/images/team/fl-s-1.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-6.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                    <div class="review-meta d-flex align-items-center">
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{ asset('client/images/team/fl-s-2.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1 style4 default-box-shadow1 mb60">
                  <div class="list-thumb">
                    <img class="w-100" src="{{ asset('client/images/listings/g-7.jpg') }}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title"><a href="#">Want to create design modern websites in figma or adobe xd?</a></h5>
                    <div class="review-meta d-flex align-items-center">
                     
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{ asset('client/images/team/fl-s-3.png') }}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Funfact -->
    <section class="hover-bgc-color pb90 pb30-md overflow-hidden  cta-home5-style ml30 ml0-lg">
      <img class="left-top-img wow zoomIn d-none d-lg-block" src="{{ asset('client/images/vector-img/left-top.png') }}" alt="">
      <img class="right-bottom-img wow zoomIn d-none d-lg-block" src="{{ asset('client/images/vector-img/right-bottom.png') }}" alt="">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay="100ms">
            <div class="cta-style6 mb30-sm">
              <h2 class="cta-title mb25">Find the talent needed to <br class="d-none d-lg-block">get your business growing.</h2>
              <p class="text-thm2 fz15 mb25">sample text is here !sample text is here !sample text is here !sample text is here !<br class="d-none d-md-block">sample text is here !sample text is here !</p>
              <a href="#" class="ud-btn btn-thm2">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-xl-6 offset-xl-2 wow fadeInLeft" data-wow-delay="300ms">
            <div class="row align-items-center position-relative">
              <div class="home9-floating-img position-absolute"><img class="w-100-lg" src="{{ asset('client/images/about/element-6.png') }}" alt=""></div>
              <div class="col-sm-6">
                <div class="funfact-style1 at-home5 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">4</div></li>
                    <li><span>.9/5</span></li>
                  </ul>
                  <p class="fz15 dark-color">Clients rate <br>professionals on SEI Group</p>
                </div>
                <div class="funfact-style1 at-home5 bdrs16 text-center ms-md-auto">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="timer title mb15">96</div></li>
                    <li><span>%</span></li>
                  </ul>
                  <p class="fz15 dark-color">95% of clients are satisfied through to see their <br>Expert Service Providers</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="funfact-style1 at-home5 bdrs16 text-center">
                  <ul class="ps-0 mb-0 d-flex justify-content-center">
                    <li><div class="title mb15">Award</div></li>
                  </ul>
                  <p class="fz15 dark-color">Best <br>Service Awards</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Funfact -->
    <section class="">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6">
            <img class="w-100 mb30-md" src="{{ asset('client/images/about/about-7.png') }}" alt="">
          </div>
          <div class="col-lg-5">
            <div class="mb30">
              <div class="main-title">
                <h2 class="title">A whole world of experts <br class="d-none d-xl-block"> talent at your fingertips</h2>
              </div>
            </div>
            <div class="why-chose-list at-home5">
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                <div class="list-content flex-grow-1 ml30">
                  <h4 class="mb-1">Proof of quality</h4>
                  <p class="text mb-0 fz15">Check any pro’s work samples, client reviews, and identity <br class="d-none d-lg-block"> verification.</p>
                </div>
              </div>
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-money"></span>
                <div class="list-content flex-grow-1 ml30">
                  <h4 class="mb-1">No cost until you confirm</h4>
                  <p class="text mb-0 fz15">Interview potential fits for your job, negotiate rates, and only pay <br class="d-none d-lg-block"> for work you approve.</p>
                </div>
              </div>
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-security"></span>
                <div class="list-content flex-grow-1 ml30">
                  <h4 class="mb-1">Safe and secure</h4>
                  <p class="text mb-0 fz15">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="bgc-thm3 pb90 pb30-md">
      <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="main-title text-center">
              <h2 class="title">SEI Achievements</h2>
              <!-- <p class="paragraph mt10">Lorem ipsum dolor sit amet, consectetur.</p> -->
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6 col-md-3">
            <div class="funfact_one at-home5 mb30 text-center">
              <div class="icon mb10"><span class="flaticon-working"></span></div>
              <div class="details">
                <ul class="ps-0 mb-2 d-flex justify-content-center">
                  <li><div class="timer">834</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Total Experts</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one at-home5 mb30 text-center">
              <div class="icon mb10"><span class="flaticon-star-2"></span></div>
              <div class="details">
                <ul class="ps-0 mb-2 d-flex justify-content-center">
                  <li><div class="timer">732</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Positive Review</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one at-home5 mb30 text-center">
              <div class="icon mb10"><span class="flaticon-file"></span></div>
              <div class="details">
                <ul class="ps-0 mb-2 d-flex justify-content-center">
                  <li><div class="timer">90</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Successful project</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one at-home5 mb30 text-center">
              <div class="icon mb10"><span class="flaticon-rocket-1"></span></div>
              <div class="details">
                <ul class="ps-0 mb-2 d-flex justify-content-center">
                  <li><div class="timer">236</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Projects Completed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Our Testimonials -->
    <section class="our-testimonial">
      <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="main-title text-center">
              <h2 class="title">What our Client have to say</h2>
              <p class="paragraph mt10">Discover your perfect  in our courses.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10 mx-auto">
            <div class="home2_testimonial_tabs position-relative">
              <div class="tab-content" id="pills-tabContent2">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"sample text is here...! sample text is here...!sample text is here...!sample text is here...!sample text is here...!sample text is here...!
                      sample text is here...!sample text is here...!sample text is here...!sample text is here...!"</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"sample text is here...! sample text is here...! sample text is here...! sample text is here...! "</h4>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="testimonial-style2 at-about2 text-center">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">"sample text is here...! sample text is here...! sample text is here...! sample text is here...! sample text is here...!"</h4>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav justify-content-center" id="pills-tab2" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{ asset('client/images/testimonials/1.jpg') }}" alt="1.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">ABC<br><small>CEO</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{ asset('client/images/testimonials/2.jpg') }}" alt="2.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">Mr. PQR<br><small>Manager</small></h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <div class="thumb d-flex align-items-center">
                      <img class="rounded-circle" src="{{ asset('client/images/testimonials/3.jpg') }}" alt="3.jpg">
                      <h6 class="title ml30 ml15-xl mb-0">XYZ<br><small>Experts</small></h6>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


     <!-- Inspiring work -->
     <section class="pb90 pb20-md pt-0" style="margin-top:30px;">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
          <div class="col-md-6">
            <div class="find-work bgc-light-yellow pb50 pt60 px20 bdrs24 text-center mb30">
              <img class="mb30" src="{{ asset('client/images/about/home20-vector-1.png') }}" alt="">
              <h2 class="title mb30">Find great Expert</h2>
              <p class="text mb30">Work with the largest network of independent professionals and <br class="d-none d-lg-block"> get things done—from quick turnaround.</p>
              <a class="ud-btn btn-dark bdrs60" href="#">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="find-work bgc-thm4 pb50 pt60 px20 bdrs24 text-center mb30">
              <img class="mb30" src="{{ asset('client/images/about/home20-vector-2.png') }}" alt="">
              <h2 class="title mb30">Join Our Network</h2>
              <p class="text mb30">Work with the largest network of independent professionals and <br class="d-none d-lg-block"> get things done—from quick turnaround.</p>
              <a class="ud-btn btn-dark bdrs60" href="#">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Our CTA --> 
  

    <!-- Our Blog -->
    <section class="pb90 pb30-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title">
              <h2 class="title">Our Blog</h2>
             
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="#">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1 bdr1 at-home5 overflow-hidden">
              <div class="blog-img"><img class="w-100" src="{{ asset('client/images/blog/blog-1.jpg') }}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">JUNE 2, 2024</a>
                <h4 class="title mt-1"><a href="#">Start an online business and work from home</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1 bdr1 at-home5 overflow-hidden">
              <div class="blog-img"><img class="w-100" src="{{ asset('client/images/blog/blog-2.jpg') }}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">JUNE 2, 2024</a>
                <h4 class="title mt-1"><a href="#">Front becomes an official Instagram Marketing Partner</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1 bdr1 at-home5 overflow-hidden">
              <div class="blog-img"><img class="w-100" src="{{ asset('client/images/blog/blog-3.jpg') }}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">JUNE 2, 2024</a>
                <h4 class="title mt-1"><a href="#">Engendering a culture of professional development</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1 bdr1 at-home5 overflow-hidden">
              <div class="blog-img"><img class="w-100" src="{{ asset('client/images/blog/blog-4.jpg') }}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">JUNE 2, 2024</a>
                <h4 class="title mt-1"><a href="#">Increasing engagement with Instagram</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
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