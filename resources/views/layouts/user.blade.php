<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    @yield('link_css')

    <!-- link Font Awesome -->
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css")}}" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Animaton on Scroll -->
    <link rel="stylesheet" href="{{asset("https://unpkg.com/aos@next/dist/aos.css")}}" />

    {{--tab title--}}
    @yield('title')
</head>
<body>

{{--Navbar-----------------------------------------------------------------------------------------------------------------}}

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

{{------Put collapse before navbar-collapse-----------------------------}}
        <div class=" navbar-collapse" id="nav">
            <!-- nav item  -->

            <div class="side-nav  ms-auto">


                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">

                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-phone" style="color: #a72355; font-size: 24px;  padding-top: 7px; padding-right: 30px;"></i></a>
                    </li>

                    <li class="nav-item" >
                        <a href="#"><i class="fa-solid fa-envelope" style="color: #a72355; font-size: 24px; padding-top: 7px; padding-right: 25px;"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('portfolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('userview.index')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('userservice.create')}}">Get service</a>
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
{{--end of nav------------------------------------------------------------------------------}}


<!---- Scroll--------------------------------------------->
<a class="hide" href="#home">
    <i class="fa-solid fa-arrow-up fs-4" style="color: white; padding: 11px 13px;"></i>
</a>



@yield('user')




<!-- section six  ----------------let'S talk----------------------------------------------------------------------------------------->

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





{{--footer------------------------------------------------------------------------------}}

<div class="container-fluid bg-dark">

    <div class="container py-5">

        <div class="text-center">

{{--            <h1 class="fs-2 fw-bold text-light ">DYB</h1> <br>--}}
            <p style="font-family: Nolluqa; font-size: 70px; letter-spacing: 5px; color: white">DYB</p> <br>

            <P class="text-light">
                We are a full-service digital agency focused on the customer. Your company has a unique narrative to tell,<br>and if told correctly, it can drive sales and customer loyalty. We are masters in using cross-channel storytelling to grow companies.</P>


        </div> <br><hr class="text-light"><br><br>



        <div class="row" style="display: flex; justify-content: space-evenly;">

            <div class="col-xl-3 col-lg-4 col-md-5 mx-md-5 col-sm-5 foot">
                <ul class="text-light ">
                    <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">QUICK LINKS</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Home</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Our Work</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Services</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Get Order</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Contact Us</ol>

                </ul>
            </div>


            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 foot" >
                <ul class="text-light ">
                    <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">SERVICES</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Web Development</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Digital Marketing</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Mobile Development</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">UI/UX Design</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Search Engine Optimization</ol>
                </ul>
            </div>


            <div class="col-xl-4 m-xl-0 col-lg-9 col-md-11 m-md-5 col-sm-11 mt-sm-5 feed" >

                <ul class="text-light ">
                    <ol class="fw-bold p-sm-0 pb-sm-2">FEEDBACK</ol>
                    <ol class="fw-lighter pb-2 p-sm-0 ">Tell us your impression about our website </ol>
                    <ol class="pb-2 p-sm-0 ">
                        <input type="text" style="width: 100%; height: 5vh; margin-top: 15px; color: black"><br>
                        <button style="background-color: white; color: black; padding: 5px 40px; margin-top: 15px; border-radius: 10px">
                            Send
                        </button>
                    </ol>

                </ul>
            </div>
        </div>

        <br><hr class="text-light"><br>

        <div class="row justify-content-center">

            <div style="width: 80px; height: 55px; background-color: transparent; text-align: center; padding-top: 12px; border-radius: 10px; border: 2px solid white; margin-right: 25px;">
                <i class="fa-brands fa-facebook" style="font-size: 30px; color: white;"></i>
            </div>

            <div style="width: 80px; height: 55px; background-color: transparent; text-align: center; padding-top: 12px; border-radius: 10px; border: 2px solid white; margin-right: 25px;">
                <i class="fa-brands fa-instagram" style="font-size: 30px; color: white;"></i>
            </div>


            <div style="width: 80px; height: 55px; background-color: transparent; text-align: center; padding-top: 12px; border-radius: 10px; border: 2px solid white; margin-right: 25px;">
                <i class="fa-brands fa-github" style="font-size: 30px; color: white;"></i>
            </div>


            <div style="width: 80px; height: 55px; background-color: transparent; text-align: center; padding-top: 12px; border-radius: 10px; border: 2px solid white;">
                <i class="fa-brands fa-linkedin" style="font-size: 30px; color: white;"></i>
            </div>

        </div> <br><br>

        <p class="text-light fw-lighter text-center">
            <span>&#169</span> Copyright 2023 | All Rights Reserved | <span class="fw-bold">Digitize Your Business ( DYB )</span>
        </p>
    </div>
</div>

{{--end of footer------------------------------------------------------------------------------}}





</body>

<!-- Animaton on Scroll -->
<script src="{{asset("https://unpkg.com/aos@next/dist/aos.js")}}"></script>
<script>AOS.init();</script>


<!-- Links Bootsrtap -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js")}}" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js")}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>

<!-- Link Javascript -->
<script src="{{asset("js/script.js")}}"></script>
<body>

</body>
</html>
