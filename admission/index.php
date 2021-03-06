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
<title>Avicenna Elementary School</title>

<!-- Favicon and Touch Icons -->
<link href="../images/favico.png" rel="shortcut icon" type="image/png">
<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>

</head>
<body class="">
  <?php
  include "../db_config.php";
  session_start();
    if(isset($_POST['obtain'])){
      
      $paye_email = $_POST['paye-email'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $status = 'NOT PAID';
      $_SESSION['paye-email'] = $paye_email;

      $sql = $conn->prepare("INSERT INTO admission_avi(`name`,`phone`,`email`,`payment_status`) VALUES(?,?,?,?)");
      $sql->bind_param("ssss",$name,$phone,$paye_email,$status);
      $sql->execute();
      $sql->close();
      if($sql){
        echo "<script>location.href='../includes/pay.php'</script>";
      }
    }
  ?>
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
        <?php include "../includes/header.php"; ?>
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
                  <h5 class="font-13 text-theme-color-blue m-0"> Mon-Thurs 8:00-14:00,Fri 8:00-13:00</h5>
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
              <li><a href="">Home</a>
              </li>
              <li><a href="../about">About</a>                
              </li>
              <li><a href="../contact">Contact Us</a>               
              </li>
              <li><a href="../academic">Academics</a>
               
              </li>        
              <li  class="active"><a href="">Admission</a>                
              </li>
            </ul>


            <ul class="pull-right flip hidden-sm hidden-xs">
             
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
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="../images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Admission Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/avicenna/">Home</a></li>
                <li class="active text-gray-silver">Admission</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="../images/services/lg1.jpg" alt="">
              <h2 class="text-theme-color-red line-bottom">Our Admission Processes</h2>
              
              <h4>The first step you have to take in enrolling your student in Avicenna Elementary School is to obtain the admission form
              The admission form costs<span class="text-theme-color-red"> # 5,000.</span></h4>
              

              <?php if (isset($_SESSION['paye-email'])){   ?>
     
              <h4>Having paid, you may click <a href="../form.pdf" download><span class="text-theme-color-red">here</span></a> to download the admission form.</h4>

                
            <?php } else {?>
           
              <h4>You may pay <a href="pay.php"><span class="text-theme-color-red">here</span></a> and obtain the form    
              immediately.</h4>

            <?php }?>

              <p>You will automaticall have the opportunity to download and fill the admission form once the required payment is made.<br>
              You can then proceed by taking the filled form with the printed receipt which was sent to your email address on payment to the management in the school.<br>
              Your ward will be considered for admission, tested if required. Due and timely information will reach you on submission of admission form.
              </p>

            <?php if (isset($_SESSION['paye-email'])){   ?>
              <a class="btn btn-dark btn-theme-color-sky btn-sm text-uppercase mt-10" download href="../form.pdf">Download Form</a>
              
            <?php } else {?>

              <!-- <a class="btn btn-dark btn-theme-color-sky btn-sm text-uppercase mt-10" href="../pay.php">Obtain Form now</a> -->

              <h3 class="widget-title line-bottom">Pay here to obtain <span class="text-theme-color-red">Form</span></h3>
                <form id="quick_contact_form_sidebar" class="quick-contact-form" method="post">
                  <div class="form-group">
                    <input name="name" class="form-control" type="text" required="" placeholder="Your Name">
                  </div>

                  <div class="form-group">
                    <input name="paye-email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <input name="phone" class="form-control" type="text" required="" placeholder="Mobile Number">
                  </div>

                  

                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" name="obtain" class="btn btn-theme-color-sky btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Pay</button>
                  </div>
                </form>

              <?php
                }
              ?>
              <h3 class="line-bottom mt-20 mb-20 text-theme-color-red">Tuition</h3>
              <table class="table table-bordered"> 
                <tr>
                  <td class="text-center font-16 font-weight-600 bg-theme-color-blue text-white" colspan="4">Tuition Information</td>
                </tr>
                <tbody> 
                <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Day Care</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr> 
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>KG 1</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr> 
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>KG 2</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr> 
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Nursery 1</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Nursery 2</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr> 
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 1</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>  
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 2</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr> 
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 3</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 4</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 5</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>
                  <tr> <td class="bg-theme-color-sky text-white"><i class="fa fa-credit-card-alt text-theme-color-red pr-20"></i>Primary 6</td> <td class="bg-theme-color-red text-white"># 25000.00</td> </tr>  
                </tbody> 
              </table>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h3 class="widget-title line-bottom">Available <span class="text-theme-color-red">Classes</span></h3>
                <div class="services-list">
                  <ul class="list list-border">
                    <li><a >Day Care</a></li>
                    <li><a >Kindergarten</a></li>
                    <li><a >Nursery</a></li>
                    <li><a >Primary 1-5</a></li>
                    <li><a >Primary 6</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h3 class="widget-title line-bottom">Extracurricular <span class="text-theme-color-red">Activities</span></h3>
                <div class="latest-posts">
                <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb"><img src="../images/activities/soccer.png" alt="Children Playing Soccer"></a>
                    <div class="post-right">
                      <h4 class="post-title mt-0"><a >Soccer</a></h4>
                      <p> We organize soccer competitions amidst pupils.
                      </p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb"><img src="../images/activities/racing2.jpg" alt="Children Running"></a>
                    <div class="post-right">
                      <h4 class="post-title mt-0"><a>Racing</a></h4>
                      <p>Awesome metered and relay racing.</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb"><img src="../images/activities/cartoon.jpg" alt="Cartoon"></a>
                    <div class="post-right">
                      <h4 class="post-title mt-0"><a>Animation Display</a></h4>
                      <p>Cartoon display sessions for younger pupils.</p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="widget">
                <h3 class="widget-title line-bottom">Quick <span class="text-theme-color-red">Contact</span></h3>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="http://html.kodesolution.live/s/kidspro/v2.1/demo/includes/quickcontact.php" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-theme-color-sky btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

              </div>
              <div class="widget">
                <img alt="" src="../images/about/a1.png" class="img-responsive img-fullwidth">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div> 
          <img alt="" src="../images/bg/f2.png" class="img-responsive img-fullwidth">
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include "../includes/footer.php";?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="../js/custom.js"></script>

</body>
</html>