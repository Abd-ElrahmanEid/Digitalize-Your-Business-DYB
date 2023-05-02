<x-app-layout>


    @extends('layouts.user')
    @section('link_css')
        <link rel="stylesheet" href="{{asset("css/home.css")}}">
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
                        <br><span class="text-success">agency</span>
                    </h1>
                    <span class="text-capitalize">
            we help you to achieve your goals by customizing what is best for you<br> with care and productivity.
        </span><br><br>
                    <a class="btn text-uppercase">discover
                        <i class="fa-solid fa-arrow-right-long ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>



        {{----------services provide section-----------------------------------------------------------------------------------------}}
        <div class="container service-section">
            <div class="row">

                <div class="d-flex justify-content-center">
                    <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid green;"></span>
                    <h2 style="text-align: center;">What we can do for you </h2>
                </div>
                <div class="col-12">
                    <p class="text-center fs-5">Most Popular Services</p>
                </div>
            </div>
            <br><br><br>



            <div class="row row-cols-1 row-cols-md-3 g-4 sec-cards">
                <div class="col">
                    <div class="card h-100">
                        <i class="fa-solid fa-building fa-2x ms-4 p-3 mt-2 text-success"></i>
                        <div class="card-body">
                            <h5 class="card-title p-2 ms-3 text-uppercase">Web <br>Development</h5>
                            <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card h-100">
                        <i class="fa-solid fa-laptop fa-2x ms-4 p-3 mt-2 text-success"></i>
                        <div class="card-body">
                            <h5 class="card-title p-2 ms-3 text-uppercase">Digital<br>Marketing</h5>
                            <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card h-100">
                        <i class="fa-solid fa-lightbulb fa-2x ms-4 p-3 mt-2 text-success"></i>
                        <div class="card-body">
                            <h5 class="card-title p-2 ms-3 text-uppercase">marketing & <br>reporting</h5>
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
                        <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid green;"></span>
                        <h4>Get to know us </h4>
                    </div>
                    <h1 class="text-uppercase">
                        leading the best<br>digital <span class="text-success">agency</span> in town
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
        <div class="container-fluid bg-overlayy">
            <div class="row text-center">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid green;"></span>
                        <h2 style="text-align: center;">Fun Fact </h2>
                    </div>
                    <h1 class="text-uppercase">
                        we're standout<br>
                        experts in the business
                    </h1>
                </div>
            </div>
        </div> <br><br><br><br>




        {{------lets talk--------------------------}}
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
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    @endsection




</x-app-layout>
