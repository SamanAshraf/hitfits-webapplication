<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Document</title>
</head>
<style>
  *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    
    }
    .sidebar{
      position: fixed;
      height: 100%;
      width: 240px;
      background: #0A2558;
      transition: all 0.5s ease;
    }
    .sidebar.active{
      width: 60px;
    }
    .sidebar .logo-details{
      height: 80px;
      display: flex;
      align-items: center;
    }
    .sidebar .logo-details i{
      font-size: 36px;
      font-weight: 500;
      color: #fff;
      min-width: 60px;
      text-align: center;
    }
    .sidebar .logo-details .logo_name{
      color: #fff;
      font-size: 30px;
      font-weight: 500;
      padding-left: 25pt;
    
    }
    .sidebar .nav-links{
      margin-top: 10px;
    }
    .sidebar .nav-links li{
      position: relative;
      list-style: none;
      height: 50px;
    }
    .sidebar .nav-links li a{
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
    }
    .sidebar .nav-links li a.active{
      background: #081D45;
    }
    .sidebar .nav-links li a:hover{
      background: #081D45;
    }
    .sidebar .nav-links li i{
      min-width: 60px;
      text-align: center;
      font-size: 18px;
      color: #fff;
    }
    .sidebar .nav-links li a .links_name{
      color: #fff;
      font-size: 15px;
      font-weight: 400;
    }
    .sidebar .nav-links .log_out{
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    .home-section{
      position: relative;
      background: #f5f5f5;
      min-height: 100vh;
      width: calc(100% - 240px);
      left: 240px;
      transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section{
      width: calc(100% - 60px);
      left: 60px;
    }
    .home-section nav{
      display: flex;
      justify-content: space-between;
      height: 80px;
      background: #fff;
      display: flex;
      align-items: center;
      position: fixed;
      width: calc(100% - 240px);
      left: 240px;
      z-index: 100;
      padding: 0 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section nav{
      left: 60px;
      width: calc(100% - 60px);
    }
    .home-section nav .sidebar-button{
      display: flex;
      align-items: center;
      font-size: 24px;
      font-weight: 500;
    }
    nav .sidebar-button i{
      font-size: 35px;
      margin-right: 10px;
    }
    .home-section nav .search-box{
      position: relative;
      height: 50px;
      max-width: 550px;
      width: 100%;
      margin: 0 20px;
    }
    nav .search-box input{
      height: 100%;
      width: 100%;
      outline: none;
      background: #F5F6FA;
      border: 2px solid #EFEEF1;
      border-radius: 6px;
      font-size: 18px;
      padding: 0 15px;
    }
    nav .search-box .bx-search{
      position: absolute;
      height: 40px;
      width: 40px;
      background: #2697FF;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      border-radius: 4px;
      line-height: 40px;
      text-align: center;
      color: #fff;
      font-size: 22px;
      transition: all 0.4 ease;
    }
    
    .home-section .home-content{
      position: relative;
      padding-top: 104px;
    }
    .btn-light {
      background: #0A2558;
      color: #fff;
      height: 30pt;
      margin-bottom: 5px;
      width:1050px;
      height:45px;
      
   }
    .btn-light:hover {
      background: #fff;
      color: #0A2558;
   }
   .row {
    padding-top:60px;
   }
        .h2 {  
            border: 1px solid;
            text-align: center;
            padding: 10px;
            margin-top: 60PX;
            margin-bottom: -1Px;
            font-family: sans-serif;
            font-family: monospace;
        }
        .h1 {
            border-bottom-color: black;
        border-bottom-style: groove;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        letter-spacing:0.1cm;
        margin-top: 40pt;
        text-align: left;
        left: 0;
        margin-top: -3px;
        }

.container {
  border-radius: 5px;
  padding: 30px;
  color: #000;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.form-container label {
  margin: 5px 10px 5px 0;
}

.form-container input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
  width: 1050px;
}
</style>
<body>
<div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">HitFits</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{url('dashboard')}}">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('Addproduct')}}" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add product</span>
          </a>
        </li>
        <li>
        <a href="{{url('list')}}">
          <i class='bx bx-list-ul' ></i>
          <span class="links_name">Product list</span>
        </a>
      </li>
        <li>
          <a href="{{url('Manageproducts')}}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <!-- <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li> -->
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Add product</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

    <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-container">
          <form action="addpro" method="POST" enctype="multipart/form-data" class="form-container" name="Myform">
              @csrf
              
                  <div class="form-group">
                  <label for="photo">Select images </label>
                  <input type="file" id="img" name="photo" accept="">
                  <input type="file" id="img1" name="photo1" accept="">
                  <input type="file" id="img2" name="photo2" accept="">
                  <input type="file" id="img3" name="photo3" accept="">
                  </div>

                  <div class="form-group">
                  <label for="pname">Product Name  <span>*</span></label>
                  <input type="text" class="form-control" id="pname" placeholder="Enter Product Name" name="pname">
                  <small id="validpname" class="form-text text-muted invalid-feedback">
                    <p style="color: red;">Product name should not start with a number</p>
                   </small>
                   </div>

                   <div class="form-group">
                    <label for="sname">Sales Price  <span>*</span></label>
                    <input type="text" class="form-control" id="sname" placeholder="Enter Sales Price" name="sname">
                    <small id="validsname" class="form-text text-muted invalid-feedback">
                      <p style="color: red;">Enter product price in correct pattern </p>
                     </small>
                   </div>

                   <div class="form-group">
                    <label for="Size"> Size <span>*</span></label>
                    <input type="text" class="form-control" id="size" placeholder="Enter Size" name="size">
                    <small id="validsize" class="form-text text-muted invalid-feedback">
                      <p style="color: red;">Enter correct size</p>
                     </small>
                    </div>

                    <div class="form-group">
                  <label for="category">Category: <span>*</span> </label>
                  <select id="category" name="category" style="width: 1040px;">
                    <option value="MEN">MEN</option>
                    <option value="WOMEN">WOMEN</option>
                    <option value="JUNIORs">JUNIORS</option> 
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="subcategory">Sub Category:<span>*</span></label>
                  <select id="subcategory" name="subcategory" style="width: 1040px;">
                    <option value="Tshirts">T Shirts</option>
                    <option value="Trousers">Trousers</option>
                    <option value="Jackets">Jackets</option> 
                  </select>
                  </div>
                    <div class="form-group">
                    <label for="color"> color  <span>*</span></label>
                    <input type="text" class="form-control" id="color" placeholder="Enter Color" name="color">
                    <small id="validcolor" class="form-text text-muted invalid-feedback">
                      <p style="color: red;">Enter correct Color</p>
                     </small>
                    </div>
                    
                    <div class="form-group">
                    <label for="desc"> description  <span>*</span></label>
                    <input style="height:110px;" type="text" class="form-control" id="num" placeholder="....." name="descp">
                  </div>
                  
                  
                  <button type="submit" class="btn btn-light btn-block" id="submit">Add Product</button>  
              
     
                  
                </form>
          </div>
      </div>
  </div>
