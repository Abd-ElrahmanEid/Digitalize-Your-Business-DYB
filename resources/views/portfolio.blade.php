<x-app-layout>


    @extends('layouts.user')

    @section('link_css')
        <link rel="stylesheet" href="{{asset("css/portfolio.css")}}">
    @endsection

    @section('title')
        <title>Portfolio</title>
    @endsection
    @section('user')
        <!----section one---------------------------------grow with us---------------------------------------------------------------------------------->

        <div class="container-fluid bg-dark" style="height: 45vh; padding-top: 90px; color: white">

            <div class="d-flex justify-content-center">
                <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid #a72355;"></span>
                <h2>Our Work</h2>
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 18px;">When you choose any of our digital services listed below,<br> you choose a company that is commited about your company's success.</p>

        </div>


        <br><br><br><br><br>



        <!--section two-----------------------portfolio---------------------------------------------------------------------------------->


        <!--project 1---------------------------------------------------->

        <h2 style="text-align: center;">Project Name 1</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">

                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32.5%;">

                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 70vh;"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%;">

                    </div>

                </div>


            </div>
        </div>  <br><br><br><br><br>




        <!--project 2---------------------------------------------------->


        <h2 style="text-align: center;">Project Name 2</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">

                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32.5%;">

                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 70vh;"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%;">

                    </div>

                </div>



            </div>
        </div>  <br><br><br><br><br>



        <!--project 3---------------------------------------------------->


        <h2 style="text-align: center;">Project Name 3</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;">

                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 32.5%;">

                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 70vh;"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;">


                    </div>

                    <div style="background-image: url({{'images/laptop.jpg'}}); background-size: cover; height: 49%;">

                    </div>

                </div>


            </div>
        </div>  <br><br><br><br>






    @endsection


</x-app-layout>
