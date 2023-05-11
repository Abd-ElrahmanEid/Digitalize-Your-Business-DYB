<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- links Bootstrap ( online - for navbar)-->
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/welcome.css")}}">

    <!-- link Font Awesome -->
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css")}}" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Animaton on Scroll -->
    <link rel="stylesheet" href="{{asset("https://unpkg.com/aos@next/dist/aos.css")}}" />


    <title>Welcome</title>
</head>
<body>

<!-- Navbar  -------------------------------------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light mt-3 mb-2" id="home">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <div class="navbar-brand mt-2 mt-lg-0">
            <!-- <img src="#" alt="Corona Logo"/> -->
            <p style="font-family: Nolluqa; font-size: 70px; letter-spacing: 5px;">DYB</p>
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

                    <li class="nav-item" >
                        <a href="tel:01111628467"><i class="fa-solid fa-phone" style="color: #212529; font-size: 24px;  padding-top: 7px; padding-right: 30px;"></i></a>
                    </li>

                    <li class="nav-item" >
                        <a href="mailto:eidabdelrahman958@gmail.com"><i class="fa-solid fa-envelope" style="color: #212529; font-size: 24px; padding-top: 7px; padding-right: 25px;"></i></a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>-->
                    @if (Route::has('login'))
{{--                        @auth--}}
                    <li class="nav-item" data-aos="fade-down">
                        <a class="nav-link nav-btn" href="{{ route('login') }}">Login</a>
                    </li>

                    @if (Route::has('register'))
                    <li class="nav-item" data-aos="fade-up">
                        <a class="nav-link nav-btn" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                </ul>
{{--                    @endauth--}}
                @endif

            </div>

        </div>
        <div class="navbar-overlay"></div>
    </div>
</nav>  <br><br>



<!---- Scroll -->
<a class="hide" href="#home">
    <i class="fa-solid fa-arrow-up fs-4" style="color: white; padding: 11px 13px;"></i>
</a>





<!-- section two ----- who we are------------------------------------------------------------------------------------------------------------------>
<div class="d-flex justify-content-center">
    <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid rgba(167,35,85,1);"></span>
    <h2 style="font-family: Georgia, 'Times New Roman'; text-align: center; color: black">Who We Are ?</h2>
</div>


<p style="text-align: center; margin-top: 10px; margin-bottom: 40px">
    As a Digital Agency Services we are Committed to Building Custom Digital Solutions <br>that Drive Business Success.
</p> <br><br>



<div class="container d-flex justify-content-around">
    <div class="row">


        <div  class="col-xl-6 col-lg-6 col-md-12 col-sm-12 idiv" style="border-left: solid 5px #212529; border-radius: 30px; padding-left: 30px;">

            <img src="{{asset("/images/programmer.gif")}}" alt="" width="95%" height="95%" style="border-radius: 50px;" data-aos="fade-right">
        </div>



        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-sm-3 pdiv" style="text-align: justify;" >

            <p style="padding-top: 10px; padding-bottom: 30px">
                At our Digital service's agency, we specialize in creating custom solutions that help businesses achieve their online goals. Our team of experienced web developers, designers, and digital strategists work collaboratively to build websites, web applications, and e-commerce solutions that meet our clients' unique needs and deliver results.<br><br>

                Our mission is to provide our clients with the tools they need to succeed in the online marketplace. We are dedicated to staying up-to-date with the latest web technologies and trends to ensure that we are always delivering the highest quality work. We believe that every business deserves a digital solutions that reflects their brand's personality and effectively communicates their message to their target audience.
            </p>

            <a class="get_in_touch" href="{{route('userview.index')}}">
                Get in Touch
            </a>
        </div>

    </div>

</div> <br><br><br><br><br><br><br>




<!-- section three  ------Why choose us ?! --------------------------------------------------------------------------------------------------->

<div class="d-flex justify-content-center">
    <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid rgba(167,35,85,1);"></span>
    <h2 style="font-family: Georgia, 'Times New Roman'; text-align: center;">Why Choose Us ?</h2>
</div>

<p style="text-align: center; margin-top: 10px;">
    Thank you for considering us as a digital agency. We believe that our experience, skills, and <br> dedication set us apart and make mus the ideal choice for your project.
</p> <br><br><br><br>



