<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nopo wiso</title>
    <!-- favicon -->
         <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
         <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
         <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
         <link rel="manifest" href="favicon/site.webmanifest">
         <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
         <meta name="msapplication-TileColor" content="#da532c">
         <meta name="theme-color" content="#ffffff"> 

    <!-- Open Graph protocol -->
    <meta property="og:title" content="Iwater soilution">
    <meta property="og:description" content="nopo wiso home">
    <meta property="og:image" content="http://localhost/nopo-viso/favicon/favicon-16x16.png">
    <meta property="og:url" content="http://localhost/nopo-viso/home">
    <meta property="og:type" content="article">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poetsen+One&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- bootsrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--  fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">

    <!-- jquery slick -->
    <link rel='stylesheet' href='//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css'>
    <link rel='stylesheet' href='//cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>

    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
</head>
<body>
   <!-- navbar --> 
   <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="home"><img src="info/lopo-viso logo-test.png" alt="nopowiso-logo"></a>

      <div class="plate plate1 navbar-toggler" onclick="showNav(this)">
        <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
          <path class="line line1" d="M 30,65 H 70"/>
          <path class="line line2" d="M 70,50 H 30 C 30,50 18.644068,50.320751 18.644068,36.016949 C 18.644068,21.712696 24.988973,6.5812347 38.79661,11.016949 C 52.604247,15.452663 46.423729,62.711864 46.423729,62.711864 L 50.423729,49.152542 L 50.423729,16.101695"/>
          <path class="line line3" d="M 30,35 H 70 C 70,35 80.084746,36.737688 80.084746,25.423729 C 80.084746,19.599612 75.882239,9.3123528 64.711864,13.559322 C 53.541489,17.806291 54.423729,62.711864 54.423729,62.711864 L 50.423729,49.152542 V 16.101695"/>
        </svg>
        <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
          <path class="line" d="M 34,32 L 66,68" />
          <path class="line" d="M 66,32 L 34,68" />
        </svg>
      </div>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">company</a>
          </li>
          <li class="nav-item dropdown" onclick="showDrpdwnMenu('dropdown-menu-a')">
            <div class="nav-link dropdown-toggle" >
              products & solutions<i class="fa-solid fa-angle-down"></i>
            </div>
            <ul class="dropdown-menu" id="dropdown-menu-a">
              <li class="back-btn-li d-flex align-items-center hide-lg"><button class="back" onclick="hideDrpdwnMenu('dropdown-menu-a')"><i class="fa-solid fa-arrow-left-long"></i></button></li><!-- back button li -->
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" onclick="showDrpdwnMenu('dropdown-menu-b')">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
              services<i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" id="dropdown-menu-b">
              <li class="back-btn-li d-flex align-items-center hide-lg"><button class="back" onclick="hideDrpdwnMenu('dropdown-menu-b')"><i class="fa-solid fa-arrow-left-long"></i></button></li><!-- back button li -->
              <li class="services-li">
                  <a class="dropdown-itm" href="#"><div class="img-div"><img src="assets/img/services/water solution'.webp" alt="water solution"></div><span class="heading">water treatment</span></a>
                  <a class="dropdown-itm" href="#"><div class="img-div"><img src="assets/img/services/research environment.webp" alt="research environment"></div><span class="heading">research institute of environment</span></a>
                  <a class="dropdown-itm" href="#"><div class="img-div"><img src="assets/img/services/pollution-home.jpg" alt="pollution testing"></div><span class="heading">pollution testing - home</span></a>
                  <a class="dropdown-itm" href="#"><div class="img-div"><img src="assets/img/services/pollution-office.webp" alt="pollution testing"></div><span class="heading">pollution testing - business</span></a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item dropdown" onclick="showDrpdwnMenu('dropdown-menu-c')">
            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" aria-expanded="false">
              market segments<i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu" id="dropdown-menu-c">
              <li class="back-btn-li d-flex align-items-center hide-lg"><button class="back" onclick="hideDrpdwnMenu('dropdown-menu-c')"><i class="fa-solid fa-arrow-left-long"></i></button></li><-- back button li ->
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="gallery">gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
    <!--scroll indicator-->
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
    <!--scroll indicator end-->
  </nav>
   <!-- navbar END --> 

<!--==================================================================
                        banner