</div>
  <script>
    /* 
    const pname = document.getElementById("pname");
    const sname = document.getElementById("sname");
    const description = document.getElementById("description");
    const size = document.getElementById("size");
    const color = document.getElementById("color");

    let validpname = false;
    let validsname = false;
    let validdescription = false;
    let validsize = false;
    let validcolor = false;
    $('#success').hide();
    $('#failure').hide();

    pname.addEventListener('blur', () => {
    let regex = /^[A-Za-z]([a-zA-Z]){2,30}$/;
    let str = pname.value;
    if (regex.test(str)) {
    pname.classList.remove('is-invalid');
    validpname = true;
    }
    else {
    pname.classList.add('is-invalid');
    validpname = false;
    }
})

sname.addEventListener('blur', () => {
let regex = /^[0-9]([0-9a-zA-Z]){2,30}$/;
let str = sname.value;
if (regex.test(str)) {
sname.classList.remove('is-invalid');
validsname = true;
}
else {
sname.classList.add('is-invalid');
validsname = false;
}
})

size.addEventListener('blur', () => {
let regex =  /^[A-Za-z]([a-zA-Z]){2,30}$/;
let str = size.value;
if (regex.test(str)) {
size.classList.remove('is-invalid');
validsize = true;
}
else {
size.classList.add('is-invalid');
validsize = false;
}
})

color.addEventListener('blur', () => {
let regex =  /^[A-Za-z]([a-zA-Z]){2,30}$/;
let str = size.value;
if (regex.test(str)) {
size.classList.remove('is-invalid');
validsize = true;
}
else {
size.classList.add('is-invalid');
validsize = false;
}
}) */

/*
let submit = document.getElementById("submit");
submit.addEventListener('click', (e)=> {
e.preventDefault();

if(validpname && validsname && validsize && validcolor){
let success = document.getElementById("success");
success.classList.add("show");
$('#failure').hide();
$('#success').show();
}
else {
let failure = document.getElementById("failure");
failure.classList.add("show");
$('#success').hide();
$('#failure').show();
}
})
*/

</script>
</body>
</html>