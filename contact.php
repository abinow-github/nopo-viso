<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nopo wiso about</title>
    <?php
    include('head.php');
    ?>
    <!-- css -->
    <link rel="stylesheet" href="assets/contact/css/style.css">

    
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
            <h1 class="title">contact us</h1>
          </div>
        </div>
        <div class="col-md-6 img-col">
          <div class="img-div"><img src="assets/img/banner/contact-page-bnr.jpg" alt="banner-image" class="bnr-img"></div>
        </div>
      </div>
    </div>
    <div class="pos-abs-div"></div>
  </div>
<!--==================================================================
                          banner END
==================================================================-->



<!--==================================================================
                          contact form END
==================================================================-->
<section class="ftco-section contact-form-section">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters">
            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Get in touch</h3>
                <div id="form-message-warning" class="mb-4"></div> 
                <div id="form-message-success" class="mb-4">
                  Your message was sent, thank you!
                </div>
                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
              <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                <h3>Let's get in touch</h3>
                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Address: </span> CH Building, Manjeri Road, Uphill, Malappuram, Kerala 676505</p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Phone: </span> <a href="tel://9400123132">+91 9400 123 132</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Email: </span> <a href="mailto:info@yoursite.com">betenvirocare@gmail.com</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Website :</span> <a href="#">npowiso.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--==================================================================
                          contact form END
==================================================================-->
  <script src="assets/contact/js/jquery.min.js"></script>
  <script src="assets/contact/js/popper.js"></script>
  <script src="assets/contact/js/bootstrap.min.js"></script>
  <script src="assets/contact/js/jquery.validate.min.js"></script>
  <script src="assets/contact/js/main.js"></script>




<!--==================================================================
                          Locations 
==================================================================-->
<section class="location-sorting">
  <div class="container">
    <div class="row">

    <form>
  <div class="form-group col-md-4">
    <label for="inputState">State</label>
    <select class="form-control" id="inputState">
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
  </div>
  <div class="form-group col-md-4">
    <label for="inputDistrict">District</label>
    <select class="form-control" id="inputDistrict">
        <option value="">-- select one -- </option>
    </select>
  </div>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    </div>
  </div>
</section>
<script src="assets/contact/js/locations.js"></script>
<!--==================================================================
                          Locations END
==================================================================-->

<?php
include('footer.php');
?>
</body>
</html>