==================================================================-->
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 cnt-col">
        <div class="cnt">
          <h1 class="title">
            <div class="row">
            <div class="word">
            <span style="--index: 0; --alpha-l: 0.125; --alpha-u: 0.25;">N</span>
            <span style="--index: 1; --alpha-l: 0.125; --alpha-u: 0.25;">a</span>
            <span style="--index: 2; --alpha-l: 0.125; --alpha-u: 0.25;">t</span>
            <span style="--index: 3; --alpha-l: 0.125; --alpha-u: 0.25;">u</span>
            <span style="--index: 4; --alpha-l: 0.125; --alpha-u: 0.25;">r</span>
            <span style="--index: 5; --alpha-l: 0.125; --alpha-u: 0.25;">e'</span>
            </div>
            <div class="word">
            <span style="--index: 6; --alpha-l: 0.125; --alpha-u: 0.25;">S</span>
            <span style="--index: 7; --alpha-l: 0.125; --alpha-u: 0.25;">t</span>
            <span style="--index: 8; --alpha-l: 0.125; --alpha-u: 0.25;">w</span>
            <span style="--index: 9; --alpha-l: 0.125; --alpha-u: 0.25;">a</span>
            <span style="--index: 10; --alpha-l: 0.125; --alpha-u: 0.25;">r</span>
            <span style="--index: 11; --alpha-l: 0.125; --alpha-u: 0.25;">d</span>
            <span style="--index: 12; --alpha-l: 0.125; --alpha-u: 0.25;">s</span>
            <span style="--index: 12; --alpha-l: 0.125; --alpha-u: 0.25;">:</span>
            </div>
          </div>
          <div class="row">
             <div class="word">
              <span style="--index: 0; --alpha-l: 0.125; --alpha-u: 0.25;">W</span>
              <span style="--index: 1; --alpha-l: 0.125; --alpha-u: 0.25;">a</span>
              <span style="--index: 2; --alpha-l: 0.125; --alpha-u: 0.25;">t</span>
              <span style="--index: 3; --alpha-l: 0.125; --alpha-u: 0.25;">e</span>
              <span style="--index: 4; --alpha-l: 0.125; --alpha-u: 0.25;">r</span>
             </div>
             <div class="word">
              <span style="--index: 5; --alpha-l: 0.125; --alpha-u: 0.25;">&</span>
             </div>
             <div class="word">
              <span style="--index: 6; --alpha-l: 0.125; --alpha-u: 0.25;">E</span>
              <span style="--index: 7; --alpha-l: 0.125; --alpha-u: 0.25;">n</span>
              <span style="--index: 8; --alpha-l: 0.125; --alpha-u: 0.25;">v</span>
              <span style="--index: 9; --alpha-l: 0.125; --alpha-u: 0.25;">i</span>
              <span style="--index: 10; --alpha-l: 0.125; --alpha-u: 0.25;">r</span>
              <span style="--index: 11; --alpha-l: 0.125; --alpha-u: 0.25;">0</span>
              <span style="--index: 12; --alpha-l: 0.125; --alpha-u: 0.25;">n</span>
              <span style="--index: 13; --alpha-l: 0.125; --alpha-u: 0.25;">m</span>
              <span style="--index: 14; --alpha-l: 0.125; --alpha-u: 0.25;">e</span>
              <span style="--index: 15; --alpha-l: 0.125; --alpha-u: 0.25;">n</span>
              <span style="--index: 16; --alpha-l: 0.125; --alpha-u: 0.25;">t</span>
             </div>
             <div class="word">
              <span style="--index: 0; --alpha-l: 0.125; --alpha-u: 0.25;">S</span>
              <span style="--index: 1; --alpha-l: 0.125; --alpha-u: 0.25;">o</span>
              <span style="--index: 2; --alpha-l: 0.125; --alpha-u: 0.25;">l</span>
              <span style="--index: 3; --alpha-l: 0.125; --alpha-u: 0.25;">u</span>
              <span style="--index: 4; --alpha-l: 0.125; --alpha-u: 0.25;">t</span>
              <span style="--index: 5; --alpha-l: 0.125; --alpha-u: 0.25;">i</span>
              <span style="--index: 6; --alpha-l: 0.125; --alpha-u: 0.25;">o</span>
              <span style="--index: 7; --alpha-l: 0.125; --alpha-u: 0.25;">n</span>
              <span style="--index: 8; --alpha-l: 0.125; --alpha-u: 0.25;">s</span>
             </div>
            </div>
              </h1>
          <p class="txt">Empowering Sustainable Futures Through Innovative Solutions.  Join us in shaping a greener future. 🌱💧</p>
          <button class="explore-btn">Explore</button>
        </div>
      </div>
      <div class="col-md-6 img-col">
        <div class="img-div"><img src="assets/img/banner/banner.gif" alt="banner-image" class="bnr-img"></div>
      </div>
    </div>
  </div>
  <div class="brand-name">nopo wiso</div>
  <div class="shape-2"></div>
  <div class="shape-3"></div>