<div class="container">
    <div class="row" style=" display: flex; justify-content: space-evenly;">

        <div  class="col-xl-5 col-lg-11 col-md-12 col-sm-12 mb-xl-5 mt-xl-5 mb-md-5 mt-md-5 mb-sm-5 sdiv" style=" position: relative; padding: 0 50px; border: 2px solid black; border-radius: 20px;" >

            <div class="mb-xl-3 cdiv" style="background: rgba(167,35,85,1); width: 100px; height: 100px; border-radius: 50%; position: absolute; bottom: 170px;">
                <i class="fa-solid fa-flask" style=" font-size: 35px; display: flex; justify-content: center; padding-top: 28px; color: white;"></i>
            </div>


            <h5 style="padding-top: 65px;"><span style="border: 2px solid rgba(167,35,85,1); margin-right: 20px;"></span>Expertise</h5>
            <p style="padding-bottom: 40px; margin-top: 25px">
                We have extensive experience in designing and developing websites for clients s across various industries.
            </p>

        </div>


        <div class="col-xl-5 col-lg-11 col-md-12 col-sm-12 mb-xl-5  mt-xl-5 mb-md-5 mt-md-5 mb-sm-5 mt-sm-5 mb-xs-5 sdiv" style=" position: relative; padding: 0 50px; border: 2px solid black; border-radius: 20px;" >

            <div class="mb-xl-3 cdiv" style="background: rgba(167,35,85,1); width: 100px; height: 100px; border-radius: 50%; position: absolute; bottom: 170px;">
                <i class="fa-solid fa-bell-concierge" style=" font-size: 35px; display: flex; justify-content: center; padding-top: 28px; color: white;"></i>
            </div>


            <h5 style="padding-top: 65px;"><span style="border: 2px solid rgba(167,35,85,1); margin-right: 20px;"></span>Attention to Detail</h5>
            <p style="padding-bottom: 40px; margin-top: 25px">
                We take pride in my work, and pay attention to every detail to ensure that the end product of the highest quality
            </p>

        </div>


        <div class="col-xl-5 col-lg-11 col-md-12 col-sm-12 mb-xl-5 mt-xl-5 mb-md-5 mt-md-5 mb-sm-5 mt-sm-5 sdiv" style=" position: relative; padding: 0 50px; border: 2px solid black; border-radius: 20px;" >

            <div class="mb-xl-3 cdiv" style="background: rgba(167,35,85,1); width: 100px; height: 100px; border-radius: 50%; position: absolute; bottom: 170px;">
                <i class="fa-solid fa-handshake" style=" font-size: 35px; display: flex; justify-content: center; padding-top: 28px; color: white;"></i>
            </div>


            <h5 style="padding-top: 65px;"><span style="border: 2px solid rgba(167,35,85,1); margin-right: 20px;"></span>Communication</h5>
            <p style="padding-bottom: 40px; margin-top: 25px;">
                We believe that clear and constant communication is crucial for the success of any project
            </p>

        </div>



        <div class="col-xl-5 col-lg-11 col-md-12 col-sm-12 mb-xl-5 mt-xl-5 mb-md-5 mt-md-5 mt-sm-5 sdiv" style=" position: relative; padding: 0 50px; border: 2px solid black; border-radius: 20px;" >

            <div class="mb-xl-3 cdiv" style="background: rgba(167,35,85,1); width: 100px; height: 100px; border-radius: 50%; position: absolute; bottom: 170px;">
                <i class="fa-solid fa-mug-hot" style=" font-size: 35px; display: flex; justify-content: center; padding-top: 28px; color: white;"></i>
            </div>


            <h5 style="padding-top: 65px;"><span style="border: 2px solid rgba(167,35,85,1); margin-right: 20px;"></span>Customer Service</h5>
            <p style="padding-bottom: 40px; margin-top: 25px">
                As developer team. We understand the importance of building long-term relationships with my clients.
            </p>

        </div>


    </div>
</div> <br><br><br><br>



<!-- section four  ------ years timer ---------------------------------------------------------------------------------------------------->

<div class="container-fluid bg-dark" style="padding:55px ; display: flex; justify-content: space-between; align-items: center;">
    <div class="row " style="width: 100%;">

        <div class="col-xl-3 col-lg-6 mt-md-5 years">

            <h1 style="color: white; text-align: center; font-weight: bold;">3+<br><span style="font-size: 36px;">Business Year </span></h1>

        </div>

        <div class="col-xl-3 col-lg-6 mt-md-5 mt-sm-5 years">

            <h1 style="color: white; text-align: center; font-weight: bold;">3+<br><span style="font-size: 36px;">Satisfied Clients</span></h1>

        </div>

        <div class="col-xl-3 col-lg-6 mt-md-5 mt-sm-5 years">

            <h1 style="color: white; text-align: center; font-weight: bold;">3+<br><span style="font-size: 36px;">Projects Delivery</span></h1>

        </div>

        <div class="col-xl-3 col-lg-6 mt-md-5 mt-sm-5 years">

            <h1 style="color: white; text-align: center; font-weight: bold;">3+<br><span style="font-size: 36px;">Feedback</span></h1>

        </div>

    </div>
