<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
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
    .home-content .overview-boxes{
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px;
      margin-bottom: 26px;
    }
    .overview-boxes .box{
      display: flex;
      align-items: center;
      justify-content: center;
      width: calc(100% / 4 - 15px);
      background: #fff;
      padding: 15px 14px;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .overview-boxes .box-topic{
      font-size: 20px;
      font-weight: 500;
    }
    .home-content .box .number{
      display: inline-block;
      font-size: 35px;
      margin-top: -6px;
      font-weight: 500;
    }
    .home-content .box .indicator{
      display: flex;
      align-items: center;
    }
    .home-content .box .indicator i{
      height: 20px;
      width: 20px;
      background: #8FDACB;
      line-height: 20px;
      text-align: center;
      border-radius: 50%;
      color: #fff;
      font-size: 20px;
      margin-right: 5px;
    }
    .box .indicator i.down{
      background: #e87d88;
    }
    .home-content .box .indicator .text{
      font-size: 12px;
    }
    .home-content .box .cart{
      display: inline-block;
      font-size: 32px;
      height: 50px;
      width: 50px;
      background: #cce5ff;
      line-height: 50px;
      text-align: center;
      color: #66b0ff;
      border-radius: 12px;
      margin: -15px 0 0 6px;
    }
    .home-content .box .cart.two{
       color: #2BD47D;
       background: #C0F2D8;
     }
    .home-content .box .cart.three{
       color: #ffc233;
       background: #ffe8b3;
     }
    .home-content .box .cart.four{
       color: #e05260;
       background: #f7d4d7;
     }
    .home-content .total-order{
      font-size: 20px;
      font-weight: 500;
    }
    .home-content .sales-boxes{
      display: flex;
      justify-content: space-between;
    }
    
    .home-content .sales-boxes .recent-sales{
      width: 65%;
      background: #fff;
      padding: 20px 30px;
      margin: 0 20px;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .home-content .sales-boxes .sales-details{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .sales-boxes .box .title{
      font-size: 24px;
      font-weight: 500;
      /* margin-bottom: 10px; */
    }
    .sales-boxes .sales-details li.topic{
      font-size: 20px;
      font-weight: 500;
    }
    .sales-boxes .sales-details li{
      list-style: none;
      margin: 8px 0;
    }
    .sales-boxes .sales-details li a{
      font-size: 18px;
      color: #333;
      font-size: 400;
      text-decoration: none;
    }
    .sales-boxes .box .button{
      width: 100%;
      display: flex;
      justify-content: flex-end;
    }
    .sales-boxes .box .button a{
      color: #fff;
      background: #0A2558;
      padding: 4px 12px;
      font-size: 15px;
      font-weight: 400;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .sales-boxes .box .button a:hover{
      background:  #0d3073;
    }
    
    .home-content .sales-boxes .top-sales{
      width: 35%;
      background: #fff;
      padding: 20px 30px;
      margin: 0 20px 0 0;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .sales-boxes .top-sales li{
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 10px 0;
    }
    .sales-boxes .top-sales li a img{
      height: 40px;
      width: 40px;
      object-fit: cover;
      border-radius: 12px;
      margin-right: 10px;
      background: #333;
    }
    .sales-boxes .top-sales li a{
      display: flex;
      align-items: center;
      text-decoration: none;
    }
    .sales-boxes .top-sales li .product,
    .price{
      font-size: 17px;
      font-weight: 400;
      color: #333;
    }
    @media (max-width: 1240px) {
      .sidebar{
        width: 60px;
      }
      .sidebar.active{
        width: 220px;
      }
      .home-section{
        width: calc(100% - 60px);
        left: 60px;
      }
      .sidebar.active ~ .home-section{
    
        overflow: hidden;
        left: 220px;
      }
      .home-section nav{
        width: calc(100% - 60px);
        left: 60px;
      }
      .sidebar.active ~ .home-section nav{
        width: calc(100% - 220px);
        left: 220px;
      }
    }
    @media (max-width: 1150px) {
      .home-content .sales-boxes{
        flex-direction: column;
      }
      .home-content .sales-boxes .box{
        width: 100%;
        overflow-x: scroll;
        margin-bottom: 30px;
      }
      .home-content .sales-boxes .top-sales{
        margin: 0;
      }
    }
    @media (max-width: 1000px) {
      .overview-boxes .box{
        width: calc(100% / 2 - 15px);
        margin-bottom: 15px;
      }
    }
    @media (max-width: 700px) {
      nav .sidebar-button .dashboard,
      nav .profile-details .admin_name,
      nav .profile-details i{
        display: none;
      }
      .home-section nav .profile-details{
        height: 50px;
        min-width: 40px;
      }
      .home-content .sales-boxes .sales-details{
        width: 560px;
      }
    }
    @media (max-width: 550px) {
      .overview-boxes .box{
        width: 100%;
        margin-bottom: 15px;
      }
      .sidebar.active ~ .home-section nav .profile-details{
        display: none;
      }
    }
      @media (max-width: 400px) {
      .sidebar{
        width: 0;
      }
      .sidebar.active{
        width: 60px;
      }
      .home-section{
        width: 100%;
        left: 0;
      }
      .sidebar.active ~ .home-section{
        left: 60px;
        width: calc(100% - 60px);
      }
      .home-section nav{
        width: 100%;
        left: 0;
      }
      .sidebar.active ~ .home-section nav{
        left: 60px;
        width: calc(100% - 60px);
      }
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
            <span class="links_name" class="active">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('Addproduct')}}">
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
            <span class="dashboard">Dashboard</span>
          </div>
          <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search' ></i>
          </div>
        </nav>
    
        <div class="home-content">
          <div class="overview-boxes">
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Total Order</div>
                <div class="number">40,876</div>
                <div class="indicator">
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bx-cart-alt cart'></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Total Sales</div>
                <div class="number">38,876</div>
                <div class="indicator">
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bxs-cart-add cart two' ></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Total Profit</div>
                <div class="number">$12,876</div>
                <div class="indicator">
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bx-cart cart three' ></i>
            </div>
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Total Return</div>
                <div class="number">11,086</div>
                <div class="indicator">
                  <i class='bx bx-down-arrow-alt down'></i>
                  <span class="text">Down From Today</span>
                </div>
              </div>
              <i class='bx bxs-cart-download cart four' ></i>
            </div>
          </div>
    
          <div class="sales-boxes">
            <div class="recent-sales box">
              <div class="title">Recent Sales</div>
              <div class="sales-details">
                <ul class="details">
                  <li class="topic">Date</li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                  <li><a href="#">11 June 2022</a></li>
                </ul>
                <ul class="details">
                <li class="topic">Customer</li>
                <li><a href="#">Ali Akbar</a></li>
                <li><a href="#">Akbar khan</a></li>
                <li><a href="#">sasha Ali</a></li>
                <li><a href="#">Saman ashraf</a></li>
                <li><a href="#">Shabhi ul hassan</a></li>
                <li><a href="#">Doe Alex</a></li>
                <li><a href="#">leo</a></li>
                <li><a href="#">baby doll</a></li>
                 <li><a href="#">sana khan</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Sales</li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                 <li><a href="#">Pending</a></li>
                <li><a href="#">Delivered</a></li>
              </ul>
              <ul class="details">
                <li class="topic">Total</li>
                <li><a href="#">2040 PKR</a></li>
                <li><a href="#">2440 PKR</a></li>
                <li><a href="#">2500 PKR</a></li>
                <li><a href="#">1700 PKR</a></li>
                <li><a href="#">5600 PKR</a></li>
                <li><a href="#">4495 PKR</a></li>
                <li><a href="#">6733 PKR</a></li>
                 <li><a href="#">2353 PKR</a></li>
                 <li><a href="#">4652 PKR</a></li>
              </ul>
              </div>
              <div class="button">
                <a href="#">See All</a>
              </div>
            </div>
            <div class="top-sales box">
              <div class="title">Top Seling Product</div>
              <ul class="top-sales-details">
                <li>
                <a href="#">
                  <span class="product">t shirt</span>
                </a>
                <span class="price">1107 PKR</span>
              </li>
              <li>
                <a href="#">
                  <span class="product">Hourglass Jeans </span>
                </a>
                <span class="price">1567 PKR</span>
              </li>
              <li>
                <a href="#">
                  <span class="product">WHITE SIMPLE TEE</span>
                </a>
                <span class="price">1234 PKR</span>
              </li>
              <li>
                <a href="#">
                  <span class="product">Animal print Tee</span>
                </a>
                <span class="price">2312 PKR</span>
              </li>
              <li>
                <a href="#">
                  <span class="product">Cheetah print tee</span>
                </a>
                <span class="price">1456 PKR</span>
              </li>
              <li>
                <a href="#">
                    <span class="product">Cheetah print tee</span>
                </a>
                <span class="price">1456 PKR</span>
              <li>
                <a href="#">
                    <span class="product">Cheetah print tee</span>
                </a>
                <span class="price">1456 PKR</span>
              </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    
      <script>
       let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
     </script>
    
</body>
</html>