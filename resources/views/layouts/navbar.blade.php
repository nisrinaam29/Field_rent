<nav class="navbar bg-light navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Field Rent</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sports Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/categorybasket')}}"><i
                                    class="uil uil-basketball me-1"></i>Basketball</a></li>
                        <li><a class="dropdown-item" href="#"><i class="uil uil-football me-1"></i>Football</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('shuttlecock.png') }}"
                                    alt="Icon" class="img-fluid">Badminton</a></li>
                        <li><a class="dropdown-item" href="#"><i class="uil uil-volleyball me-1"></i>Volley</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="uil uil-swimmer me-1"></i>Swimming</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="uil uil-tennis-ball me-1"></i>Tennis</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/products/manage')}}">Manage Fields</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/news')}}">News</a>
                </li>


            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">

                    <button type="button" id="login-button" class="btn btn-outline-light" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                </li>
                <li slass="nav-item">

                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                        data-bs-target="#signupModal">signup</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
