@extends('layouts.user')
@section('link_css')
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
@endsection

@section('title')
<title>Home</title>
@endsection


@section('user')
    <div class="container-fluid bg-overlay">
        <div class="row text-center mt-5">
            <div class="col background-content">

                <h1 class="text-uppercase" style="font-size: 60px">experience<br> the best digital
                    <br><span class="text-success">agency</span>
                </h1>
                <span class="text-capitalize">
            we help you to achieve your goals by customizing what is best for you<br> with care and productivity.
        </span><br><br>
                <a class="btn  text-uppercase">discover
                    <i class="fa-solid fa-arrow-right-long ms-3"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    {{--end of the background overlay--}}

    {{--services provide section--}}
    <div class="container service-section">
        <div class="row">
            <div class="col-12 services">
                <p class="text-success" style="font-size: 20px"> <i class="fa-solid fa-minus" style="width:2%"></i>what we can do for you</p>
            </div>
            <div class="col-12">
                <h1 class="text-uppercase">
                    services provide<br>
                    for you
                </h1>
            </div>
        </div><br><br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4 sec-cards">
            <div class="col">
                <div class="card h-100">
                    <i class="fa-solid fa-building fa-2x ms-4 p-3 mt-2 text-success"></i>
                    <div class="card-body">
                        <h5 class="card-title p-2 ms-3 text-uppercase">business <br>strategy</h5>
                        <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is so longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <i class="fa-solid fa-laptop fa-2x ms-4 p-3 mt-2 text-success"></i>
                    <div class="card-body">
                        <h5 class="card-title p-2 ms-3 text-uppercase">website<br>development</h5>
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
    <br><br><br>
    {{--end of service provide section--}}

    {{--start of the images group--}}
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{asset("images/2.jpg")}}" alt="#" class="img-thumbnail">
            </div>
            <div class="col-4">
                <img src="{{asset("images/2.jpg")}}" alt="#" class="img-thumbnail">
            </div>
            <div class="col-4">
                <img src="{{asset("images/2.jpg")}}" alt="#" class="img-thumbnail">
            </div>
        </div>
    </div><br><br><br>
    {{--end of images group--}}

    {{--start of get to know us--}}
    <div class="container knowus" style="height: 50vh">
        <div class="row" style="height: 50vh">
            <div class="col-3 top">
                <img src="{{asset("images/2.jpg")}}" alt="#" height="100">
            </div>
            <div class="col-6 text-center center">
                <p class="text-success" style="font-size: 20px"> <i class="fa-solid fa-minus" style="width:4%"></i>get to know us</p><br>
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
            <div class="col-3 down">
                <img src="{{asset("images/2.jpg")}}" alt="#" height="100">
            </div>
        </div>
    </div><br><br>
    {{--end of get to know us--}}
    {{--start of the overlay background fun fact--}}
    <div class="container-fluid bg-overlayy">
        <div class="row text-center">
            <div class="col">
                <p class="text-success text-uppercase" style="font-size: 20px"> <i class="fa-solid fa-minus" style="width:2%"></i>fun fact</p><br>
                <h1 class="text-uppercase">
                    we're standout<br>
                    experts in the business
                </h1>
            </div>
        </div>
    </div> <br><br><br><br>
    {{--end of the overlay background fun fact--}}

@endsection
