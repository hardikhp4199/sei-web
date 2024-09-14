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
                
               
                <a class="ud-btn btn-thm2 add-joining" href="{{ url('client/register') }}">Sign Up</a>
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

  <section class="our-login">
      <div class="container">
        <div class="row align-items-center">
        
          <div class="col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="error_page_content text-center text-xl-start">
          
              <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">

              <div class="main-title">
              <h2 class="title">Sign In</h2>
            
            </div>

              <div class="mb30">
                <h4>We're glad to see you again!</h4>
                <p class="text">Don't have an account? <a href="{{ route('client.register') }}" class="text-thm">Sign Up!</a></p>
              </div>
              <form action="{{ route('client.cli_login') }}" method="POST">
    @csrf

    @if ($errors->has('password'))
        <div class="alert alert-danger">
            {{ $errors->first('password') }}
        </div>
    @endif
    <div class="mb20">
        <label class="form-label fw600 dark-color">Email Address<span class="text-danger">*</span></label>
        <input type="email" name="email" class="form-control" placeholder="abc@abc.com" required>
    </div>
    <div class="mb15">
        <label class="form-label fw600 dark-color">Password<span class="text-danger">*</span></label>
        <input type="password" name="password" class="form-control" placeholder="***" required>
    </div>
    <div class="d-grid mb20">
        <button class="ud-btn btn-thm" type="submit">Log In <i class="fal fa-arrow-right-long"></i></button>
    </div>
</form>

      
            </div>
           </div>
          </div>

          <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
            <div class="animate_content text-center text-xl-start">
              <div class="animate_thumb">
                <img class="w-100" src="images/icon/error-page-img.svg" alt="error-page-img">
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