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

        <div class="container-fluid bg-dark" style="height: 45vh; padding-top: 90px; color: white; background-image: url({{'images/side2.png'}}); background-size: cover;)">

            <div class="d-flex justify-content-center">
                <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid white;"></span>
                <h2>Our Work</h2>
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 18px;">When you choose any of our digital services listed below,<br> you choose a company that is commited about your company's success.</p>

        </div>


        <br><br><br><br><br>



        <!--section two-----------------------portfolio---------------------------------------------------------------------------------->


        <!--project 1----web development--------------------------------------------------->

        <h2 style="text-align: center;">Web Development</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/portfolio/w1.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/w4.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/w3.jpg'}}); background-size: cover; height: 32.5%;" data-aos="fade-right">
                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/portfolio/w2.jpg'}}); background-size: cover; height: 70vh;" data-aos="fade-down"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/portfolio/w5.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;" data-aos="fade-left">
                    </div>

                    <div style="background-image: url({{'images/portfolio/w6.jpg'}}); background-size: cover; height: 49%;" data-aos="fade-left">
                    </div>

                </div>


            </div>
        </div>  <br><br><br><br><br>




        <!--project 2----mobile development------------------------------------------------>


        <h2 style="text-align: center;">Mobile Development</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/portfolio/m1.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/m2.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/m4.jpg'}}); background-size: cover; height: 32.5%;" data-aos="fade-right">
                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/portfolio/m3.jpg'}}); background-size: cover; height: 70vh;" data-aos="fade-down"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/portfolio/m5.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;" data-aos="fade-left">
                    </div>

                    <div style="background-image: url({{'images/portfolio/m6.jpg'}}); background-size: cover; height: 49%;" data-aos="fade-left">
                    </div>

                </div>



            </div>
        </div>  <br><br><br><br><br>



        <!--project 3----ui/ux design------------------------------------------------>


        <h2 style="text-align: center;">UI/UX Design</h2> <br>

        <div class="container-fluid">
            <div class="row d-flex justify-content-evenly">



                <div class="col-xl-3 col-lg-3 col-md-5 mb-md-5 col-sm-10 mb-sm-5 p-0 square" style="height: 80vh;">

                    <div style="background-image: url({{'images/portfolio/u4.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/u2.jpg'}}); background-size: cover; height: 32%; margin-bottom: 10px;" data-aos="fade-right">
                    </div>

                    <div style="background-image: url({{'images/portfolio/u5.jpg'}}); background-size: cover; height: 32.5%;" data-aos="fade-right">
                    </div>


                </div>


                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10 mb-sm-5 square" style="background-image: url({{'images/portfolio/u1.jpg'}}); background-size: cover; height: 70vh;" data-aos="fade-down"></div>



                <div class="col-xl-3 col-lg-3 col-md-7 col-sm-10 p-0 square" style="height: 60vh;">

                    <div style="background-image: url({{'images/portfolio/u3.jpg'}}); background-size: cover; height: 49%; margin-bottom: 10px;" data-aos="fade-left">
                    </div>

                    <div style="background-image: url({{'images/portfolio/u6.jpg'}}); background-size: cover; height: 49%;" data-aos="fade-left">
                    </div>

                </div>


            </div>
        </div>  <br><br><br><br>






    @endsection


</x-app-layout>
