<!DOCTYPE html>
<html lang="en">

<head>
  <title>HitFits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    *{
      margin: 0;
      padding: 0;
      
    }
 
    .navbar{
        position: relative;
        display: flex;
        padding-top: 25px;
        
        }
     .icons{
        display: inline-block;
        padding: 2px 5px;
        font-size: 20px;
        text-decoration: none;
        color: black;
        line-height: 20px;
    }
    nav ul li a{
        color:black;
        letter-spacing: 1px;
        line-height: 20px;
    }
    
    .title{
        margin-left: 50%;
        
    }
    .nav-ti{
        font-size: 40px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        letter-spacing:0.1cm;
        font-style: italic;
        line-height: 20px;
        
        font-weight: bolder;
        color: black;
        text-decoration: none;
        
    }
    .carousel-item{
        position: relative;
    }
    #con1{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 40px;
        text-align: center;
        
    }
    .ci1{
        font-family:sans-serif;
        font-size: 30px;
        color: black;
        text-decoration: none;
        font-weight: bold;
        padding-right: 20px;
    }
    a:hover{
    text-decoration: none;
    color: black;
    }
    .carousel-control-next,
.carousel-control-prev /*, .carousel-indicators */ {
    filter: invert(100%);
    
}
.tt{
    position: absolute;
    padding-top: 40px;
}
#con2{
   
    text-align: center;
    left: 0;
    right: 0;
    
}
h4{
    color: rgb(76, 76, 76);
    margin-top: 20px;
   
}
.fa-facebook-square:hover{
    background-color: grey;
    color: white;
    border-radius: 100%;
}
.fa-instagram:hover{
    background-color: grey;
    color: white;
    border-radius: 100%;
}
.fa-youtube-square:hover{
    background-color: grey;
    color: white;
    border-radius: 100%;
}
.fa-twitter:hover{
    background-color: grey;
    color: white;
    border-radius: 100%;
}
footer{
    background-color: black;
    color: white;
    text-align: center;
    height: 60px;
    padding-top: 20px ;
    margin-top: 10px;
    width: 100%;
}
.navbar li a i {
  font-size:24px ; color: black; height: 30px; padding-right: 10px;
}

@media screen and (max-width: 1200px) {
 #filler{
   min-height: 50vh;
 }
 .ci1{
   font-size: 20px;
   padding-right: 10px;
 }
 .nav-ti{
   font-size: 25px;
   font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    letter-spacing:0.1cm;
    font-style: italic;
 }
 .navbar li a i {
  font-size:22px ; color: black; height: 30px; padding-right: 10px; padding-top: 5px; 
}
footer{
  font-size: 10px;
}
}

.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
/* .sidebar a:hover {
  color: #f1f1f1;
} */

/* Position and style the close button (top right corner) */
 .sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: black;
  font-weight: bold;
}
.heading{
  color: black;
  font-weight: bold;
  position: absolute;
  font-size: 50px;
  top:0;
  margin-top: 10px;
   
}
.title{
  position: relative;
}


/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  color: black;
  padding: 10px 15px;
  border: none;
  background-color: white;
  font-weight: bold;
}
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}

  
}
.active {
    display: block;
    opacity: 1;
}
.subcat{
  margin-left: 35px;
}

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
}

/* The content */
.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

/* Close button */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

/* Style the search field */
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[tyhepe=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
.title11{
  text-align:center; padding:30px; color:black;
}
.title11::after{
  content: '';
  background-color: black;
  width: 80px;
  height: 5px;
  border-radius: 5px;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%);
}
.products{
  text-align: center;
  transition: transform 0.5s;
}

.products:hover{
  transform: translateY(-15px);
}
@media screen and (min-width:750) and (max-width: 1000px) {
  
  .products{
    margin-left: -20px;
  }
}
.fp{
  color: black;
}


  </style>
</head>

