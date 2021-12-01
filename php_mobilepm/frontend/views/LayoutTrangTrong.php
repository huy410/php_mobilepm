<!DOCTYPE html>
<html>
<head>
  <title>Mobile Pro Max</title>
  <meta name="viewport" content="width=device-width" charset="utf-8">
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="f-a/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: background:#fff;">
  <!-- wrappre -->
<div class="wrapper">
  <?php 
    //load file headerview.php
    include "views/HeaderView.php";
   ?>
   <?php 
    echo $this->view;
    ?>
  <!-- /content -->
  <!-- foot -->
  <div class="footer" style="padding: 10px;">
    <div class="f1">
      <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4" style="color: white;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About us</h5>
        <p style="color: grey;">Mobile PM is a shop about products in latest technology which includes smartphones, smart homes and everything else that comes under the genre.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Service</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">2 Years Warranty</a>
          </li>
          <li>
            <a href="#!">Return Policy</a>
          </li>
          <li>
            <a href="#!">Shipping Options</a>
          </li>
          <li>
            <a href="#!">PayPal Payment</a>
          </li>
          <li>
            <a href="#">Europe Warehouse</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Order info</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Currency</a>
          </li>
          <li>
            <a href="#!">Order Tracking</a>
          </li>
          <li>
            <a href="#!">Register/Login</a>
          </li>
          <li>
            <a href="#!">My Orders</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Product</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Smartphones</a>
          </li>
          <li>
            <a href="#!">Laptops</a>
          </li>
          <li>
            <a href="#!">Smart Watches</a>
          </li>
          <li>
            <a href="#!">Wireless Earbuds</a>
          </li>
          <li>
            <a href="#">Gaming</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>
</footer>
    </div>
    <div class="f2">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="f3" style="margin-top: 20px;">
      <p style="color: white;">© 2020 Mobile PM - Global Online Shop. All Rights Reserved.</p>
    </div>
  </div>
  <!-- /foot -->
</div>
<!-- wrappre -->
</body>
<style type="text/css">
  /*.footer a{color: grey;};*/
  .footer a:hover{color: white;transition: 0.5s;text-decoration: none;}
  .col-md-2 a{color: grey;}
</style>
</html>

<style type="text/css">
    input[type=range] {
    -webkit-appearance: none;
    margin: 20px 0;
    width: 100%;
}
input[type=range]:focus {
    outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 4px;
    cursor: pointer;
    animate: 0.2s;
    background: #03a9f4;
    border-radius: 25px;
}
input[type=range]::-webkit-slider-thumb {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -8px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
    background: #03a9f4;
}
.range-wrap{
    width: 80%;
    margin: auto;
    position: relative;
}
.range-value{
    position: absolute;
    top: -50%;
}
.range-value span{
    width: 55px;
    height: 24px;
    line-height: 24px;
    text-align: center;
    background: #03a9f4;
    color: #fff;
    font-size: 12px;
    display: block;
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0);
    border-radius: 6px;
}
.range-value span:before{
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-top: 10px solid #03a9f4;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    margin-top: -1px;
}
  </style>

  <script type="text/javascript">
    const
    range = document.getElementById('range'),
    rangeV = document.getElementById('rangeV'),
    setValue = ()=>{
        const
            newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
            newPosition = 10 - (newValue * 0.2);
        rangeV.innerHTML = `<span>${range.value}</span>`;
        rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
    };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
  </script>


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f71ee0b4704467e89f2ed02/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
 <!-- Custom Javascript -->
    <script src="index.js"></script>
     <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>