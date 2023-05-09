<x-app-layout>

    @extends('layouts.user')

    @section('link_css')
        <link rel="stylesheet" href="{{asset("css/contactus.css")}}">
    @endsection

    @section('title')
        <title>Contact Us</title>
    @endsection

    @section('user')



        <!----section one---------------------------------contact us---------------------------------------------------------------------------------->

        <div class="container-fluid bg-dark" style="height: 45vh; padding-top: 90px; background-image: url({{'images/side2.png'}}); background-size: cover;)">

            <div class="d-flex justify-content-center">
                <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid white;"></span>
                <h2 style="color: white">Contact Us</h2>
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 18px; color: white">We actively communicate to achieve the best results because Your Successful Partnership is our Goal.<br> Give us a Shout, and we will make you a believer.</p>

        </div>


        <br><br><br>


        <!--section two----------------------- Help & Support---------------------------------------------------------------------------------->

        <div class="container-fluid">
            <div class="row" style="display: flex; justify-content: space-evenly;">


                <div class="col-xl-7 col-lg-10 mb-lg-5 col-md-11 mb-md-5 col-sm-12 mb-sm-5 big" >

                    <div style="background-image: url({{'images/side.png'}}); background-size: cover;" class="square" data-aos="fade-down">

                        <div  class="dot" data-aos="fade-down">
                            <i style="font-size: 40px; margin-top: 20px; color: white" class="fa-solid fa-handshake-angle"></i>
                        </div>

                        <h4 style="padding-bottom: 20px;">Help & Support</h4>
                        <p style="padding: 0 20px;">to make our clients more satisfy we have a quick response of any Help & Support.</p>

                    </div>


                    <div style="background-image: url({{'images/side.png'}}); background-size: cover;" class="square" data-aos="fade-down">

                        <div class="dot" data-aos="fade-down">
                            <i style="font-size: 40px; margin-top: 20px; color: white " class="fa-solid fa-tty"></i>
                        </div>

                        <h4 style="padding-bottom: 20px;">General information</h4>
                        <p style="padding: 0 20px;">It’s time to build on your and us’ confidence, commitment, and efficiency in a magnificent period of success.</p>

                    </div>

                </div>




                <div class="col-xl-4 col-lg-8 col-md-10 col-sm-10 find" style="background-color: whitesmoke; height: 70vh;">

                    <h4 style="padding-top: 50px;  text-align: center; color: #a72355">Quick Find Us</h4> <br>
                    <hr style="width: 90%; margin: auto;"> <br><br>

                    <p style="font-size: 22px;  padding-left: 60px;">E-Mail : <br> <span style="font-size: 16px;">support@DYB.com</span></p>

                    <br>
                    <p style="font-size: 22px;  padding-left: 60px;">Opening Hours : <br> <span style="font-size: 16px;">Saturday-Thursday  9AM : 5PM</span></p>

                    <br>
                    <p style="font-size: 22px;  padding-left: 60px;">Address : <br> <span style="font-size: 16px;">Business information system - El-Zamalek</span></p>


                </div>


            </div>
        </div> <br><br><br>



        <!--section three----------------Map------------------------------------------------------------------------------------------------>

        <div class="container">
            <div class="row">
                <div class="maps">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.7248848339121!2d31.2203838191538!3d30.071439156085138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fc5cf0dcfb%3A0x5c8b8a3b52b6bcbc!2sBusiness%20Information%20System%20%26%20Financial%20Markets%20and%20Institutions%2C%20Faculty%20of%20Commerce%20%26%20BA%2C%20Helwan%20University!5e0!3m2!1sen!2seg!4v1682687151952!5m2!1sen!2seg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div> <br><br><br><br><br>




        <!--section four----------------contact form----------------------------------------------------------------------------------------->
        <div class="container">
            <div class="row">


                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12" style="height: 65vh; background-color: #cd788e; text-align: center;">

                    <h2 style="text-align: center; padding-top: 40px; color: white">Quick Find Us</h2><br>

                    <input class="input1"  placeholder="Name" type="text">

                    <input class="input2"  placeholder="E-mail" type="email"> <br><br>

                    <input class="input3" placeholder="Your Subject" type="text"> <br><br>

                    <textarea class="input4" placeholder="What do You Want !?"></textarea> <br><br>

                    <button class="sub">
                        Submit
                    </button>


                </div>


                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12" style="height: 65vh ; background-image: url({{'images/laptop.jpg'}}); background-size: cover;">

                </div>

            </div>
        </div>  <br><br><br><br>



        <!--section five----------------3 cards------------------------------------------------------------------------------------------->
        <div class="container ">
            <div class="row d-flex justify-content-evenly" >


                <div class="col-xl-3 col-lg-3 col-sm-5 cards" data-aos="fade-up-right">
                    <i class="fa-solid fa-phone-volume" style="display: flex; justify-content: center; font-size: 60px; padding-top: 65px;"></i> <br><br>

                    <h2 style="text-align: center;">Call Us</h2> <br>

                    <p style="text-align: center;">+880 215 364 571</p>
                </div>


                <div class="col-xl-3 col-lg-3 col-sm-5 cards" data-aos="fade-down">
                    <i class="fa-solid fa-envelope" style="display: flex; justify-content: center; font-size: 60px; padding-top: 65px;"></i> <br><br>
                    <h2 style="text-align: center;">Gmail</h2> <br>

                    <p style="text-align: center;">support@DYB.com</p>
                </div>


                <div class="col-xl-3 col-lg-3 col-sm-5 cards" data-aos="fade-up-left">
                    <i class="fa-sharp fa-solid fa-location-dot" style="display: flex; justify-content: center; font-size: 60px; padding-top: 65px;"></i> <br><br>
                    <h2 style="text-align: center;">Location</h2> <br>

                    <p style="text-align: center;">Business information system - El-Zamalek</p>
                </div>
            </div>
        </div>

        <br><br><br><br>  <br><br><br><br>







    @endsection


</x-app-layout>
