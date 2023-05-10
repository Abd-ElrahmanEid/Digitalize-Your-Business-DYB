<x-app-layout>


    @extends('layouts.user')
    @section('link_css')
        <link rel="stylesheet" href="{{asset("css/dashboard.css")}}">
    @endsection

    @section('title')
        <title>Home</title>
    @endsection


    @section('user')


        {{-------background overlay---------------------------------------------------}}
        <div class="container-fluid bg-overlay">
            <div class="row text-center mt-5">
                <div class="col background-content">

                    <h1 class="text-uppercase" style="font-size: 60px">experience<br> the best digital
                        <br><span style="color: #a72355;">agency</span>
                    </h1>
                    <span class="text-capitalize">
            we help you to achieve your goals by customizing what is best for you<br> with care and productivity.
        </span><br><br>
                    <a class="btn text-uppercase " style="color: #a72355; font-weight: bold">discover
                        <i class="fa-solid fa-arrow-right-long ms-3" style="color: #a72355"></i>
                    </a>
                </div>
            </div>
        </div>
        <br><br><br><br>




        {{----------services provide section-----------------------------------------------------------------------------------------}}
        <div class="d-flex justify-content-center">
            <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid #a72355;"></span>
            <h2 style="text-align: center;">What we can do for you </h2>
        </div>
        <div class="col-12">
            <p class="text-center fs-5">Most Popular Services</p>
        </div>

        <br><br>


        <div class="container service-section">
            <div class="row d-flex justify-content-evenly">


                <div class="col-xl-3 col-lg-5 col-md-12 col-sm-12 mb-md-5 mb-sm-5 cards" data-aos="fade-right">
                    <div class="card h-100">
                        <i class="fa-solid fa-building fa-2x ms-4 p-3 mt-2" style="color: rgba(167,35,85,1); font-size: 60px"></i>
                        <div class="card-body">
                            <h2 class="card-title p-2 ms-3 text-uppercase">Web <br>Development</h2>
                            <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 mb-md-5 mb-sm-5 cards" data-aos="fade-up">
                    <div class="card h-100">
                        <i class="fa-solid fa-laptop fa-2x ms-4 p-3 mt-2" style="color: rgba(167,35,85,1); font-size: 60px"></i>
                        <div class="card-body">
                            <h2 class="card-title p-2 ms-3 text-uppercase">Digital<br>Marketing</h2>
                            <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 mb-md-5 mb-sm-5 cards" data-aos="fade-left">
                    <div class="card h-100">
                        <i class="fa-solid fa-lightbulb ms-4 p-3 mt-2" style="color: rgba(167,35,85,1); font-size: 60px"></i>
                        <div class="card-body">
                            <h2 class="card-title p-2 ms-3 text-uppercase">marketing<br>& reporting</h2>
                            <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>



        {{---------------------start of the images group----------------------------------}}
        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11 mb-sm-5 imgg" style=" height:50vh; background-image: url({{"images/3.jpg"}}); background-size: cover">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-11 mb-sm-5 imgg" style="height:50vh; background-image: url({{"images/4.jpg"}}); background-size: cover">
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-11 imgg" style="height:50vh; background-image: url({{"images/5.jpg"}}); background-size: cover">
                </div>
            </div>
        </div><br><br><br><br><br><br><br>




        {{-----------------------------------start of get to know us-------------------------------}}
        <div class="container">
            <div class="row" >

                <div class="col-xl-3 col-lg-3 col-md-7 mb-md-4 mb-sm-5 div1" style="height: 50vh; background-color: #bacbe6; background-image: url({{'images/2.jpg'}}); background-size: cover">
                </div>


                <div class="col-xl-6 col-lg-6 col-md-10 mb-md-4 mb-sm-5 text-center div2" style="margin: auto;">
                    <div class="d-flex justify-content-center">
                        <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid rgba(167,35,85,1);"></span>
                        <h4>Get to know us </h4>
                    </div>
                    <h1 class="text-uppercase">
                        leading the best<br>digital <span style="color: rgba(167,35,85,1)">agency</span> in town
                    </h1><br>
                    <p class="text-capitalize">
                        web design in a powerful way of just not an only<br>
                        profession,however, in a passion for our company. we <br>
                        have to a tendency to believe the idea that smart looking <br>
                        of any website is the first impression
                    </p>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-7 bot-div" style="margin-top: auto; height: 40vh; background-color: #bacbe6; background-image: url({{'images/2.jpg'}}); background-size: cover">
                </div>
            </div>
        </div><br><br><br><br><br>




        {{------------------start of the overlay background fun fact----------------------------}}
        <div class="container bg-overlayy">
            <div class="row text-center">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid rgba(167,35,85,1);"></span>
                        <h2 style="text-align: center;">Fun Fact </h2>
                    </div>
                    <h1 class="text-uppercase">
                        we're standout<br>
                        experts in the business
                    </h1>
                </div>
            </div>
        </div>





    @endsection




</x-app-layout>
