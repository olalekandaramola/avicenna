<?php include "db_config.php"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/s/kidspro/v2.1/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Oct 2020 22:20:06 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Avicinna Elementary School website" />
<meta name="keywords" content="Avicenna,nursery,primary,children,,school,childschool,education,nigeria,ibadan,private" />
<meta name="author" content="" />

<!-- Page Title -->
<title>Event details page</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="images/logo-wide.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-blue m-0"> +(012) 345 6789</h5>
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
              <li><a href="/avicenna">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="contact">Contact Us</a>
                
              </li>
              <li><a href="academic">Academics</a>
               
              </li>
              <li><a href="admission">Admission</a>
               
              </li>

              <li><a href="classes">Classes</a>
                <ul class="dropdown">
                  <li><a href="classes">Nursery - Kindergarten</a></li>
                  <li><a href="classes/primary1-2.php">Primary 1 - Primary 2</a></li>
                  <li><a href="classes/primary3-4.php">Primary 3 - Primary 4</a></li>
                  <li><a href="classes/primary5-6.php">Primary 5 - Primary 6</a></li>
                </ul>
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
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">Event Details</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/avicenna">Home</a></li>
                <!-- <li><a href="/avicenna">Pages</a></li> -->
                <li class="active">Event Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


     <?php 
                  if(isset($_GET['p_id'])){

                        $post_id = $_GET['p_id'];
                  }

                  $query = "SELECT * FROM event_avi WHERE id = $post_id";
                  $select_edit_event = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_assoc($select_edit_event )){

                            $id = $row['id'];
                            $title = $row['title'];
                            $details = $row['content'];
                            $image = $row['image'];
                            $date = $row['dates'];

                      }



           ?>                 


    <section>
      <div class="container pt-40 pb-40">
        <div class="row">
          <div class="col-md-8">
              <h2><?php echo $title; ?></h2>
            <div data-nav="true">
              <div class="item">
                <img height="500" width="100%" src="images/<?php echo $image; ?>" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-60">
          </div>
        </div>
        <div class="row mt-40">
          <div class="col-md-6">
            <h3 style="margin-top:-5%" class="text-theme-color-orange mb-20">Event Details</h3>
            <p><?php echo $details; ?></p>
          </div>
        </div>
         <h3>Date:</h3>
          <p><?php echo $date; ?></p>
        
      </div>
    </section>

    <!-- Divider: Call To Action -->
   
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include "includes/footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from html.kodesolution.live/s/kidspro/v2.1/demo/page-event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Oct 2020 22:30:16 GMT -->
</html>