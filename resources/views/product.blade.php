@extends('layouts/app')

@section('title', 'Product Page')


@section('content')
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="js/carousel.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    {{-- https://www.youtube.com/watch?v=1BHKhGuEItc --}}
    {{-- https://github.com/emre-sezer/ProductSlider/blob/main/style.css --}}
    <!-- Include Bootstrap CSS -->
 
      
        <!-- Add any additional information you want to display about the product -->
    
 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

            <div class="">
                @include('layouts/navbar')
                <section class="product-slider-section">
                    <div class="container">
                        <div id="productslider" class="carousel slide">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="carousel-inner">




                                                <div class="carousel-item active zoom-image">
                                                    <img src="picture/shuttlecock.png" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>

                                                <div class="carousel-item   zoom-image">
                                                    <img src="img2.jpg" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>

                                                <div class="carousel-item   zoom-image">
                                                    <img src="img3.jpg" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>

                                                <div class="carousel-item   zoom-image">
                                                    <img src="img4.jpg" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>

                                                <div class="carousel-item   zoom-image">
                                                    <img src="img5.jpg" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>

                                                <div class="carousel-item   zoom-image">
                                                    <img src="img6.jpg" class="img-fluid">
                                                    <span class="sale-span">Sale</span>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <ol class="carousel-indicators position-static m-0 justify-content-start">

                                                <li data-target="#productslider" data-slide-to="0" class="active">
                                                    <div class="data-slide-image">
                                                        <img src="img1.jpg" class="img-fluid">
                                                    </div>
                                                </li>

                                                <li data-target="#productslider" data-slide-to="1">
                                                    <div class="data-slide-image">
                                                        <img src="img2.jpg" class="img-fluid">
                                                    </div>
                                                </li>

                                                <li data-target="#productslider" data-slide-to="2">
                                                    <div class="data-slide-image">
                                                        <img src="img3.jpg" class="img-fluid">
                                                    </div>
                                                </li>

                                                <li data-target="#productslider" data-slide-to="3">
                                                    <div class="data-slide-image">
                                                        <img src="img4.jpg" class="img-fluid">
                                                    </div>
                                                </li>

                                                <li data-target="#productslider" data-slide-to="4">
                                                    <div class="data-slide-image">
                                                        <img src="img5.jpg" class="img-fluid">
                                                    </div>
                                                </li>

                                                <li data-target="#productslider" data-slide-to="5">
                                                    <div class="data-slide-image">
                                                        <img src="img6.jpg" class="img-fluid">
                                                    </div>
                                                </li>


                                            </ol>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-4 col-md-4">
                                    <h3 class="product-name">{{ $product->name }}</h3>
                                    <p class="price">
                                        <span class="old-price">$20.00</span>
                                        <span class="new-price">$15.00</span>
                                    </p>

                                    <p>
                                        
                                    </p>

                                    <div class="d-flex">
                                        <button class="add-to-cart-btn">
                                            <span>Add To Cart</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                </section>
                <section>
                    <div class="bg-secondary"style="padding:30px">
                        <div class="container d-flex">
                            <div class="container">
                                <div class="bg-primary">
                                    <h1>Open Hours</h1>
                                </div>
                                <div>
                                    <p></p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="bg-primary">
                                    <h1>Open Hours</h1>
                                </div>
                                <div>
                                    <p>alamatatttdgvdfofgojfdsogkldfjbgsdl</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="bg-primary">
                                    <h1>Open Hours</h1>
                                </div>
                                <div>
                                    <p>alamatatttdgvdfofgojfdsogkldfjbgsdl</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   



    </div>


@endsection




@section('content1')



    <div class="">@include('layouts/form')</div>




@endsection

{{-- @section('footer')
    
        @include('layouts.foot')
   
       
    @endsection --}}
