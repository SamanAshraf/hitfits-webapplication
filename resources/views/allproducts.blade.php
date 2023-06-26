<!DOCTYPE html>
<html lang="en">

<head>
  <title>HitFits - Checkout</title>
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
        line-height: 20px;
        font-weight: bolder;
        font-style: italic;
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
    border-radius: 50%;
}
.fa-instagram:hover{
    background-color: grey;
    color: white;
    border-radius: 50%;
}
.fa-youtube-square:hover{
    background-color: grey;
    color: white;
    border-radius: 50%;
}
footer{
    background-color: black;
    color: white;
    text-align: center;
    height: 60px;
    padding-top: 20px ;
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

.openbtn:hover {
  /* background-color: #444; */
}


/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
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

/* footer */
.site-footer
{
  background-color:white;
  padding:60px 0 40px;
  font-size:14px;
  line-height:24px;
  color: black;
}
.site-footer hr
{
  border-top-color: black;
  opacity:0.5;
  
}
hr
{
  border-top-color: black;
  opacity:0.5;
}

.site-footer h6
{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  color:black;
  font-size: 17px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px;
}
.site-footer a
{
  color:black;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:black;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:black;
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:black;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:black;
  color:white;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.insta:hover
{
  background-color:#bc4b4bcb
}
.social-icons a.youtube:hover
{
  background-color:#a11c1c
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

.collapsible {
  background-color: white;
  color: black;
  cursor: pointer;
  padding: 0;
  width: 100%;
  border: none;
  outline: none;
  font-size: 14px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: white;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 10px 15px;
  display: none;
  overflow: hidden;
  background-color: white;
  font-size: 12px;
}

.btn-light {
      background: #000;
      color: #fff;
      height: 30pt;
      margin-bottom: 5px;
      width: 100%;
      max-width: 440px;
      margin-top: 20px;
      position: absolute;
      right: 0;
      
   }
    .btn-light:hover {
      background: #fff;
      color: #000;
   }

   

.container {
            padding: 10px;
        }
.col-3 img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
}
.row {
    margin: 0 -5px;
  }
        .col-3 {
        float: left;
        width: 50%;
        padding: 10px;
        }
        .col-6 p {
            font-size: 10pt;
            opacity: 55%;
        }
        .btn-success {
            background: #000;
            color: #fff;
            width: 400PT;
            
        }
            .btn-success:hover {
            background: #fff;
            color: #000;
        }
        .col-6:hover .image {
        opacity: 0.3;
        }

        .col-6:hover .middle {
        opacity: 1;
        }
        .image{
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        right: 50%;
        }

        .middle {
        transition: .5s ease;
        opacity: 0;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        padding-left: 50%;

        }
        .page-btn {

            padding-top: 20px;
            float: right;
            
        }
        .page-btn span {
            display: inline-block;
            border: 1px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
            padding: 10px;
        }
        .page-btn span:hover {
            background-color: black;
            color: white;
        }
        .checked {
            color: gold;
}
@media only screen and (max-width:240px) and (min-width:0px) {
  .col-3 {
      width: 20%;
      font-size: 2px;
  }
  .col-3 h5 {
      font-size: 2px;
  }
  .col-3 p {
      font-size: 2px;
  }
  .btn-success {
            
            width: 35PT;
            height: 2pt;
            margin-left: 35%;
            font-size: 2Px;
  }
  .custom-select {
      padding-right:26%;
  }

}
@media only screen and (max-width:320px) and (min-width:241px) {
  .col-3 {
      width: 38%;
      
  }
  .col-3 img {
      width: 100%;
  }
  .btn-success {
            
            width: 40PT;
            height: 6pt;
            margin-left: 40%;
            font-size: 4Px;
  }
  .custom-select {
      padding-right:26%;
  }

}
@media only screen and (max-width:480px) and (min-width:321px) {
  .col-3 {
      width: 40%;
  }
  .btn-success {
            
            width: 60PT;
            height: 10pt;
            margin-left: 40%;
            font-size: 6Px;
        }
        .custom-select {
      padding-right:23%;
  }

}


@media only screen and (max-width:760px) and (min-width: 481px) {
    .col-3 {
      width: 42%;
  }
  .btn-success {
            
            width: 60PT;
            margin-left: 60%;
            font-size: 7Px;
  }
  .custom-select {
      padding-right:17%;
  }
}


@media only screen and (max-width:992px) and (min-width: 761px) {
    .col-3 {
      width: 43%;
    }
    .btn-success {
            
            width: 100PT;
            margin-left: 50%;
  }
  .custom-select {
      padding-right:15%;
  }

} 


@media only screen and (max-width:1200px) and (min-width: 993px) {
    .col-3 {
      width: 50%;
  }
} 

@media only screen and (min-width: 1201px) {
    .col-3 {
      width: 50%;
  }
  
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

  
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h5>Women T-shirts </h5> <br>
        </div>
        <div class="col-6">
            <div class="select" style="float:right;">
                <select>
                    <option value="0">Sort</option>
                    <option value="1">popularity</option>
                    <option value="2">best selling</option>
                    <option value="3">Low to High</option>
                    <option value="4">High to Low</option>
                </select>
            </div>
        </div>
    </div>
      
    <div class="row">
        
        @foreach ($products as $item)
          @if($item['category']=='WOMEN' && $item['subcategory']=='Tshirts')
          <div class="col-6">
          <a href="SingleProduct/{{$item['id']}}"><img src="{{\Illuminate\Support\Facades\Storage::url($item->img)}}" class="image"></a>
              <div class="middle">
              
                  
                   <a href="{{ route('add.to.cart', $item->id) }}"><button type="submit" class="btn btn-success btn-block">ADD TO CART</button></a>
                  
     
                </div>
              <h4>{{$item['productname']}}</h4>
              <p>PKR {{$item['salesprice']}}</p>
          </div>
          @endif
          @endforeach
    
      </div>
      <div class="page-btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#8594;</span>
      </div>
  </div>
  

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About Us</h6>
          <div class="row">
              <div class="col-sm-12 col-md-12">
                <p>Established in 2003, HitFits is a fashion brand created for the spirited youth of Pakistan who enjoy indulging in the latest lifestyle trends; be it style, music, technology or social networking, as a means to express themselves.
  
                    HitFits has separate product lines in order to cater to all segments and their demands - men, women and juniors.</p>
              </div>
          </div>
          
        </div>
  
        <div class="col-xs-6 col-md-3">
          <h6>Help</h6>
          <ul class="footer-links">
            <li><a href="./login.html">Login/Signup</a></li>
            <li><button type="button" class="collapsible">Payment Methods</button>
              <div class="content">
                <p><b>We offer the following payment methods: COD, VISA, MasterCard and Discount Coupons</b></p>
              </div></li>
            
            <li><button type="button" class="collapsible">Shipping and Deliveries</button>
              <div class="content">
                <p><b>It takes 3-4 business days for your order to be delivered at your doorstep. Orders placed on Saturday and Sunday 
                  or any gazetted holidays will be sent for processing on the next working day. 
                  </b></p>
              </div></li>
              <li><button type="button" class="collapsible">Exchange & Returns</button>
                <div class="content">
                  <p><b>All products purchased from outfitters.com.pk can be exchanged within 14 days of purchase only if
                        The item(s) is faulty, damaged or defective at the time of delivery.</b>
                    </p>
                </div></li>
            
            <li><a href="">Track your order</a></li>
  
          </ul>
        </div>
  
        <div class="col-xs-6 col-md-3">
          <h6>We are HitFits</h6>
          <ul class="footer-links">
          <li><a href="{{url('contactus')}}">Contact Us</a></li>
          <li><a href="/">Home</a></li>
            <li><a href="">Special Price</a></li>
          </ul>
          
        </div>
        
  
      </div>
    </div>
    <div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
       <a href="/">HitFits</a>.
          </p>
        </div>
  
        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="insta" href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a class="youtube" href="#"><i class="fa fa-youtube-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
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

      // collapse 
      
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }
    </script>
</body>
</html>
