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

        <div class="container-fluid bg-dark imgg" >

            <div class="d-flex justify-content-center">
                <span style="width: 50px; height: 0; margin-top: 20px; margin-right: 20px; border: 2px solid white;"></span>
                <h2>Grow With Us</h2>
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 18px;">When you choose any of our digital services listed below,<br> you choose a company that is commited about your company's success.</p>

        </div>


        <br><br><br>


        <!--section two----------------------- form Request---------------------------------------------------------------------------------->



        @if(session()->has('success'))
            <p class="container alert alert-success mt-3 text-center">
                {{session()->get('success')}}
            </p>
        @endif


        <div class="container" style="background-image: url({{'../images/Gear2.png'}}); background-size: contain;">
            <div class="row" >
                <div class="col-xl-8 bg-dark"  style="margin: auto; padding: 50px 50px; border-radius: 10px;">


                    <form action="{{route('userservice.store')}}" method="POST" >
                        @csrf
                    <h1 style="text-align: center; color: white">Let's Start</h1>
                        @if ($errors->any())
                            <div class="container alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <br><br>

                    <label class="text" for="">Company Name :</label><br>
                    <input class="input" type="text" placeholder="Company Name" name="companyname">

                    <br><br>

                    <label class="text" for="">Company Website :</label><br>
                    <input class="input" type="text" placeholder="Company URL" name="companywebsite">

                    <br><br>

                    <label class="text" for="">Phone Number :</label><br>
                    <input class="input" type="number" placeholder="Your Phone" name="phone">


                    <br><br>

                    <!-- annual revenue -->
                    <label class="text" for="">What's your approximate annual revenue ? </label><br>
                    <input class="input" type="number" placeholder="Approximate Profit ?" name="annualrevenues">

                    <br><br>

                    <!-- services -->
                    <label class="text" for="">What DYB service(s) are you interested in ? </label><br>
                    <input class="input" type="text" placeholder="What's your services ?" name="service">

                    <br><br>

                    <label class="text" for="">Description :</label><br>
                    <input class="input" type="text" placeholder="Please, enter more details" name="description">

                    <br><br>

                    <label class="text" for="">Meeting Date :</label><br>
                    <input class="input" type="date" name="date">


                    <br><br>

                    <label class="text" for="">Meeting Time :</label><br>
                    <input class="input" type="time" name="time">


                    <br><br>

                    <!-- comments -->
                    <label class="text" for="" >What topics would you like to discuss during this Meeting ?</label><br>
                    <textarea cols="87" rows="6" placeholder="Do you have any comment ?" name="comments"></textarea>


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
