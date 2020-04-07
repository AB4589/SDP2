<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="css/all.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="shortcut icon" href="ffl.png" type="image/x-icon">
    
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title> @yield('title') </title>
    <style>
    
    @yield('style')
    .nav-link:hover{
        color: #09cb09;
    }
    /*hover*/
    .button_slide {
        color: #FFF;
        margin: 0px 2px 0px 2px ;
      /*  border: 2px solid rgb(216, 2, 134);*/
        border-radius: 2px;
        /*padding: 18px 36px;*/
        display: inline-block;


        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: inset 0 0 0 0 #00ff99 00ff99;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }
   



        /* not active */

    .nav-pills .pill-1 .nav-link:not(.active) {
        background-color:  #58d68d ;
    }

    .nav-pills .pill-2 .nav-link:not(.active) {
        background-color: rgba(0, 250, 0, 0.5);
    }

    .nav-pills .pill-3 .nav-link:not(.active) {
        background-color: rgba(0, 0, 250, 0.5);
        color: white;
    }


    /* active (faded) */
    .nav-pills .pill-1 .nav-link {
        background-color:  #58d68d ;
        color: white;
    }

    .nav-pills .pill-2 .nav-link {
        background-color: rgba(0, 250, 0, 0.2);
    }

    .nav-pills .pill-3 .nav-link {
        background-color: rgba(0, 0, 250, 0.2);
        color: white;
    }



    .container {
  position: relative;
  font-family: Arial;
}
	
	.text-block {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

    body{
      font-family: 'Roboto Condensed', sans-serif;
      overflow-x: hidden;

    }

    h1 { margin:150px auto 30px auto; text-align:center; color:#fff;}

    /*Event*/
      .zoom:hover {
        -ms-transform: scale(1.2); /* IE 9 */
        -webkit-transform: scale(1.2); /* Safari 3-8 */
        transform: scale(1.2);
          transition:  0.7s;
      }

    /*Galary*/
    .hi-slide { position: relative; width: 754px; height: 292px; margin: 115px auto 0; }

    .hi-slide .hi-next,
    .hi-slide .hi-prev
    { position: absolute;
      top: 50%;
      width: 40px;
      height: 40px;
      margin-top: -20px;
      border-radius: 50px;
        line-height: 40px;
      text-align: center;
      cursor: pointer;
      background-color: lightskyblue;
      color: black;
      transition: all 0.6s;
      font-size: 20px;
      font-weight: bold;
    }
    .hi-slide .hi-next:hover,
    .hi-slide .hi-prev:hover
    {
      opacity: 1;
      background-color: deepskyblue;
    }

    .hi-slide .hi-prev { left: -60px; }

    .hi-slide .hi-prev::before { content: '<'; }
    .hi-slide .hi-next { right: -60px; }
    .hi-slide .hi-next::before { content: '>'; }

    .hi-slide > ul
    {
      list-style: none;
      position: relative;
      width: 754px;
      height: 292px;
      margin: 0;
      padding: 0;
    }


    .hi-slide > ul > li {
      overflow: hidden;
      position: absolute;
      z-index: 0;
      left: 377px;
      top: 146px;
      width: 0;
      height: 0;
      margin: 0;
      padding: 0;
      border: 3px solid #fff;
      background-color: #333;
      cursor: pointer; }

    .hi-slide > ul > li > img { width: 100%; height: 100%; background-position: center;}
	</style>

	
  </head>
  <body>
      
      

      
  
  
  
   <nav class="navbar navbar-light bg-light">
   <a class="navbar-brand" href="/land" style="font-family: 'sherif';;">
   <img src="ffl.png" width="200" height="50" alt="">
  </a>

       <ul class="nav">
 @if (Auth::guest())
    <a href="{{ url('/login') }}" class="{{ (request()->is('login')) ? 'btn btn-outline-success mr-2' : 'btn btn-primary mr-2' }}" role="submit" aria-label="Search">Login</a>
    <a href="{{ url('/register') }}" class="{{ (request()->is('register')) ? 'btn btn-outline-success ' : 'btn btn-primary ' }}" type="submit">Register</a>

    @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" class="bagde"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
       </ul>
       
  
</nav>
<nav>
<ul class="nav justify-content-end navbar-light bg-light nav-pills font ">
  <li class="nav-item button_slide slide_right {{ (request()->is('land')) ? 'pill-1' : '' }}">
     {{-- <div class="{{ (request()->is('land')) ? 'progress' : '' }}" style="height: 2px;">
          <div class="{{ (request()->is('land')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
      </div>
      <a class="nav-link " href="/land">Home</a>
  </li>
    <li class="nav-item slide_right button_slide {{ (request()->is('donor')) ? 'pill-1' : '' }}">
    <a class="nav-link " href="/donor">Donor</a>
   {{-- <div class="{{ (request()->is('donor')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('donor')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
	
  </li>
  <li class="nav-item {{ (request()->is('organisation')) ? 'pill-1' : '' }}">
    <a class="nav-link " href="/organisation">Organisation</a>
   {{-- <div class="{{ (request()->is('organisation')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('organisation')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
	
  </li>
	<li class="nav-item {{ (request()->is('volunteer')) ? 'pill-1' : '' }}">
    <a class="nav-link " href="/volunteer">Volunteer</a>
   {{-- <div class="{{ (request()->is('volunteer')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('volunteer')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
	</li>

  <li class="nav-item button_slide slide_right {{ (request()->is('blog')) ? 'pill-1' : '' }}">
    <a class="nav-link" href="/blog">Blog</a>
{{--    <div class="{{ (request()->is('blog')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('blog')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
	</li>
  <li class="nav-item button_slide slide_right {{ (request()->is('about')) ? 'pill-1' : '' }}">
    <a class="nav-link " href="/about">About</a>
    {{--<div class="{{ (request()->is('about')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('about')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
  </li>
  <li class="nav-item button_slide slide_right {{ (request()->is('contact')) ? 'pill-1' : '' }}">
    <a class="nav-link " href="/contact">Contact</a>
{{--    <div class="{{ (request()->is('contact')) ? 'progress' : '' }}" style="height: 2px;">
  <div class="{{ (request()->is('contact')) ? 'progress-bar' : '' }}" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
</div>
  </li>

</ul>
</nav>
        
    @yield('home')
    
<div class="container">
     @yield('content')
      </div>
		
	
<!--footer-->

	<!-- Footer -->
<footer class="page-footer font-small unique-color-success" style="background-color:#2c3539; color:white; margin-top:100px;">

  <div style="background-color: #2c3539;">
    <div class="container ">
      
      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">
    
        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic ">
           <span > <a href="#" style="color:#3b5998;" ><i class="fab fa-facebook white-text mr-4 "> </i></a> </span>
          </a>
		  <!--Youtube -->
          <a class="li-ic">
             <span ><a href="#" style="color: #FF0000 ;"> <i class="fab fa-youtube white-text mr-4"></i></a></span>
          </a>
		  

          <!-- Twitter -->
          <a class="tw-ic">
            <span ><a href="#" style="color:#00acee;"><i class="fab fa-twitter white-text mr-4"> </i></a></span>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
          <a href="#" style="color:#db4a39;"> <i class="fab fa-google-plus-g white-text mr-4"> </i><a>
          </a>
          
          <!--Instagram-->
          <a class="ins-ic">
           <span ><a href="#" style="color:#3f729b ;"> <i class="fab fa-instagram white-text"> </i></a></span>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5" >

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">About</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <!-- <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p> -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
      <!--   <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p> -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;">
        <p>
          <i class="fas fa-home mr-3"></i> Chottagram, Chowkbazar, Bangladesh</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +8801841720995 </p>
        <p>
          <i class="fas fa-print mr-3"></i> +8801812345891 </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: All Right Reserved by
    <a href="#">FFL.COM</a>
  </div>
  <!-- Copyright -->
      </div>
    </div>
</footer>
<!-- Footer -->


 <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>


		
		
		

    <!-- Optional JavaScript -->
   {{--carousel--}}

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>