</div> <br><br><br><br><br><br>




<!-- section five  ------ Our Services ---------------------------------------------------------------------------------------------------->


<div class="d-flex justify-content-center">
    <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid rgba(167,35,85,1);"></span>
    <h2 style="font-family: Georgia, 'Times New Roman'; text-align: center;">Our Services</h2>
</div><br><br><br><br>

<div class="container-fluid">
    <div class="row" style="display: flex; justify-content: space-evenly;">




        <div class="col-xl-3 mb-xl-5 col-lg-5 mb-lg-5 col-md-10 mb-md-5 col-sm-10 mb-sm-5 services" data-aos="fade-right">

            <span class="line"></span>
            <p style="padding-top: 15px; padding-left: 20px; font-size: 24px;">Web Development</p>

        </div>




        <div class="col-xl-4  col-lg-5 col-md-10 mb-md-5 col-sm-10 mb-sm-5 services" data-aos="fade-down">

            <span class="line"></span>
            <p style="padding-top: 15px; padding-left: 20px; font-size: 24px;">Mobile Development</p>

        </div>





        <div class="col-xl-3 mb-xl-5 col-lg-5 mb-lg-5 col-md-10 mb-md-5 col-sm-10 mb-sm-5 services" data-aos="fade-left">

            <span class="line"></span>
            <p style="padding-top: 15px; padding-left: 20px; font-size: 24px;">Digital Marketing</p>

        </div>





        <div class="col-xl-5 col-lg-5 col-md-10 mb-md-5 col-sm-10 mb-sm-5 services" data-aos="fade-right">

            <span class="line"></span>
            <p style="padding-top: 15px; padding-left: 20px; font-size: 24px;">Graphic Design</p>

        </div>





        <div class="col-xl-5 col-lg-5 col-md-10 mb-md-5 col-sm-10 mb-sm-5 services" data-aos="fade-left">

            <span class="line"></span>
            <p style="padding-top: 15px; padding-left: 20px; font-size: 24px;">Cloud Computing</p>

        </div>





    </div>
</div>  <br><br><br><br><br>



<!-- section six  ----------------let'S talk----------------------------------------------------------------------------------------->

<div class="container-fluid">
    <div class="row obiqlue">

        <div class="col-xl-8 col-lg-7" style="display: flex; justify-content: center; align-items: center;">
            <h1 style="color: white; text-align: center; padding-bottom: 30px;"><span style="border: 2px solid white; margin-right: 50px;"></span>We’re interested in talking about your business.</h1>
        </div>

        <div class="col-xl-4 col-lg-5" style="display: flex; justify-content: center; align-items: center;">
            <a class="talk" href="{{route('userservice.create')}}">Let’s Talk</a>
        </div>


    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






<!-- section seven  ----------------footer ----------------------------------------------------------------------------------------->



<div class="container-fluid bg-dark">

    <div class="container py-5">

        <div class="text-center">

{{--            <h1 class="fs-2 fw-bold text-light ">DYB</h1> <br>--}}
            <p style="font-family: Nolluqa; font-size: 70px; letter-spacing: 5px; color: white">DYB</p>

            <P class="text-light">
                We are a full-service digital agency focused on the customer. Your company has a unique narrative to tell,<br>and if told correctly, it can drive sales and customer loyalty. We are masters in using cross-channel storytelling to grow companies.</P>


        </div> <br><hr class="text-light"><br><br>



        <div class="row justify-content-center">

            <div class="links">
                <i class="fa-brands fa-facebook icon"></i>
            </div>

            <div class="links">
                <i class="fa-brands fa-instagram icon"></i>
            </div>


            <div class="links">
                <i class="fa-brands fa-github icon"></i>
            </div>


            <div class="links">
                <i class="fa-brands fa-linkedin icon"></i>
            </div>

        </div> <br><br>

        <p class="text-light fw-lighter text-center">
            <span>&#169</span> Copyright 2023 | All Rights Reserved | <span class="fw-bold">Digitize Your Business ( DYB )</span>
        </p>
    </div>
</div>















































<!-- Animaton on Scroll -->
<script src="{{asset("https://unpkg.com/aos@next/dist/aos.js")}}"></script>
<script>AOS.init();</script>


<!-- Links Bootsrtap -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js")}}" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js")}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>

<!-- Link Javascript -->
<script src="{{asset("js/script.js")}}"></script>
</body>
</html>