</div>
<!--==================================================================
                        banner END
==================================================================-->

  <div class="shape-1"></div>

<!--==================================================================
                        about 
==================================================================-->
<section class="about sctn-1">
  <div class="container">
    <div class="row">
      <div class="col-md-10 cnt-col">
        <div class="cnt">
          <h2 class="title mb-0 pb-0">about</h2>
          <p class="cnt">
            BET EnviroCare Group is a comprehensive environmental solutions provider dedicated to 
            pollution diagnosis and sustainable practices. Our team of experienced engineers and 
            applied  science  researchers  offers  advanced  technologies,  products,  and  services  for 
            environmental  quality  testing,  water  purification,  rainwater  conservation,  wastewater 
            treatment, solid waste management, renewable energy generation, design consultancy 
            services, and more. 
          </p>
        </div>
      </div>

      <div class="col-md-12 icons-col"><!-- icons part -->
        <div class="cards-div d-grid">

          <div class="card item-1" onmousemove="hideNum(this)" onmouseleave="showNum(this, 40)">
            <div class="icon-count">
              <lord-icon src="https://cdn.lordicon.com/lyrrgrsl.json" trigger="hover" target=".card" class="current-color"></lord-icon>
              <h3 class="count d-flex justify-content-center"><span class="count-digit a">40</span> +</h3>
            </div>
            <h6 class="card-title">patents</h6>
          </div>

          <div class="card item-2" onmousemove="hideNum(this)" onmouseleave="showNum(this, 10000)">
            <div class="icon-count">
              <lord-icon src="https://cdn.lordicon.com/jdalicnn.json" trigger="hover" target=".card" stroke="bold" class="current-color"></lord-icon>
              <h3 class="count d-flex justify-content-center"><span class="count-digit b">10000</span> +</h3>
            </div>
            <h6 class="card-title">installations</h6>
          </div>

          <div class="item-3"><!-- image item 3 -->
            <a class="img-div fancybox" data-fancybox="video-gallery"  href="info/banner-test.jpg" rel="ligthbox">
              <img src="info/banner-test.jpg" alt="about-img" class="w-100 about-img">
            </a>
          </div>

          <div class="card item-4" onmousemove="hideNum(this)" onmouseleave="showNum(this, 1500)">
            <div class="icon-count">
              <lord-icon src="https://cdn.lordicon.com/wdmqypko.json" trigger="hover" target=".card" stroke="bold" class="current-color"></lord-icon>
              <h3 class="count d-flex justify-content-center"><span class="count-digit c">1500</span> +</h3>
            </div>
            <h6 class="card-title">trainer engineers</h6>
          </div>

          <div class="card item-5" onmousemove="hideNum(this)" onmouseleave="showNum(this, 7)">
            <div class="icon-count">
              <lord-icon src="https://cdn.lordicon.com/hicajugo.json" trigger="hover" target=".card" stroke="bold" class="current-color"></lord-icon>
              <h3 class="count d-flex justify-content-center"><span class="count-digit d">7</span> +</h3>
            </div>
            <h6 class="card-title">manufacturing units</h6>
          </div>

        </div>
      </div>
      
     
    </div>
  </div>
</section>
<!--==================================================================
                        about end
==================================================================-->


<!--==================================================================
                        world map 
==================================================================-->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/india2019High.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<section class="world-map sctn-2">
  <div class="container">
   <div class="row">
    <div class="col-md-5 cnt-col"><!-- content -->
      <h2 class="title mb-0 pb-0">Find Us Across India</h2>
      <p class="caption">Discover our network of dedicated environmental centers spread across India, working tirelessly to promote sustainable practices and combat pollution. Click on the markers to learn more about each location's initiatives and services.</p>
    </div>
    <div class="col-md-7 map-col p-0"><!-- map -->

      <div id="chartdiv">
      </div>
      <div class="pos-abs-div">Total : 34</div>

    </div>
   </div>
  </div>
</section>
<!--==================================================================
                        world map end
==================================================================-->




<!--==================================================================
                        services 
