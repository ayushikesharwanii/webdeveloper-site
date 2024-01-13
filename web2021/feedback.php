<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title></title>
    <style>
    html {
        scroll-behavior: smooth;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    p {
        font-size: 0.9rem;
        line-height: 1.6;
        font-weight: 400;
        color: #606060;
    }

    .extra-div h2,
    .servicediv h2 {
        font-size: 0.9rem;
        margin: 20px 0 15px 0;
        font-weight: bold;
        line-height: 1.1;
        word-spacing: 4px;
    }

    .navbar::before {
        content: "";
        position: absolute;
        top: 0%;
        bottom: 0%;
        left: 0%;
        right: 0%;
        /* opacity:.2; */
        z-index: -1;
        /* background:linear-gradient(to right,#1e5799 0%, #3ccdbb 0%, #16c9f6 100%);   */
        background: #16c9f6;
    }

    .nav-item a {
        color: #fff !important;
        font-weight: bold;
    }

    #web {
        color: #007bff;
        font-size: 30px;
    }

    .contactus {
        width: 100%;
        height: 100vh;
        padding: 80px 0;
        position: relative;
    }

    .contactus:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: linear-gradient(330deg, #16c9f6 55%, #fff 0%);
        z-index: -1;
    }

    .form-button button {
        border: 1px solid #50d1c0;
        border-radius: 100px;
        margin: 0 5px;
        padding: 12px 35px;
        outline: none;
        color: #50d1c0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        text-align: center;
        background: transparent;
    }

    form-button button:hover {
        color: #50d1c0;
    }



    form:hover .form-button button {
        background: #fff;
        color: #50d1c0;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
    }

    ::placeholder {
        font-size: 0.85rem;
    }

    .newsletter {
        width: 100%;
        height: auto;
        margin: 80px auto;
    }

    .news-input {
        border-radius: 100px 0px 0px 100px !important;
        min-width: 150px;
        min-width: 45px;
    }

    .input-group-text {
        color: #fff !important;
        background: #5bc0de !important;
        border-radius: 0 100px 100px 0 !important;
        min-width: 120px;
        min-height: 40px;
    }

    .happyclinets {
        width: 100%;
        height: 100hv;
        padding: 80px 0;
    }

    .box {
        text-align: center;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
        border-radius: 2px;
        transition: 0.3s ease;
    }

    .box:hover {
        background: #16c9f6;
    }

    .box:hover p {
        color: white;
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: -60px !important;
    }

    .carousel-indicators li {
        background-color: #16c9f6 !important;
    }

    .box a {
        position: relative;
    }

    .box a img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-top: 20px;
    }

    .box a:after {
        content: "\f10d";
        font-family: FontAwesome;
        width: 40px;
        height: 40px;
        background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
        color: white;
        position: absolute;
        top: 120%;
        left: 70%;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box h1 {
        font-size: 18px;
        font-weight: 700;
        color: #000;
        margin-bottom: 10px;
    }

    .box h2 {
        font-size: 13px;
        font-weight: 400px;
        color: #666666;
        margin-bottom: 20px;
    }

    .footersection {
        width: 100%;
        height: auto;
        padding: 70px 0 20px 0;
        background: #00abff;
        position: relative;
    }

    .footersection p {
        color: #fff;
    }

    .footersection li a {
        font-size: 0.9rem;
        line-height: 1.6;
        font-weight: 400;
        color: #fff;
        text-transform: capitalize;
        text-align: center;
    }

    .footersection h3 {
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 25px;
        font-size: 1.2rem !important;
        font-weight: 600;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        border: none;
        color: #fff;
        background: #00abff;
        padding: 10px;
        border-radius: 10px;
    }

    #myBtn:hover {
        background: #606060;
    }


    @media(max-width:768px) {
        .nav-item {
            text-align: center !important;
        }
    }

    .pricing,
    .happyclients,
    .contactus {
        height: auto;
        margin-top: 50px;
    }

    .card-second {
        transform: translateY(0px);
        margin: 30px 0;
    }

    .contactus p {
        padding: 0 50px;
    }

    .footer-div:nth-child(2) {
        text-align: left !important;
    }

    .footer-div {
        margin: 30px 0;
    }
    </style>
</head>

<body>

    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="/web2020/index.php"><span id='web'>W</span>eb Developer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#servicediv">service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#pricingdiv">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#newsletterid">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contactid">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <!--******************* contact us start**************************************************************-->


    <section class="contactus" id="contactid">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">Your Valuable feedback </h1>
            <p class="text-capitalize pt-2">We appriciate to your valuable feedback and we are always focused on it.<b
                    style="font-size:30px;"> ☻</b></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

                    <form action="feedback.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" required
                                autocomplete="off" placeholder="Enter your name">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" id="place" name="place" required autocomplete="off"
                                placeholder="Enter your place">
                        </div>


                        <div class="form-group">
                            <input type="file" class="form-control" id="photo" name="photo" required autocomplete="off"
                                placeholder="upload your picture">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="4" id="feedback" name="feedback"
                                placeholder="Enter your feedback"></textarea>
                        </div>
                        <div class="d-flex justify-content-center form-button">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <!--******************* contact ends*******************************************************-->



    <!--**********************feedback start***************************************************-->

    <section class="happyclinets">
        <!-- <div class="container headings text-center">
<h1 class="text-center font-weight-bold">Your Valuable feedback </h1>
<p class="text-capitalize pt-1">Our Satisfied Customer Says</p>
</div> -->

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->


            <!-- The slideshow -->

            <div class="carousel-inner container">
                <div class="carousel-item active">

                    <div class="row">
                        <?php
   include 'dbcon.php';
   $selectquery="SELECT * FROM `feedback`";
   $query=mysqli_query($con,$selectquery);
   // $result=mysqli_fetch_array($query);
   while($result=mysqli_fetch_array($query))
   {
?>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="<?php echo $result['photo']?>"
                                        class="img-fluidi img-thumbnail"></a>
                                <p class="m-4"><?php echo $result['feedback']?></p>
                                <h1><?php echo $result['username']?></h1>
                                <h2><?php echo $result['place']?></h2>
                            </div>
                        </div>

                        <?php
}
?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->



    </section>
    <!--******************* feedback ends*****************************************************************-->





    <!--******************* footer start**************************************************************-->

    <footer class="footersection" id="footerdiv">

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 footer-div">
                    <div>
                        <h3> ABOUT WEBTECHNICAL</h3>
                        <p>the world has become so fast that people dont want to stand by reading a
                            page of information to be they would much rather look at a presentation and understand the
                            message.</p>
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
                <center>
                    <p>Copyright @2021 All reserved | This templete is made with love by Ayushi Kesharwani</p>
                </center>
            </div>

            <div class="scrolltop float-right">
                <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
            </div>
        </div>

    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
    < /body> <
    /html>