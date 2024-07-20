<?php
require_once('config.php');
$feed ="";

 if(isset($_POST['submit'])){
 $balance = $_POST['balance'];
 $phone = $_POST['phone'];
 $stmt = "UPDATE miwalletaccounts SET balance = balance + '$balance' WHERE phone = '$phone'";
 $result = mysqli_query($conn, $stmt);

  if ($result!==TRUE){
   

 $feed = "Failed transfer";
    
  }
  else{
    
       $feed = "Transfer Successful";
  }
 }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MIWALLET - Welcome| Takulandilani</title>

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" >
       <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  
  <style>
    .card{
  box-shadow: 0 4px 8px 0
  rgba(0,0,0,0,2);
  border-radius:25px;
  box-sizing:border-box;
  }
  
  .image:hover{
  transform:scale(1.03);
}
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif
}


.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px
}

p {
    margin: 0px
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto
}

.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none
}

.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in
}

.form-control {
    color: white;
    background-color: #223C60;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle
}

.form-control:focus {
    color: white;
    background-color: #0C4160;
    border: 2px solid #2d4dda;
    box-shadow: none
}

.text {
    font-size: 14px;
    font-weight: 600
}

::placeholder {
    font-size: 14px;
    font-weight: 600
}
  </style>
  </head>
  <body style="background-color:#f8f9fb">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img style="max-height:100px;max-width:100px" src="assets/img/round.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mx-auto w-100 justify-content-right clearfix">
              <li class="nav-item">
               <a class="nav-link" href="index.html" >
                  Personal
                </a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="index.html" >
                  Business
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">
                 About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">
                  Blog
                </a>
              </li>
            </ul>
                     </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll" href="#hero-area">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              Services
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">
              Pricing
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg" style="padding:20px;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp">BANK WITH MI WALLET</h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="#" class="btn btn-common">Download App Now</a>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

  
  

    <!-- Team Section Start -->
    <section id="services" class="section-padding text-center bg-light" style="width:960px;margin:auto;">
      <span style="color: red"><?php echo $feed;?></span>
      <div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Transfer with card (Master Card/Visa/Amazon)</p>
         <form method='post' enctype="multipart/form-data">
        <div class="row gx-3">

           <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Amount ($)</p> <input class="form-control mb-3" type="number" name="balance">
                </div>
            </div>
             <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Send To</p> <input class="form-control mb-3" type="number" name="phone">
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Card Name</p> <input class="form-control mb-3" type="text" >
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Card Number</p> <input class="form-control mb-3" type="text" >
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Expiry</p> <input class="form-control mb-3" type="text" placeholder="MM/YYYY" value="11/23">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">CVV/CVC</p> <input class="form-control mb-3 pt-2 " type="password" placeholder="***" name="cvv">
                </div>
            </div>
           
              <div class="col-12">
              <button name="submit" class="btn btn-primary mb-3" type="submit" class="btn btn-blue" ><span class="ps-3">Make payment</span> <span class="fas fa-arrow-right"></span></button>
                 </div>
         
        </div>
         </form>
        
    </div>
</div>
  
    </section>
    <!-- Team Section End --> 


    <!-- End of mi qwik section -->
      <!-- Subscribe Section Start -->
    <section id="Subscribes" class="subscribes section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-5">
            <h4 class="wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
            <p class="wow fadeInUp" data-wow-delay="0.6s">Existing customized ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
            <form for="">
              <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
                <input type="Email" class="form-control" name="email" placeholder="Email Address">
                <button class="btn-submit" type="submit"><i class="lni-arrow-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscribe Section End -->  
  
    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
              <div class="footer-logo mb-3">
                <img src="assets/img/round.png" style="max-width:150px;max-height:150px" alt="">
              </div>
              <p>Financial access for evryone.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
              <h3 class="footer-titel">Company</h3>
              <ul>
                <li><a href="#">Press Releases</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Strategy</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
              <h3 class="footer-titel">About</h3>
              <ul>
                <li><a href="#">Career</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Clients</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
              <h3 class="footer-titel">Find us on</h3>
              <div class="social-icon">
                <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
              </div>
            </div>
          </div>
        </div>  
      </div>     
    </footer> 
    <!-- Footer Section End -->

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>MIWALLET © 2022 All Right Reserved</p>
          </div>
        </div>
      </div>
    </section>   

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>
    
   
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
   
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      
  </body>
</html>
