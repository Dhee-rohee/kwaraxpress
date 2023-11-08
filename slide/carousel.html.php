<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
     .nav-item{
    margin-left: 120px;
    color: white; 
  }
  .nav-link{
     color: white;
  }
  .contact{
    margin-right:50px;
    float: right;
    margin-right: 50px; 
  }
  .logo-text{
    margin-left: 80px;
    color: black;
  }
  .logo-text1{
    color:brown;
  }
  @media only screen and (max-width: 600px) {
    .top-nav{
      display: none;
    }
  }
  @media only screen and (max-width: 600px) {
    .best{
      height: 1150px;
      background-color: rgb(230, 225, 225);
    }
  }
  @media only screen and (max-width: 600px) {
    .footer-text{
      text-align: center;
    }
}
@media only screen and (max-width: 600px) {
    .payment{background-color: white;
      height: 300px; width: 300px;
    }
  }
  @media only screen and (max-width: 600px) {
    .verify{
      height: 300px; width: 300px;
    }
  }
  @media only screen and (max-width: 600px) {
    .ticket{
      height: 400px;
    }
    }
  .dropdown-menu{
    background-color: rgba(128, 128, 128, 0.726);
  }
  /* #sliderDiv{ */
    /* background-image: linear-gradient(to bottom, rgba(245,246,252,0.52),rgba(117,19,93,0.73)), url('pictures/tr1.jpg'); */
    /* background-image: url('pictures/bigg.jpg'); */
    /* margin:auto;
    padding: 20px;
    width: 100%; */
    /* height: 680px; */
    /* object-fit: cover; */
    /* background-repeat: no-repeat; */
    /* background-size: cover; */
}
.footer {
  height:100px;
  background-color:  black;
  color: white;
  overflow: hidden  !important;
}
.best-section{
  background-color: white;
  /* padding: 20px; */
  height: 250px;
  border-radius: 20px;
}
.demo{padding: 50px;
  height: 300px;
}
.foot{
  /* padding: 200px; */
}
.btn-large{
  margin-top: 20px;
}
.ticket{
  background-color: rgba(128, 128, 128, 0.726);
  height: 300px;
  margin-top: 170px;
}
.tic-form{
  padding: 20px;
}
.sec-form{
  margin-top: 20px;
}
.lbl{
  color: white;
}
.book-btn{
  margin-top: 40px;
}
.text1{
  color: orange;
}
.nav-ink{
     color: black;
     padding: 5px;
  }

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<div class="top-nav">
      <h1 class="logo-text">KwaraXpress &nbsp;&nbsp;
        <span style="color:brown;">Transport</span>
        <span class="contact" >Contact Us <small class="text text-danger">+234 816 345 7622</small></span>
      </h1>
  </div>
  <section style="background-color: #79bff8;">
  
      <div class="col-12" id="sliderDiv">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">KwaraXpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Index.html" style="color: white;">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Gallery.html" style="color: white;">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color: white;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="companyprofile.html">Company Profile</a></li>
                    <li><a class="dropdown-item" href="staffdetails.html">Staff Details</a></li>
                    <li><a class="dropdown-item" href="Terminals.html">Terminals</a></li>
                    <li><a class="dropdown-item" href="products$services.html">Product & Services</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" style="color: white;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Customer Tools
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Credit Aplllications</a></li>
                    <li><a class="dropdown-item" href="#">Customer Log In</a></li>
                    <li><a class="dropdown-item" href="#">Online Claim Form</a></li>
                    <li><a class="dropdown-item" href="#">Terms & Conditions</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/2.jfif" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
/*var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}*/
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 