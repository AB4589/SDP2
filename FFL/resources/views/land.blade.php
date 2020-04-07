@extends('layouts.app')
@section('title', 'Home | FOOD FOR LIFE')
@section('style')

.big:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

/////////////////////////////////
//button Five
///////////////////////////////


.btn-5 {
border: 0 solid;
box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
outline: 1px solid;
outline-color: rgba(255, 255, 255, .5);
outline-offset: 0px;
text-shadow: none;
transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
}

.btn-5:hover {
border: 1px solid;
box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
outline-color: rgba(255, 255, 255, 0);
outline-offset: 15px;
text-shadow: 1px 1px 2px #427388;
}
{{--.button {
display: block;
width: 200px;
height: 60px;
position: relative;
font-family: arial;
}

.button div {
width: 100%;
height: 100%;
position: absolute;
line-height: 60px;
text-align: center;
transform-origin: 50% 50% -30px;
transition: all .2s ease;
backface-visibility: hidden;
}

.button :nth-child(1) {
color:  #fff;
background-color: #58d68d;
transform: rotateX(90deg);
}

.button :nth-child(2) {
background-color: #007bff;
color: white;
transform: rotateX(0deg);
}

.button:hover :nth-child(1) {
transform: rotateX(0deg);
}

.button:hover :nth-child(2) {
transform: rotateX(-90deg);
}--}}
@endsection
@section('home')
 


		<div id="carouselExampleSlidesOnly container" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner parent position-relative">
    <div class="carousel-item active  " data-interval="5000">
        <img src="img/hungry.jpeg" class="d-block w-100" alt="..."  width="640" height="500">
		
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="img/hungry2.jpeg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="img/hungry3.jpeg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
  </div>
</div>
	
<div class="text-center">
<div class="text-block " style="">
	<p  class="h2"; style="background-color:black; opacity:60%"  >Remove Hunger, Save Lives </p>
    <a href="/donate" type="button" role="button" class="btn btn-primary btn-5">
        Donate Food{{--<div>Donate Food</div><div>Donate Food</div>--}}
    </a>
	</div>
</div>

<!-- Event-->

	<div class="row "  style="margin-top: 100px;">
	
	<div class="col-sm-4 text-center bg-white  " ><figure class="shadow rounded  "><a href="#"\ style="font-size: 150px; color: Dodgerblue;
"><i class="fas fa-people-carry zoom"></i></a><figcaption >Volunteers</figcaption></figure></div>
	
	<div class="col-sm-4 text-center bg-white "><figure class="shadow rounded"><a href="#" class="" style="font-size: 150px; color: Dodgerblue;"><i class="fas fa-blog zoom"></i></a><figcaption>Blog</figcaption></figure> </div>
	<div class="    col-sm-4 text-center  bg-white   "><figure class="shadow rounded"><a href="#" style="font-size: 150px; color: Dodgerblue;"><i class="far fa-calendar-alt zoom"></i></a><figcaption>Event</figcaption></figure></div>

	</div>







<!--image Galary-->
      <div class="text-center h1" style="margin-top: 100px;">Gallary</div>
        <div class="slide hi-slide " style="margin-top: 25px;">
            <div class="hi-prev "></div>
            <div class="hi-next "></div>
            <ul>
                <li><img src="img/1.jpg" alt="Img 1" /></li>
                <li><img src="img/2.jpg" alt="Img 2" /></li>
                <li><img src="img/3.jpg" alt="Img 3" /></li>
                <li><img src="img/4.jpg" alt="Img 4" /></li>
                <li><img src="img/5.jpg" alt="Img 5" /></li>
                <li><img src="img/6.jpg" alt="Img 6" /></li>
                <li><img src="img/7.jpg" alt="Img 7" /></li>
                <li><img src="img/8.jpg" alt="Img 7" /></li>
            </ul>
        </div>



        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.hislide.js" ></script>
        <script>
            $('.slide').hiSlide();
        </script>



  
  
   
   
   @endsection

		
		
		
   