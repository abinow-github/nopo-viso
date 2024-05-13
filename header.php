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
          <!-- <li class="nav-item">
            <a class="nav-link" href="sustainability">sustainability</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="innovations">innovations</a>
          </li> -->
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
              <li><a class="dropdown-item" href="#">water treatment</a></li>
              <li><a class="dropdown-item" href="#">research institute of environment</a></li>
              <li><a class="dropdown-item" href="#">pollution testing - home</a></li>
              <li><a class="dropdown-item" href="#">pollution testing - business</a></li>
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
  </nav>