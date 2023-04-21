<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- links Bootstrap ( online - for navbar)-->
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/services.css")}}">

    <!-- link Font Awesome -->
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css")}}" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Animaton on Scroll -->
    <link rel="stylesheet" href="{{asset("https://unpkg.com/aos@next/dist/aos.css")}}" />


    <title>Services</title>
</head>
<body>



<!-------------Navbar------------------------------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light mt-3 mb-2" >
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <div class="navbar-brand mt-2 mt-lg-0">
            <!-- <img src="#" alt="Corona Logo"/> -->
            <h1>DYB</h1>
        </div>

        <!-- Toggle button -->
        <button
            class="navbar-toggler ms-auto"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#nav"
            aria-controls="nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="nav">
            <!-- nav item  -->

            <div class="side-nav  ms-auto">


                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">

                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-phone" style="color: black; font-size: 24px;  padding-top: 7px; padding-right: 30px;"></i></a>
                    </li>

                    <li class="nav-item" >
                        <a href="#"><i class="fa-solid fa-envelope" style="color: black; font-size: 24px; padding-top: 7px; padding-right: 25px;"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Our work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Request your service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact us</a>
                    </li>
                </ul>

            </div>

        </div>
        <div class="navbar-overlay"></div>
    </div>
</nav>

<!-----section one----------------carousel images------------------------------------------------------------------------------------------------>



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset("/images/d.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/images/c.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/images/d.jpg")}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<br><br><br><br><br>




<!----section two---------------------------------Our Services---------------------------------------------------------------------------------->

<div class="d-flex justify-content-center">
    <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid green;"></span>
    <h2>Our Digital Services</h2>
</div>
<p style="text-align: center; margin-top: 20px; font-size: 18px;">When you choose any of our digital services listed below,<br> you choose a company that is commited about your company's success.</p>


<br><br><br><br>

<!-------Services cards-----------------1------------------------------------------------------>


<div class="container">
    <div class="row d-flex justify-content-evenly" >

        <div class="col-xl-6 col-lg-6 col-md-12 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/web Development.gif")}}" alt="" width="100%" height="100%">
        </div>

        <div class="col-xl-5 col-lg-5 mb-xl-5 col-md-12 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="border-right: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
            <h2 >Web Development</h2>
            <ul style="font-size: 20px; padding-top: 15px; padding-left: 60px;">
                <li>Planning & Initiation</li>
                <li>Creation & Designing</li>
                <li>The Real Development</li>
            </ul>

            <p style="font-size: 18px;">With professional digital Services that we are Provided, your website is now part of you.</p>
            <button class="get">
                Get
                <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </button>

        </div>

        <!-------------2------------------ -->


        <div class="col-xl-5 mt-xl-5 col-lg-5 mb-xl-5 col-md-12 mt-md-5 mt-sm-5 mb-sm-5 square" style="border-left: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
            <h2 >Digital Marketing</h2>
            <ul style="font-size: 20px; padding-top: 15px; padding-left: 60px;">
                <li>Planning & Initiation</li>
                <li>Creation & Designing</li>
                <li>The Real Development</li>
            </ul>

            <p style="font-size: 18px;">With professional digital Services that we are Provided, your website is now part of you.</p>
            <button class="get">
                Get
                <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </button>

        </div>


        <div class="col-xl-6 mt-xl-5 mb-xl-5 col-lg-6 col-md-12 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/Social Digital Marketing.gif")}}" alt="" width="100%" height="100%">
        </div>





        <!------------3------------------- -->



        <div class="col-xl-6 mt-xl-5 mb-xl-5 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/Mobile Development.gif")}}" alt="" width="100%" height="100%">
        </div>


        <div class="col-xl-5 mt-xl-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="border-right: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
            <h2>Mobile Development</h2>
            <ul style="font-size: 20px; padding-top: 15px; padding-left: 60px;">
                <li>Planning & Initiation</li>
                <li>Creation & Designing</li>
                <li>The Real Development</li>
            </ul>

            <p style="font-size: 18px;">With professional digital Services that we are Provided, your website is now part of you.</p>
            <button class="get">
                Get
                <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </button>

        </div>




        <!-----------4-------------------- -->




        <div class="col-xl-5 mt-xl-5 mt-md-5 mt-sm-5 mb-sm-5 square" style="border-left: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
            <h2>UI/UX Design</h2>
            <ul style="font-size: 20px; padding-top: 15px; padding-left: 60px;">
                <li>Planning & Initiation</li>
                <li>Creation & Designing</li>
                <li>The Real Development</li>
            </ul>

            <p style="font-size: 18px;">With professional digital Services that we are Provided, your website is now part of you.</p>
            <button class="get">
                Get
                <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </button>

        </div>



        <div class="col-xl-6 mt-xl-5 mb-xl-5 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/designer.gif")}}" alt="" width="100%" height="100%">
        </div>




        <!--------------5----------------- -->


        <div class="col-xl-6 mt-xl-5 mb-xl-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/Search Engine Optimization.gif")}}" alt="" width="100%" height="100%">
        </div>


        <div class="col-xl-5 mt-xl-5 mt-md-5 mt-sm-5 square" style="border-right: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
            <h2>Searsh Engine Optimization</h2>
            <ul style="font-size: 20px; padding-top: 15px; padding-left: 60px;">
                <li>Planning & Initiation</li>
                <li>Creation & Designing</li>
                <li>The Real Development</li>
            </ul>

            <p style="font-size: 18px;">With professional digital Services that we are Provided, your website is now part of you.</p>
            <button class="get">
                Get
                <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
            </button>

        </div>





    </div>
</div>   <br><br><br><br><br><br>




<!--section three----------------let'S talk----------------------------------------------------------------------------------------->

<div class="container-fluid">
    <div class="row obiqlue">

        <div class="col-xl-8 col-lg-7" style="display: flex; justify-content: center; align-items: center;">
            <h1 style="color: white; text-align: center; padding-bottom: 30px;"><span style="border: 2px solid white; margin-right: 50px;"></span>We’re interested in talking about your business.</h1>
        </div>

        <div class="col-xl-4 col-lg-5" style="display: flex; justify-content: center; align-items: center;">
            <button class="talk" >Let’s Talk</button>
        </div>


    </div>
</div>





<!--section four----------------footer----------------------------------------------------------------------------------------->

















































<!-- Animaton on Scroll -->
<script src="{{asset("https://unpkg.com/aos@next/dist/aos.js")}}"></script>
<script>AOS.init();</script>


<!-- Links Bootsrtap -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js")}}" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js")}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>

<!-- Link Javascript -->
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