<body>

  <nav class="navbar navbar-light bg-light bg-white py-0"  id="nav">
    
    <div id="main">
      <button class="openbtn" onclick="openNav()">&#9776;</button>
    </div>

    <div id="mySidebar" class="sidebar">


      <a href="/" class="heading" style=" font-size: 30px;">HitFits</a>


      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
    
     
      <ul class="list-unstyled components">
        <li class="active">
            <a href="#menSubmenu" data-toggle="collapse" aria-expanded="false" style="padding-top: 20px; ">MEN</a>
            <ul class="collapse list-unstyled" id="menSubmenu">
                <li class="subcat" style="font-weight: bold;">
                  <a href="{{url('ALLMEN')}}">View All</a>
                </li>
                <li class="subcat">
                    <a href="{{url('MENALLPRODUCTS')}}">T Shirts</a>
                </li>
                <li class="subcat">
                    <a href="{{url('MENTrousers')}}">Trousers</a>
                </li>
            </ul>
          </li>
          <li>
            <a href="#womenSubmenu" data-toggle="collapse" aria-expanded="false" style="padding-top: 30px; ">WOMEN</a>
            <ul class="collapse list-unstyled" id="womenSubmenu">
                <li class="subcat" style="font-weight: bold;">
                  <a href="{{url('ALLWOMEN')}}">View All</a>
                </li>
                <li class="subcat">
                    <a href="{{url('allproducts')}}">T Shirts</a>
                </li>
                <li class="subcat">
                    <a href="#">Trousers</a>
                </li>
             
            </ul>
          </li>
          <li>
            <a href="#juniorsSubmenu" data-toggle="collapse" aria-expanded="false" style="padding-top: 30px;">JUNIORS</a>
            <ul class="collapse list-unstyled" id="juniorsSubmenu">
                <li class="subcat" style="font-weight: bold;">
                  <a href="{{url('ALLKIDS')}}">View All</a>
                </li>
                <li class="subcat">
                    <a href="{{url('KIDSPRODUCT')}}">T Shirts</a>
                </li>
                <li class="subcat">
                    <a href="#">Trousers</a>
                </li>
              
            </ul>
          </li>
      </ul>  
   
      <a href="#">NEW IN</a>
      <a href="#" style="color: red;">SPECIAL PRICE</a>
      
    </div>
    
    
    <a href="/" class="nav-ti">HitFits</a>
    
    
        <ul class="navbar">
          <li class="icons " id="search"><a href="#"><i class="fa fa-search" aria-hidden="true" class="" onclick="openSearch()"> </i></a>
            <div id="myOverlay" class="overlay">
              <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
              <div class="overlay-content">
                <form action="action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
          </li>
          @if(session()->has('LoggedUser'))
            <li class="icons"><a href="{{url('account')}}"><i class="fa fa-user" aria-hidden="true" style=""></i></a></li>
          @endif
          
          @if(!session()->has('LoggedUser'))
            <li class="icons"><a href="{{url('login')}}"><i class="fa fa-user" aria-hidden="true" style=""></i></a></li>
          @endif

          <li class="icons"><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag" aria-hidden="true" style=""></i><span class="badge badge-pill">{{ count((array) session('cart')) }}</span></a></li>
        </ul>
      
  </nav>
 

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> 
        <img class="d-block w-100" src="{{URL::asset('/assests/abc1.png')}}" alt="First slide" >
        <div class="container" id="con1">
            <a class="ci1" href="{{url('ALLMEN')}}" style="color: rgb(76, 76, 76);">MEN</a>
            <a class="ci1" href="{{url('ALLWOMEN')}}">WOMEN</a>
            <a class="ci1" href="{{url('ALLKIDS')}}">JUNIORS</a>
        </div>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="tt">Women</span>
        </a>
        
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{URL::asset('/assests/abc2.png')}}" alt="Second slide">
        <div class="container" id="con1">
            <a class="ci1" href="{{url('ALLMEN')}}" >MEN</a>
            <a class="ci1" href="{{url('ALLWOMEN')}}"style="color: rgb(76, 76, 76);">WOMEN</a>
            <a class="ci1" href="{{url('ALLKIDS')}}">JUNIORS</a>
        </div>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="tt">Juniors</span>
          </a>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="tt">Men</span>
        </a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{URL::asset('/assests/abc3.png')}}" alt="Third slide">
        <div class="container" id="con1">
            <a class="ci1" href="{{url('ALLMEN')}}">MEN</a>
            <a class="ci1" href="{{url('ALLWOMEN')}}">WOMEN</a>
            <a class="ci1" href="{{url('ALLKIDS')}}" style="color: rgb(76, 76, 76);">JUNIORS</a>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="tt">Women</span>
        </a>
      </div>
    </div>
  
  </div>
  <div class="container mx-auto" style="padding:30px;">
    <div class="">
      <div class="col-12">
        <h3 class="title11">Featured Products</h3>
      </div>
    </div>
    <div class="row fpd" style=" padding-top: 30px;">
      <div class="mx-auto col-lg-3 col-md-12 col-sm-12 col-xs-12">
        <a class="fp" href="./MENTEE2.HTML"><div class="products ">
          <img src="{{URL::asset('/assests/1.png')}}" alt="" class="mx-auto d-block" style="width: 250px; height: 300px;">
          <h6>Regular Fit New Code Graphic Button Down Shirt</h6>
          <p>RS 2000</p>
          </div></a>
        
      </div>
      <div class="col-lg-1 col-md-3 col-sm-12 col-sm-12">

      </div>
      <div class="mx-auto col-lg-3 col-md-12 col-sm-12 col-xs-12">
       <a  class="fp" href="./womentee2.html"> <div class="products">
        <img src="{{URL::asset('/assests/multicolor1.webp')}}" class="mx-auto d-block" alt="" style="width: 250px; height: 300px;">
        <h6>Regular Fit Good Vibes Tee </h6>
        <p>RS 1490</p>
      </div></a>
      </div>
      <div class="col-lg-1 col-md-3 col-sm-12 col-sm-12">
        
      </div>
      <div class="mx-auto col-lg-3 col-md-12 col-sm-12 col-xs-12">
        <a  class="fp" href="./Kidtee1.html"><div class="products">
          <img src="{{URL::asset('/assests/ktee1.webp')}}" class="mx-auto d-block" alt="" style="width: 250px; height: 300px; ">
          <h6>Snoopy Printed Tee</h6>
          <p>RS 2290</p>
        </div></a>
      </div>
      <div class="col-lg-1 col-md-3 col-sm-12 col-sm-12">
        
      </div>
    </div>
  </div>
  <div class="container" id="con2">
    <div class="row">
      <div class="col-12">
          <h4 style="padding-top: 15px;">Be A Part of Our Social Family</h4>
      </div>
      
    </div>
 </div>
    <div class="container" id="con2">
        <div class="row">
          <div class="col-12">
            <i class="fa fa-facebook-square" id="icn" aria-hidden="true" style="font-size: 30px; padding: 13px;"></i>
            <i class="fa fa-instagram" id="icn" aria-hidden="true" style="font-size: 30px; padding: 13px;"></i>
            <i class="fa fa-youtube-square" id="icn"  aria-hidden="true" style="font-size: 30px; padding: 13px;"></i>
            <i class="fa fa-twitter" id="icn"  aria-hidden="true" style="font-size: 30px; padding: 13px;"></i>
        </div>
        </div>

    </div>
    
    <footer>
        <div >© Copyright 2022 by Outfitters. All Rights Reserved.</div>
    </footer>
    <script>
      function openNav() {
        if  (screen.width >= 1200) {
        document.getElementById("mySidebar").style.width = "500px";
        }else{
          document.getElementById("mySidebar").style.width = "99%";
        }
        document.getElementById("main").style.marginLeft = "0";
        }

      /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }

            function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
      }

      // Close the full screen search box
      function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
      }
    </script>
</body>
</html>
