<?php
include("dbconfig.php");
include("header.php");
include("sidebar.php");
include("manualentry.php");
if (!$_SESSION) {
  session_start();
  # code...
}

?>


<!DOCTYPE html>
<html>
<head style=" background-image: url('assets/images/image4.jpg');">
  <title>Hotel Chitwan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    p{
      color:black ;
    }
  </style>
</head>
<body>

<section>
  <div class="container">
    <!--  <div class="title-box">
        <h1 class="text-center">Budget Travel Plan</h1>
      </div>-->

<div class="hotel">
      <div class="hotel-description">
        <div class="row">
          <div class="col-sm-3">
            <img src="images/kasara resort.jpg" style="width: 100%; height: 200px;">
          </div>
          <div class="col-sm-6">
            <div class="hotel-detail">
              <h3>Kasara Resort</h3>
              <p>Kasara Resort in Nepal is a harmonious blend of nature. We offer simple luxury hotel in Chitwan, which is naturally set in the heart of Chitwan National Park.…...</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="button">
          <a href="kasara_resort.php" class="btn btn-lg btn-learn">Read More</a>
            </div>
          </div>
        </div>
      </div>
       <div class="hotel-description">
        <div class="row">
          <div class="col-sm-3">
            <img src="images/hotel monalisa.jpg" style="width: 100%; height: 200px;">
          </div>
          <div class="col-sm-6">
            <div class="hotel-detail">
              <h3>Hotel Monalisa</h3>
              <p>Namaste and welcome to the Hotel Monalisa Chitwan, a peaceful, homely atmosphere Hotel at Chitwan. The accommodation at Hotel Monalisa is perfect for ....</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="button">
          <a href="hotel_monalisa.php" class="btn btn-lg btn-learn">Read More</a>
            </div>
          </div>
        </div>
      </div>
       <div class="hotel-description">
        <div class="row">
          <div class="col-sm-3">
            <img src="images/hotel green park.jpg" style="width: 100%; height: 200px;">
          </div>
          <div class="col-sm-6">
            <div class="hotel-detail">
              <h3>Hotel Green Park</h3>
              <p>Green Park Chitwan(Best Resort In Chitwan Nepal)|Chitwan National Park::Resort in Chitwan,Hotel in Nepal,Hotel in Chitwan,Resort in Nepal,luxury resort in .......</p>
            </div>
          </div>
          <div class="col-sm-3">

            

<div class="button">
          <!--  <p>Rs. 5000 </p><div class="button">-->
          <a href="hotel_green_park.php" name="greenparkbtn" class="btn btn-lg btn-learn">Read More</a>
 </div>
          <?php
            if(isset ($_REQUEST ['greenparkbtn'])){

            /*  session_start();
            $price_greenpark=5000;
            $_SESSION['price_greenparkk'] = $price_greenpark;
*/
            header("hotel green park.php");
            }
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



</section>
</body>