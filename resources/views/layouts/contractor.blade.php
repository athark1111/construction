<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Construction Services</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>


  </head>

  <body>

    
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
          <a class="navbar-brand" href="#"><h2>CONSTRUCTION <em>Services</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="#">Material Rate</a></li>

                <li class="nav-item"><a class="nav-link" href="#">Calculate</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link">FAQs</a>
                </li>
                
               
                     
                    @if (isset(Auth::user()->role) && Auth::user()->role==2)
                   <li class="nav-item dropdown">
                  <a href="#" class="nav-link" data-toggle="dropdown">Profile</a>
                  <ul class="dropdown-menu " role="menu">
                    
                      <form method="POST" action="{{ route('logout') }}" >
                        @csrf
                      <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="nav-icon fa fa-power-off"></i>
                                                {{ __('Logout') }}
                                                </a>
                                                 </form>
                                             </li>
                  </ul>
                </li>
                    @endif
                   
                    @if (!isset(Auth::user()->role))
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                       
            </ul>
            
               
            
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    
      
        <div style="background-image: url('images/banner.jpg'); padding: 300px 0px; background-size: cover; background-repeat:no-repeat;background-position: center center;">
       
        </div>
       <div> @yield('content')</div>
    <!-- Banner Ends Here -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.jss') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.jss') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
  </body>
</html>