==================================================================-->
<section class="services sctn-3">
  <div class="container">
  
  <div class="row services-row">
    <div class="col-md-12 cnt-col">
      <h2 class="title">services</h2>
      <div class="services-div d-grid">

        <div class="service">
          <div class="cnt">
           <h5 class="title">Water Testing Lab (Govt. Approved)</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Water Testing Lab.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Water Treatment (WTP, RO, UF, UV, OZONE)</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Water Treatment .png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Waste Water Treatment ( STP, ETP, O&G Traps)</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Waste Water Treatment .png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Swimming Pool</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Swimming Pool.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Food Waste Digesters</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Food Waste Digesters.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Solid Waste Incineration</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Solid Waste Incineration.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Water Conservation & recharging</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Water Conservation & recharging.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Solar Power Plant</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Solar Power Plant.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Integrated Farming</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Integrated Farming.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title">Enviro Consultancy Services</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Enviro Consultancy Services.png" alt="service"></span>
        </div>

        <div class="service">
          <div class="cnt">
           <h5 class="title"> Pollution Control Maintenance Services</h5>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> 
          <span class="icon"><img src="assets/img/icons/service/Pollution Control Maintenance Services.png" alt="service"></span>
        </div>

      </div>
    </div>
  </div>

  </div>
</section>
<!--==================================================================
                        services end
==================================================================-->


<!--==================================================================
                        sectors
==================================================================-->
<section class="sectors sctn-4">
  <div class="container">
    <div class="row title-row">
      <h2 class="title">sectors we serve</h2>
    </div>
    <div class="row">

      <div class="col-lg-6 col-sm-12"><!-- cards part -->
       <div class="sectors-div d-grid">

      <div class="card sector">
        <h3 class="card-title">indusries</h3>
        <img src="assets/img/sectors/industries.png" alt="sector" class="sector-img">
      </div>

      <div class="card sector">
        <h3 class="card-title">institutions</h3>
        <img src="assets/img/sectors/institution.png" alt="sector" class="sector-img">
      </div>

      <div class="card sector">
        <h3 class="card-title">homes</h3>
        <img src="assets/img/sectors/homes.png" alt="sector" class="sector-img">
      </div>

      <div class="card sector">
        <h3 class="card-title">communities</h3>
        <img src="assets/img/sectors/communities.png" alt="sector" class="sector-img">
      </div>

       </div>
      </div>

      <div class="col-lg-6 img-col py-4"><!-- image part -->
        <div class="img-div"><img src="assets/img/other/best-water-slutions.gif" class="w-100" alt=""></div>
      </div>

  </div>
  </div>
</section>
<!--==================================================================
                        sectors end
==================================================================-->



<!--==================================================================
                        google review 
==================================================================-->
<section class="google-review sctn-5">
  <div class="container">
    <div class="row title-row">
      <h2 class="title pb-0">google reviews</h2>
    </div>
    <div class="row title-row2">

      <div class="col-md-8 google-title-col d-flex"><!-- google logo part  -->
        <img src="assets/img/google-review/Google-Review-Logo.png" alt="" class="google-review-logo-img">
        <div class="rating-div"><i class="fa-regular fa-star-half-stroke"></i>4.7</div>
      </div>
      <div class="col-md-4 view-more-col d-flex justify-content-end"><!-- view momre button -->
        <button class="view-more-btn">view more</button>
      </div>

    </div>
    <div class="row review-slider-row">

      <div class="slider review-slider"> <!-- slider -->

        <div class="slide card">
          <div class="card-body">
            <div class="profile-row d-flex"><!-- profile row -->
              <div class="profile-div"> <div class="profile">s</div> </div>
              <div class="name-date-div">
                <div class="name">Steven</div>
                <p class="date">1 week ago</p>
              </div>
            </div>
            <div class="rating-row d-flex"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="cnt">I requested for a website for my business be created in a few days or less. But they delivered it without any delays and on schedule. They now support me in digital marketing too. Kudos to their team.</p>
          </div>
        </div>

        <div class="slide card">
          <div class="card-body">
            <div class="profile-row d-flex">
              <div class="profile-div"> <div class="profile">o</div> </div>
              <div class="name-date-div">
                <div class="name">Oliver</div>
                <p class="date">2 week ago</p>
              </div>
            </div>
            <div class="rating-row d-flex"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="cnt">Iberr Technologies at Perinthalmanna is a true expert in digital marketing. Their team delivered great results for my business. Highly recommended!</p>
          </div>
        </div>

        <div class="slide card">
          <div class="card-body">
            <div class="profile-row d-flex">
              <div class="profile-div"> <div class="profile">a</div> </div>
              <div class="name-date-div">
                <div class="name">Alexia Morgan</div>
                <p class="date">2 days ago</p>
              </div>
            </div>
            <div class="rating-row d-flex"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="cnt">Iberr Technologies at Perinthalmanna has a skilled team that understands the nuances of digital marketing. Trust them to elevate your online presence.</p>
          </div>
        </div>

        <div class="slide card">
          <div class="card-body">
            <div class="profile-row d-flex">
              <div class="profile-div"> <div class="profile">s</div> </div>
              <div class="name-date-div">
                <div class="name">Sofia</div>
                <p class="date">5 days ago</p>
              </div>
            </div>
            <div class="rating-row d-flex"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="cnt">With their help, my business is now thriving. Trust Iberr Technologies for all your SEO needs!</p>
          </div>
        </div>

        <div class="slide card">
          <div class="card-body">
            <div class="profile-row d-flex">
              <div class="profile-div"> <div class="profile">j</div> </div>
              <div class="name-date-div">
                <div class="name">Jhone</div>
                <p class="date">10 days ago</p>
              </div>
            </div>
            <div class="rating-row d-flex"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="cnt">I was highly impressed with the quality of their service. Very swift, polite, professional, and full of brilliant ideas in digital marketing.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!--==================================================================
                        google review end
