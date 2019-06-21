<?php 
include("header.php");
include("sidebar.php");
include("manualentry.php");
#include("sidebar.php"); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    
    .col-sm-6
    {
     width: 49%;
    }

    .cities-img p
    {
        font-size: 50px;
        text-align:  center;
        color: white;
        font-weight: 700;
        letter-spacing: 2px;
    }
  </style>
  
</head>
<body style=" background-image: url('assets/images/image4.jpg');">

<section>
  <div class="container">
      <!--<div class="title-box">
        <h1 class="text-center">Budget Travel Plan</h1>
      </div>-->
      <div class="cities">
        <div class="row">
          <div class="col-sm-6">
            <div class="cities-img">
           <a href="pokhara.php"> <div style="background-image:url(images/pokhara.jpg);">
            
            <p>Pokhara</p></div>
            </a>
            </div>
          </div>
          <div class="col-sm-6">
             <div class="cities-img">
               <a href="chitwan.php"> <div style="background-image:url(images/chitwan.jpg);">
                <p>Chitwan</p>
              </div>
             </a>
            </div>
          </div>
        </div>
      </div>

      <div class="cities">
        <div class="row">
          <div class="col-sm-4">
             <div class="cities-img">
            <div style="background-image:url(images/kathmandu.jpg);">
              <p>Kathmandu</p>
            </div>
            </div>
            
          </div>
          <div class="col-sm-4">
            <div class="cities-img">
            <div style="background-image:url(images/lumbini.jpg);">
              <p>Lumbini</p>
            </div>
            </div>
          </div>
          <div class="col-sm-4">
             <div class="cities-img">
            <div style="background-image:url(images/everest.jpg);">
              <p>Everest</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    </section>


<script type="text/javascript"src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"src="js/bootstrap.min.js"></script>
</body>
</html>
