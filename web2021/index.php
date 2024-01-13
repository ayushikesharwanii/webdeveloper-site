<?php
  $showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){

 include 'dbcon.php';
 $username=$_POST["username"];
 $email=$_POST["email"];
 $mobile=$_POST["mobile"];
 $msg=$_POST["msg"];

 $sql="INSERT INTO `contact` ( `username`, `email`, `mobile`, `msg`, `cdate`) VALUES ('$username', '$email', '$mobile', '$msg', CURRENT_TIMESTAMP)";
 $result=mysqli_query($con,$sql);
 if($result)
         {
            $showAlert=true;
          }
}
?>
<html>
<head>
<title></title>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php include 'css/style.php';?>

  <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong>Success!</strong>  Thankyou for Contact
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div> ';
    }
  ?>



<div class="header" id="topheader">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
<div class="container text-uppercase p-2">
  <a class="navbar-brand font-weight-bold text-white" href="index.php"><span id='web'>W</span>eb Developer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#servicediv">service</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#pricingdiv">Price</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#newsletterid">about</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<section class="header-section">
<div class="center-div">
<h1 class="font-weight-bold">We are The Web Developers</h1>
<p>We create the world best website.</p>
<div class="header-buttons">
<a href="#newsletterid">AboutUs</a>
<a href="#contactid">contact</a>
</div>
</div>
</section>
</div>

<!-- ************************************header parts end************************************************-->
 <!--*******************three extra header div starts*****************************-->
<section>
<div class="container">
<div class="row">
<div class="extra-div col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-desktop" aria-hidden="true"></i></a>
<h2>EASY TO USE</h2>
<p> Make it easy for users to sign in to your apps and websites using With privacy and security features built-in.</p>
</div>
<div class="extra-div col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-trophy" aria-hidden="true"></i></a>
<h2>AWESOME DESIGN</h2>
<p>We are create awesome design and responsive websites. Clean, minimalistic design is ideal for your interior design studio.</p>
</div>
<div class="extra-div col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-magic" aria-hidden="true"></i></a>
<h2>EASY TO CUSTOMIZE</h2>
<p>GigaPromo is the website to compare Create A Custom Website. 
Cheap Prices.Always Sale·Large Selection·Compare Simply
Services</p>
</div>
</div>
</div>
</section>
 <!--*******************three extra header div ends*****************************--> 
 
 <!--*******************offer div starts*****************************--> 
 
 <section class="serviceoffer" id="servicediv">
 <div class="container headings text-center">
 <h1 class="text-center font-weight-bold">WHAT DO WE OFFER</h1>
 <p class="text-center">We are provide always best services.</p>
 </div>
 <div class="container">
 <div class="row">
 <div class="col-lg-6 col-12 offset-1 offset-lg-0">
<div class="names my-3">
<h1>HTML</h1>
<div class="progress w-75">
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">100%</div>
 </div>
 </div>
 <div class="names my-3">
<h1>CSS</h1>
<div class="progress w-75">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:85%">85%</div>
 </div>
 </div>
 <div class="names my-3">
<h1>JAVASCRIPT</h1>
<div class="progress w-75">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:60%">60%</div>
 </div>
 </div>
 <div class="names my-3">
<h1>REACTJS</h1>
<div class="progress w-75">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:75%">75%</div>
 </div>
 </div>
 <div class="names my-3">
<h1>NODEJS</h1>
<div class="progress w-75">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:80%">80%</div>
 </div>
 </div>
 </div>
 <div class="col-lg-6 col-md-12 col-12 servicediv">
<div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10">
<h2>Web Development</h2>
<p>Front-end web developers are responsible for how a website looks. They create the site's layout and integrate graphics, applicationsand other content. </p>
</div>
 </div>
 <div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-wifi" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10">
<h2>Digital Marketing</h2>
<p>Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones.</p>
</div>
 </div>
 <div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-phone" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10">