==================================================================-->



<!--==================================================================
                        Footer
==================================================================-->
  <footer class="text-center text-lg-start text-white" >
    <!-- wave animation -->
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(93, 118, 232, 0.7)" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(33, 55, 150, 0.7)" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="#4e6db7" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#6178d0" />
  </g>
  </svg>
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 social-md"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <img src="info/lopo-viso logo-test.png" alt="nopowiso-logo" class="footer-logo pb-2">
            
            <p>
              Every Pollution needs a scientifically BET EC solution...
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Menu</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="about" class="text-white">about us</a>
            </p>
            <p>
              <a href="sustainability" class="text-white">sustainability</a>
            </p>
            <p>
              <a href="innovations" class="text-white">innovations</a>
            </p>
            <p>
              <a href="#!" class="text-white">market segments</a>
            </p>
            <p>
              <a href="#!" class="text-white">contact us</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Services</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">water solutions</a>
            </p>
            <p>
              <a href="#!" class="text-white">swimming pool</a>
            </p>
            <p>
              <a href="#!" class="text-white">waste management</a>
            </p>
            <p>
              <a href="#!" class="text-white">solar power plant</a>
            </p>
            <p>
              <a href="#!" class="text-white">integrated farming</a>
            </p>
            <p>
              <a href="#!" class="text-white">polution controll maintenance</a>
            </p>
            <p>
              <a href="#!" class="text-white">enviro consultancy</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> CH Building, Manjeri Road, Uphill, Malappuram, Kerala 676505</p>
            <p><i class="fas fa-envelope mr-3"></i> betenvirocare@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +91 9400 123 132</p>
            <!-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3 copyright-div" >
      <span>© 2024 Copyright : <a class="text-white" href="https://nopowiso.com/" >nopowiso.com</a></span> 
      <span>Powered By <a class="text-white" href="https://iberrtech.com/" >iberrtechnologies</a></span> 
    </div>
    <!-- Copyright -->
  </footer>

  <!-- whatsapp and call buttons -->
  <div class="qk-contact-bar d-flex align-items-center justify-content-between" id="qk-contact-bar">
    
        <div class="call-btn-col d-flex justify-content-end">
          <a href="tel:+919400123132" class="call-btn d-flex align-items-center  justify-content-end"><span class="number"><span class="wdth">1</span> +91 9400 123 132 </span>  <span class="icon d-flex align-items-center justify-content-center"><i class="fa-solid fa-phone"></i></span> </a>
        </div>
        <div class="wtsap-btn-col d-flex justify-content-start">
          <a href="https://wa.me/9400123132" class="wtsap-btn d-flex align-items-center justify-content-start"><span class="icon d-flex align-items-center justify-content-center"><i class="fa-brands fa-whatsapp"></span></i>  <span class="number"> +91 9400 123 132 <span class="wdth">1</span></span> </a>
        </div>

  </div>
  <!-- whatsapp and call buttons END -->


   <!-- bootsrap 5 -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
   <!-- lord icon -->
   <script src="https://cdn.lordicon.com/lordicon.js"></script>

   <!-- jquery slick -->
   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src='//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js'></script>

   <!-- jquery -->
   <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
   <script src="assets/js/script.js?<?php echo time(); ?>"></script>
   <script src="assets/js/india-map.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
</body>
</html>