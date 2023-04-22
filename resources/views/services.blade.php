@extends('layouts.user')

@section('link_css')
    <link rel="stylesheet" href="{{asset("css/services.css")}}">
@endsection

@section('title')
    <title>Services</title>
@endsection

@section('user')

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



        <div class="col-xl-6 mt-xl-5 mb-xl-5 col-lg-6 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/Mobile Development.gif")}}" alt="" width="100%" height="100%">
        </div>


        <div class="col-xl-5 mt-xl-5 col-lg-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="border-right: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
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




        <div class="col-xl-5 mt-xl-5 col-lg-6 mt-md-5 mt-sm-5 mb-sm-5 square" style="border-left: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
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



        <div class="col-xl-6 mt-xl-5 mb-xl-5 col-lg-5 mt-md-5 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/designer.gif")}}" alt="" width="100%" height="100%">
        </div>




        <!--------------5----------------- -->


        <div class="col-xl-6 mt-xl-5 mb-xl-5 col-lg-6 mb-md-5 mt-sm-5 mb-sm-5 square" style="height: 50vh;">
            <img src="{{asset("/images/Search Engine Optimization.gif")}}" alt="" width="100%" height="100%">
        </div>


        <div class="col-xl-5 mt-xl-5 col-lg-5 mt-md-5 mt-sm-5 square" style="border-right: 3px solid green; border-bottom: 3px solid green; border-radius: 15px; height: 50vh; padding: 30px 40px;">
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection

