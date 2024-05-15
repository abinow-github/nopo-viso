<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nopo wiso - blog details</title>
    <?php
include('head.php');
?>

    
</head>
<body>
<!-- navbar --> 
<?php
include('header.php');
?>
<!-- navbar END --> 

<!--==================================================================
                        banner
==================================================================-->
<div class="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 cnt-col">
          <div class="cnt">
            <h1 class="title">blog</h1>
          </div>
        </div>
        <div class="col-md-6 img-col">
          <div class="img-div"><img src="info/water-solution/water-drop.jpg" alt="banner-image" class="bnr-img"></div>
        </div>
      </div>
    </div>
    <div class="pos-abs-div"></div>
  </div>
<!--==================================================================
                          banner END
==================================================================-->



<!--==================================================================
                          blog
==================================================================-->
<style>
    .blog-sctn .img-part{
        width: 100%;
        max-height: 50vh;
        .card-img{
            max-height: 50vh;
            object-fit: contain;
            object-position: left;
        }
    }
</style>
<section class="blog-sctn">
    <div class="container">
    <div class="img-part mx-auto"><img src="info/water-solution/water-drop.jpg" alt="blog-img" class="card-img w-100"></div>
                    <div class="card-body">
                      <h6 class="subject">water</h6>
                      <h5 class="card-title">The Power of Rainwater Harvesting: A Sustainable Solution</h5>
                      <p class="cnt">Learn how rainwater harvesting can alleviate water scarcity and reduce reliance on traditional water sources, promoting sustainability and conservation.</p>
                    </div>
    </div>
</section>
<!--==================================================================
                          blog END
==================================================================-->


<?php
include('footer.php');
?>
</body>
</html>