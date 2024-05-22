<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nopo wiso - blog details</title>
    <?php
include('head.php');
?>
<!-- fancybox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    
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
            <h1 class="title">gallery</h1>
          </div>
        </div>
        <div class="col-md-6 img-col">
          <div class="img-div"><img src="assets/img/banner/gallery-page-bnr.jpg" alt="banner-image" class="bnr-img"></div>
        </div>
      </div>
    </div>
    <div class="pos-abs-div"></div>
  </div>
<!--==================================================================
                          banner END
==================================================================-->




<!--==================================================================
                          gallery
==================================================================-->
<section class="sctn-gallery">
    <div class="container">
        <ul class="images">
        <?php
include("dashboard/root/db.php");
              $sql ="SELECT * FROM  gallery ORDER BY id DESC";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0){
                  while ($row=$result -> fetch_assoc())
              {
                
              ?>
                
                        <li><a data-fancybox="video-gallery"  href="dashboard/images/gallery/<?php echo $row ["image"]; ?>" class="fancybox" rel="ligthbox"><img src="dashboard/images/gallery/<?php echo $row ["image"]; ?>" class="zoom img-fluid "  alt="name" ></a></li>
              <?php
              }
            }
                ?>
            
        </ul>
    </div>
</section>
<!--==================================================================
                          gallery END
==================================================================-->






<?php
include('footer.php');
?>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

</body>
</html>