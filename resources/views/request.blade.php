<x-app-layout>


    @extends('layouts.user')

    @section('link_css')
        <link rel="stylesheet" href="{{asset("css/request.css")}}">
    @endsection

    @section('title')
        <title>Get Services</title>
    @endsection
    @section('user')


        <!----section one---------------------------------grow with us---------------------------------------------------------------------------------->

        <div class="container-fluid bg-dark" style="height: 45vh; padding-top: 90px; color: white; background-image: url({{'images/side2.png'}}); background-size: cover;)">

            <div class="d-flex justify-content-center">
                <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid white;"></span>
                <h2>Grow With Us</h2>
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 18px;">When you choose any of our digital services listed below,<br> you choose a company that is commited about your company's success.</p>

        </div>


        <br><br><br>


        <!--section two----------------------- form Request---------------------------------------------------------------------------------->



        <div class="container">
            <div class="row" >


                <div class="col-xl-8 bg-dark"  style="margin: auto; padding: 50px 50px; border-radius: 10px;">

                    <form method="" action="">


                    <h1 style="text-align: center; color: white">Let's Start</h1>
                    <br><br>

                    <label class="text" for="">Company Name :</label><br>
                    <input class="input" type="text" placeholder="Company Name">

                    <br><br>

                    <label class="text" for="">Company Website :</label><br>
                    <input class="input" type="text" placeholder="Company URL">

                    <br><br>

                    <label class="text" for="">Phone Number :</label><br>
                    <input class="input" type="number" placeholder="Your Phone">


                    <br><br>

                    <!-- annual revenue -->
                    <label class="text" for="">What's your approximate annual revenue ? </label><br>
                    <input class="input" type="number" placeholder="Approximate Profit ?">

                    <br><br>

                    <!-- services -->
                    <label class="text" for="">What DYB service(s) are you interested in ? </label><br>
                    <input class="input" type="text" placeholder="What's your services ?" >

                    <br><br>

                    <label class="text" for="">Description :</label><br>
                    <input class="input" type="text" placeholder="Please, enter more details">

                    <br><br>

                    <label class="text" for="">Date :</label><br>
                    <input class="input" type="date" >


                    <br><br>

                    <label class="text" for="">Time :</label><br>
                    <input class="input" type="time" >


                    <br><br>

                    <!-- comments -->
                    <label class="text" for="" >What topics would you like to discuss during this Meeting ?</label><br>
                    <textarea cols="87" rows="6" placeholder="Do you have any comment ?"></textarea>


                    <br><br><br>


                    <button class="button" type="submit" >
                        Submit
                    </button>


                    </form>
                </div>



            </div>
        </div> <br><br><br><br>











    @endsection


</x-app-layout>
