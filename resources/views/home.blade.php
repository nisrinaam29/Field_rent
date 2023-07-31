@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
@include('layouts/navbar')
    <section>
      
        <div class="bg-main">
            
            <div class="container banner">
                <h2 class="text-left">Berolahraga minimal 30 menit sehari mengurangi risiko serangan jantung!</h2>
                <h4 class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
                <div class="main-search">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content1')
    <div class="" style="padding:30px">
        <div class="container">
            <div class="" style="text-align: center; padding-bottom: 30px; padding-top: 50px">
                <h2>Yuk, Pilih Olahragamu!</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="container frame ">
                        <div class="container picture1">
                            <div class="container player1"></div>
                            <a href="{{ url('/categorybasket') }}" class="btn btn-outline-light bmain">Basketball</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container frame ">
                        <div class="container picture2">
                            <button type="button" class="btn btn-outline-light bmain">Football</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="container frame col">
                        <div class="container picture3">
                            <button type="button" class="btn btn-outline-light bmain">Badminton</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container frame ">
                        <div class="container picture4">
                            <button type="button" class="btn btn-outline-light bmain">Volley</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container frame ">
                        <div class="container picture5">
                            <button type="button" class="btn btn-outline-light bmain">Swimming</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container frame">
                        <div class="container picture6">
                            <button type="button" class="btn btn-outline-light bmain">Tennis</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection

@section('footer')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="js/footer.js">
  
  <footer class="container-fluid bg-grey py-5">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 ">
                 <div class="logo-part">
                  <h1>FieldRent</h1>
                    {{-- <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" > --}}
                    <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                    <p>Use this tool as test data for an automated system or find your next pen</p>
                 </div>
              </div>
              <div class="col-md-6 px-4">
                 <h6> About Company</h6>
                 <p>But horizontal lines can only be a full pixel high.</p>
                 <a href="#" class="btn-footer"> More Info </a><br>
                 <a href="#" class="btn-footer"> Contact Us</a>
              </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 px-4">
                 <h6> Help us</h6>
                 <div class="row ">
                    <div class="col-md-6">
                       <ul>
                          <li> <a href="#"> Home</a> </li>
                          <li> <a href="#"> About</a> </li>
                          <li> <a href="#"> Service</a> </li>
                          <li> <a href="#"> Team</a> </li>
                          <li> <a href="#"> Help</a> </li>
                          <li> <a href="#"> Contact</a> </li>
                       </ul>
                    </div>
                    <div class="col-md-6 px-4">
                       <ul>
                          <li> <a href="#"> Cab Faciliy</a> </li>
                          <li> <a href="#"> Fax</a> </li>
                          <li> <a href="#"> Terms</a> </li>
                          <li> <a href="#"> Policy</a> </li>
                          <li> <a href="#"> Refunds</a> </li>
                          <li> <a href="#"> Paypal</a> </li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 ">
                 <h6> Newsletter</h6>
                 <div class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                 </div>
                 <form class="form-footer my-3">
                    <input type="text"  placeholder="search here...." name="search">
                    <input type="button" value="Go" >
                 </form>
                 <p>That's technology limitation of LCD monitors</p>
              </div>
           </div>
        </div>
     </div>
  </div>
  </footer>
  

@endsection