<h2>suport 24/7</h2>
<p>In an IT context, 24/7 support means a support service that is provided 24 hours a day and 7 days a week.</p>
</div>
 </div>
 
 </div>
 </div>
 </div>
 </section>
 <!--*******************offer div ends*******************************************************************--> 
 <!--*******************project done start*************************************************************-->

 <section class="project-work">
 <div class="container headings text-center">
 <p class="text-center font-weight-bold">MORE THAN 2,000 WEBSITES CREATED</p>
 </div>
 <div class="container d-flex justify-content-around align-items-center">
 <div>
 <h1 class="count">1500</h1>
 <p>CMS Installation</p>
 </div>
 <div>
 <h1 class="count">2500</h1>
 <p>Award Won</p>
 </div>
 <div>
 <h1 class="count">700</h1>
 <p>Happy clients</p>
 </div>
 <div>
 <h1 class="count">500</h1>
 <p>Working On</p>
 </div>
 </div>
</section>
 
 <!--*******************project done ends*****************************************************************-->
 
<!--******************************our pricing strat******************************************************--> 
<section class="pricing" id="pricingdiv">
<div class="container headings text-center">
<h1 class="text-center font-weight-bold text-white">OUR BEST PRICING </h1>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-12">
<div class="card text-center">
<div class="card-header">BASIC</div>
<div class="card-body">
<li>$<span class="money">20</span>/website<li>
<li>Responsive website<li>
<li>Domain Name Free</li>
<li>Mobile friendly</li>
<li>webmail support</li>
<li>Customer Support 24/7</li>
</div>
<div class="card-footer"><a href="#">Purchase</a></div>
</div>
</div>

<div class="col-lg-4 col-12 card-second">
<div class="card text-center">
<div class="card-header">STANDARD</div>
<div class="card-body">
<li>$<span class="money">40</span>/website<li>
<li>Responsive website<li>
<li>Domain Name Free</li>
<li>Mobile friendly</li>
<li>webmail support</li>
<li>Customer Support 24/7</li>
</div>
<div class="card-footer"><a href="#">Purchase</a></div>
</div>
</div>
<div class="col-lg-4 col-12">
<div class="card text-center">
<div class="card-header">UNILIMATED</div>
<div class="card-body">
<li>$<span class="money">80</span>/website<li>
<li>Responsive website<li>
<li>Domain Name Free</li>
<li>Mobile friendly</li>
<li>webmail support</li>
<li>Customer Support 24/7</li>
</div>
<div class="card-footer"><a href="#">Purchase</a></div>
</div>
</div>
</div>
</div>
</section>

<!--*******************our pricing ends*****************************************************************-->  
<!--**********************feedback start**************************************************************--> 

<section class="happyclinets">
<div class="container headings text-center">
<h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS </h1>
<p class="text-capitalize pt-1">Our Satisfied Customer Says</p>
</div>
 
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  
  <div class="carousel-inner container">
    <div class="carousel-item active">
	
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n101.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">I enjoyed this site. It was very easy to use and functional. The buttons are easy to find.</p>
 <h1>Jason Donoghue</h1>
 <h2>Web Developer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n7.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">I like it better than the old set up. It makes it a lot easier to get on and make your way around the site.”</p>
 <h1>Mariana Noe</h1>
 <h2>software engineer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n5.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">I think this is great!!! I am glad to know I can visit this website anytime for new suggestions and ideas.”</p>
 <h1>Jenifer Burns</h1>
 <h2>Web Developer</h2>
</div>
</div>
</div>
	
    </div>
    <div class="carousel-item">
      <div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n56.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">“I think this website is set up very well. It was very easy to find my way aroound and very user friendly.”</p>
 <h1>Abraham Smith</h1>
 <h2>software engineer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n39.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">"I really appreciate your work on our website. You are great!" "You are very thorough. we need on our site - even things that we don't think to do!"
</p>
 <h1>Daniel Doe</h1>
 <h2>Web Developer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n51.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">“I love this new design, its easier and faster. And having an account where you can go back to what you read is nice to have.</p>
 <h1>MACK JOE</h1>
 <h2>Web Developer</h2>
</div>
</div>
</div>
    </div>
    <div class="carousel-item">
     <div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n39.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">“I think the website is great, looks wonderful and very easy to follow. Love having a person talking right there.”</p>
 <h1>CRUZ DEO</h1>
 <h2>Web Developer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n101.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">It is really easy, and nice to navigate. I loved the lady talking to you at the beginning.”</p>
 <h1>ROCHY JAE</h1>
 <h2>Web Developer</h2>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="images/n7.jpg" class="img-fluidi img-thumbnail"></a>
