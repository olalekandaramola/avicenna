<?php 

if (isset($_POST['subscribe'])){
  include "../db_config.php";
  $email = $_POST['email'];
  
  
  $sql = $conn->prepare("INSERT INTO newsletter_avi(email) VALUES(?)");
  $sql->bind_param("s",$email);
  $sql->execute();
  
  if($sql){
      echo "<script>alert('Thanks for subscribing to our newsletter.')</script>";
  }else{
      echo "<script>alert('There was an error, please try again.')</script>";
  }
  
  }

?>
<footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="/avicenna/images/bg/bg8.jpg">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="avicenna logo" src="/avicenna/images/">
            <p>XX, Road X, XY Street, Ibadan, Oyo State.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="#">+234 avicenna</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-lemon mr-5"></i> <a class="text-gray" href="#">info@avicenna.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-orange mr-5"></i> <a class="text-gray" href="#">www.avicenna.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
              <li><a href="/avicenna/">Home</a></li>
              <li><a href="/avicenna/about">About</a></li>
              <li><a href="/avicenna/contact">Contact Us</a></li>
              <li><a href="/avicenna/academic">Academics</a></li>
              <li><a href="/avicenna/admission">Admission</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
   
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Thur :  </span>
                  <div class="value pull-right"> 8.00 am - 2.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri :</span>
                  <div class="value pull-right"> 8.00 am - 1.00 pm </div>
                </li>
                <li class="clearfix"> <span> Lesson : </span>
                  <div class="value pull-right"> 2.00 pm - 4.00 pm </div>
                </li>
                <li class="clearfix"> <span>Sat & Sun  : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +234 avicenna <br>
              +234 avicenna
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe to our newsletter</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" method="post" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="email" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                <span class="input-group-btn">
                  <button data-height="45px"name="subscribe" class="btn bg-theme-color-sky text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 Avicenna Elementary School. All Rights Reserved | Designed by <a target="blank" href="https://www.lightsource.prissolutions.com.ng/">Lightsource</a> & <a href="">Merilek</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>