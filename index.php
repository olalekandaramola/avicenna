<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Avicenna Elementary School website" />
<meta name="keywords" content="Avicenna,nursery,primary,children,school,childschool,education,nigeria,ibadan,private" />
<meta name="author" content="Lightsource,Merilek" />

<!-- Page Title -->
<title>Welcome To Avicenna Elementary School</title>

<!-- Favicon and Touch Icons -->
<link href="images/favico.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-sky sm-text-center p-0">
      <div class="container">


       <?php include "./includes/header.php"; ?>

      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="../images/" alt="avicenna logo"></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-blue m-0"> +234 avicenna</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-color-red font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">We are open!</a>
                  <h5 class="font-13 text-theme-color-blue m-0"> Monday-Friday</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
    <div style="background-color:#00BCD4;" class="header-nav-wrapper navbar-scrolltofixed border-bottom-theme-color-sky-2px">
        <div class="container">
          <nav id="menuzord" class="menuzord pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="active"><a href="">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="contact">Contact Us</a>
                
              </li>
              <li><a href="academic">Academics</a>
               
              </li>
              <li><a href="admission">Admission</a>
               
              </li>
                      
              
            </ul>
            
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg1.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.05);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sft font-Lobster font-weight-700 text-theme-color-red" 
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['28']"
                  data-lineheight="['48']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="600"
                  data-splitin="none"
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">School Motto
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sft text-theme-color-blue font-Lobster font-weight-700 m-0" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-50']"
                  data-fontsize="['78']"
                  data-lineheight="['96']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><p style="font-size:50px;">Avicenna <span class="text-theme-color-red">Elementary School</span></p>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft text-black" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1200"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">Children learn better by what they see than what is taught<br>At Avicenna, we did not only teach, we show them.
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption sft" 
                  id="rs-1-layer-5"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['90','100','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1400"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-theme-color-blue btn-lg btn-flat font-weight-600 pl-30 pr-30" href="contact/">Contact Us</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg2.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.05);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sft font-Lobster font-weight-700 text-theme-color-red" 
                  id="rs-2-layer-2"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['28']"
                  data-lineheight="['48']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="600"
                  data-splitin="none"
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">School Motto
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sft text-theme-color-blue font-Lobster font-weight-700 m-0" 
                  id="rs-2-layer-3"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-50']"
                  data-fontsize="['78']"
                  data-lineheight="['96']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><p style="font-size:50px;">Avicenna <span class="text-theme-color-red">Elementary School</span></p>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft text-black-333" 
                  id="rs-2-layer-4"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1200"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">Education still remains the most powerful weapon you can give <br> to  children  to change thier world. We give such weapon.
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption sft" 
                  id="rs-2-layer-5"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['90','100','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1400"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-theme-color-blue btn-lg btn-flat font-weight-600 pl-30 pr-30" href="contact/">Contact Us</a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg4.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.05);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sft font-Lobster font-weight-700 text-theme-color-red" 
                  id="rs-3-layer-2"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['28']"
                  data-lineheight="['48']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="600"
                  data-splitin="none"
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">School Motto
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sft text-theme-color-blue font-Lobster font-weight-700 m-0" 
                  id="rs-3-layer-3"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-50']"
                  data-fontsize="['78']"
                  data-lineheight="['96']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><p style="font-size:50px;">Avicenna <span class="text-theme-color-red">Elementary School</span></p>


                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft text-black" 
                  id="rs-3-layer-4"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1200"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">We provide quality education to our students that liberate them <br> from ignorance and make them standout amidst thier peers.
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption sft" 
                  id="rs-3-layer-5"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['90','100','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-speed="500"
                  data-start="1400"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-theme-color-blue btn-lg btn-flat font-weight-600 pl-30 pr-30" href="contact/">Contact Us</a>
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style: "gyges",
                  enable: true,
                  hide_onmobile: false,
                  hide_onleave: true,
                  hide_delay: 200,
                  hide_delay_mobile: 1200,
                  tmp: '',
                  left: {
                      h_align: "left",
                      v_align: "center",
                      h_offset: 0,
                      v_offset: 0
                  },
                  right: {
                      h_align: "right",
                      v_align: "center",
                      h_offset: 0,
                      v_offset: 0
                  }
                },
                bullets: {
                  enable: true,
                  hide_onmobile: true,
                  hide_under: 800,
                  style: "hebe",
                  hide_onleave: false,
                  direction: "horizontal",
                  h_align: "center",
                  v_align: "bottom",
                  h_offset: 0,
                  v_offset: 30,
                  space: 5,
                  tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [640, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: home-box -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/about/1.jpg" alt="">
              <div class="bg-theme-color-red border-1px p-20 pt-0 mb-sm-180">
                <h3 class="text-white mt-20">Enroll Your Child</h3>
                <p class="text-white">Education still remains the best <b>legacy</b> any parent can give his/her ward.</p>
                <a href="admission" class="btn btn-sm btn-theme-color-sky">Enroll</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/about/2.jpg" alt="">
              <div class="bg-theme-color-yellow border-1px p-20 pt-0 mb-sm-180">
                <h3 class="text-white mt-20">Quality Education</h3>
                <p class="text-white">Quailty education is the <b>bedrock</b> to success and every child deserves the right to it.We provide quality education.</p>
                <!-- <a href="#" class="btn btn-sm btn-theme-color-green">Read more</a> -->
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/about/3.jpg" alt="">
              <div class="bg-theme-color-sky border-1px p-20 pt-0">
                <h3 class="text-white mt-20">Better Tomorrow</h3>
                <p class="text-white">To build a better tomorrow we must build our children.We <b>equip and prepare</b> our students for the future.</p>
                <!-- <a href="#" class="btn btn-sm btn-theme-color-red">Read more</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section:about-->

    <!-- <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Expert Teachers</h5>
                    <p class="text-gray">At Avicenna Elementary School our teachers are well trained and highly qualified teachers.</p> -->
    <section>
      <div class="container pt-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <div class="meet-doctors">
                <h2 class="mt-0 line-height-1 text-theme-color-sky"><p style="font-size:35px;">Welcome To Avicenna Elementary School</p></h2>
                <h5 class="letter-space-4 line-bottom text-theme-color-red title">School Motto</h5>
                <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus.Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus</p>
              </div>
              <div class="row mb-sm-30">
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-20">
                   <a class="icon bg-theme-color-red icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-scissors text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Our Vision</h5>
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-20">
                   <a class="icon bg-theme-color-lemon icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-pen text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10"> Mission Statement</h5>
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                   <a class="icon bg-theme-color-blue icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-phone text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Our Values</h5>
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                   </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                   <a class="icon bg-theme-color-orange icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                    <i class="pe-7s-light text-white"></i>
                   </a>
                   <div class="ml-70 ml-sm-0">
                    <h5 class="icon-box-title mt-10 letter-space-2 mb-10">Our Goal</h5>
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.</p>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <img src="images/about/a1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div> 
          <img alt="" src="images/bg/f2.png" class="img-responsive img-fullwidth">
      </div>
    </section>

     <!-- Section: team -->
    <section>
      <div class="container pt-60">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0"><span class="text-theme-color-red">Management</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
             <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p> -->
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="images/team/team6.jpg" alt=""></div>
                <div class="content border-1px p-15 bg-theme-color-red clearfix">
                  <h3 class="name mt-0 text-white">Sakib Smith</h3>
                  <p class="mb-20 text-white">Head Teachers of Avicenna Elementary School</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-color-green icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                 <!--  <a class="btn btn-theme-color-green btn-sm pull-right flip" href="page-teachers-details.html">view details</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="images/team/team7.jpg" alt=""></div>
                <div class="content border-1px p-15 bg-theme-color-yellow clearfix">
                  <h3 class="name mt-0 text-white">Ismail Jon</h3>
                  <p class="mb-20 text-white">Proprietor/Proprietress of Avicenna Elementary School</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-color-sky icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                 <!--  <a class="btn btn-theme-color-sky btn-sm pull-right flip" href="page-teachers-details.html">view details</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Activities -->
    <section  data-bg-img="images/bg/p2.jpg">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Our <span class="text-theme-color-red">Activities</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
              <p>Education is far beyond the four wall of the classroom <br> that why we engage our students in activities that improves them physically and intellectually.</p>
            </div>
          </div>
        </div>
        <div class="section-centent">
          <div class="row">
            <div class="col-md-12">
              <div class="services-tab border-3px bg-white">
                <ul class="nav nav-tabs">
                  <li class="bg-theme-color-sky"><a href="#tab11" data-toggle="tab"><i class="fa fa-music"></i><span>Music</span></a></li>
                  <li class="bg-theme-color-red"><a href="#tab12" data-toggle="tab"><i class="fa fa-graduation-cap"></i><span>Learn</span></a></li>
                  <li class="bg-theme-color-yellow"><a href="#tab13" data-toggle="tab"><i class="fa fa-paint-brush"></i><span>Painting</span></a></li>
                  <li class="bg-theme-color-green"><a href="#tab14" data-toggle="tab"><i class="fa fa-life-ring"></i><span>Sports</span></a></li>
                  <li class="bg-theme-color-orange"><a href="#tab15" data-toggle="tab"><i class="fa fa-trophy"></i><span>Playground</span></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab11">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0">
                          <h2 class="font-36 text-theme-color-sky mt-0">Music</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <div class="row mt-30 mb-20">
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Qualified Teacher</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Love & Care</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Delicious Food</li>
                            </ul>
                           </div>
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Strategi Location</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Active Learning</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-sky font-15"></i>&emsp;Transportation</li>
                            </ul>
                           </div>
                          </div>
                          <a class="btn btn-lg btn-dark btn-theme-color-sky" href="#">View Details</a>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/services/1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab12">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0">
                          <h2 class="font-36 text-theme-color-red mt-0">Learn</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <div class="row mt-30 mb-20">
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Qualified Teacher</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Love & Care</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Delicious Food</li>
                            </ul>
                           </div>
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Strategi Location</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Active Learning</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-red font-15"></i>&emsp;Transportation</li>
                            </ul>
                           </div>
                          </div>
                          <a class="btn btn-lg btn-dark btn-theme-color-red" href="#">View Details</a>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/services/2.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab13">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0">
                          <h2 class="font-36 text-theme-color-yellow mt-0">Painting</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <div class="row mt-30 mb-20">
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Qualified Teacher</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Love & Care</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Delicious Food</li>
                            </ul>
                           </div>
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Strategi Location</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Active Learning</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-yellow font-15"></i>&emsp;Transportation</li>
                            </ul>
                           </div>
                          </div>
                          <a class="btn btn-lg btn-dark btn-theme-color-yellow" href="#">View Details</a>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/services/3.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab14">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0">
                          <h2 class="font-36 text-theme-color-green mt-0">Sports</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <div class="row mt-30 mb-20">
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Qualified Teacher</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Love & Care</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Delicious Food</li>
                            </ul>
                           </div>
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Strategi Location</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Active Learning</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-green font-15"></i>&emsp;Transportation</li>
                            </ul>
                           </div>
                          </div>
                          <a class="btn btn-lg btn-dark btn-theme-color-green" href="#">View Details</a>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/services/4.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab15">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="service-content ml-20 ml-sm-0 mt-0">
                          <h2 class="font-36 text-theme-color-orange">Playground</h2>
                          <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>
                          <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                          <div class="row mt-30 mb-20">
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Qualified Teacher</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Love & Care</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Delicious Food</li>
                            </ul>
                           </div>
                           <div class="col-sm-6">
                            <ul class="mt-10">
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Strategi Location</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Active Learning</li>
                              <li class="mb-10"><i class="fa fa-heart text-theme-color-orange font-15"></i>&emsp;Transportation</li>
                            </ul>
                           </div>
                          </div>
                          <a class="btn btn-lg btn-dark btn-theme-color-orange" href="#">View Details</a>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/services/5.jpg" alt="">
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
      <div> 
          <img alt="" src="images/bg/f2.png" class="img-responsive img-fullwidth">
      </div>
    </section>

    <!-- Section: Our Gallery -->
    <section>
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Our <span class="text-theme-color-red">Gallery</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p> -->
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mb-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/1.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade red"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/1.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/4.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade yellow"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/4.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/2.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/2.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <div class="row mb-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/2.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/2.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/3.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade blue"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/3.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="images/gallery/4.jpg" class="img-fullwidth">
                </div>
                <div class="overlay-shade yellow"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="images/gallery/4.jpg"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-sky">
    
              <!-- Mailchimp Subscription Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
  <!-- end main-content -->
  </div>

  <!-- Footer -->


 <?php include "includes/footer.php"; ?>



  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>