<p class="m-4">Very convenient, even if someone is not very computer literate.”</p>
 <h1>ROJO POY</h1>
 <h2>software engineer</h2>
</div>
</div>
</div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
 
 </section>
<!--******************* feedback ends*****************************************************************-->  


<!--******************* contact us start*************************************************************--> 

<section class="contactus" id="contactid">
<div class="container headings text-center">
<h1 class="text-center font-weight-bold">CONTACT US </h1>
<p class="text-capitalize pt-1">We are here to help and answer any question you might Have. WE look to Hearing from you<b style="font-size:30px;"> ☻</b></p>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

<form action="/web2020/index.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" id="username" name="username" required autocomplete="off" placeholder="Enter your name">
  </div>
 

  <div class="form-group">
    <input type="email" class="form-control" id="email"  name="email" required autocomplete="off" placeholder="Enter email">
  </div>

  
  <div class="form-group">
    <input type="number" class="form-control"  id="mobile" name="mobile" required autocomplete="off" placeholder="Enter mobile no.">
  </div>
  
  <div class="form-group">
  <textarea class="form-control" rows="4" id="comment" name="msg" placeholder="Enter your message"></textarea>
</div>
  <div class="d-flex justify-content-center form-button">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

 </div>
</div>
</div>
</section>
 
<!--******************* contact us ends*****************************************************************-->  
<!--***********************************newsletter start*************************************************--> 

<section class="newsletter" id="newsletterid">
<div class="container headings text-center">
<h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWSLETTER </h1>
</div>
 <div class="container">
 <div class="row">
 <div class="col-lg-8 offset-lg-2 col-12">
 
 <div class="input-group mb-3">
  <input type="text" class="form-control news-input" placeholder="Email" >
  <div class="input-group-append" style="cursor: pointer">
    <span class="input-group-text">Subscribe</span>
  </div>
</div>

</div> 
 </div>
 </div>
 </section>
<!--******************* newsletter ends*****************************************************************-->

<!--******************* footer start*****************************************************************-->

<footer class="footersection" id="footerdiv">

<div class="container">
<div class="row">

<div class="col-lg-4 col-md-6 col-12 footer-div">
<div >
<h3> ABOUT WEBTECHNICAL</h3>
<p>the world has become so fast that people dont want to stand by reading a 
page of information to be they would much rather look at a presentation and understand the message.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
<div>
<h3> NAVIGATION LINKS</h3>
<li><a href="index.php">Home</a></li>
<li><a href="#servicediv">services</a></li>
<li><a href="#pricingdiv">Price</a></li>
<li><a href="#newsletterid">About</a></li>
</div>
</div>



<div class="col-lg-4 col-md-12 col-12 footer-div">
<div>
<h3> NEWSLETTER</h3>
<p>the world has become so fast that people don't want to stand by reading a 
page of information presentation.</p>

<div class="container newletter-main">
 <div class="row">
 <div class="col-lg-12 col-12">
 
 <div class="input-group mb-3">
  <input type="text" class="form-control news-input" placeholder="Email">
  <div class="input-group-append">
    <div style="cursor: pointer">
    <span class="input-group-text">Subscribe</span>
    </div>
  </div>
</div>

</div> 
 </div>

</div>
</div>
</div>
</div>
<div class="mt-5 text-center">
<center><p>Copyright @2021 All reserved | This templete is made with love by Ayushi Kesharwani</p></center>
</div>

<div class="scrolltop float-right">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn">
</div>
</div>


</footer>

<!--******************* footer ends*****************************************************************-->
  
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" 
integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
 integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script>
  $('.count').counterUp({
  delay:10,
  time:3000
  })

  
  mybutton=document.getElementById("myBtn");
  
  window.onscroll=function(){scrollFunction()};
  
  function scrollFunction(){
  if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
  mybutton.style.display="block";
  }
  else{
  mybutton.style.display="none";
  }
  }
 
function topFunction(){
document.body.scrollTop=0;
document.documentElement.scrollTop=0;
}
 
  </script>
  
</body>
</html>