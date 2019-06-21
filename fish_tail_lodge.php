<?php 
include("header.php");
include("sidebar.php");
include("email.php");
include("manualentry.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Fish Tail Lodge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
    p{
      color:black ;
    }
  </style>
</head>
<body style=" background-image: url('assets/images/image4.jpg');">

<section>
  <div class="container">
      <!--<div class="title-box">
        <h1 class="text-center">Budget Travel Plan</h1>
      </div>-->


      <div class="blue-sky">
        <div class="row">
          <div class="col-sm-8">
            <img src="images/fishtaillodge.jpg" style="width: 100%; height: 400px;">
          </div>
          <div class="col-sm-4">
            <h2> Welcome To Fishtail lodge</h2>
            <p>Situated on a peninsula with the Fewa Lake on one side and a forest-covered hill on the other, Fish Tail Lodge offers spectacular views all round making it a unique lake resort. Located 1 km to Pokhara Bus stand, it boasts an outdoor pool and offers free private parking.</p>
            <p>The hotel is 1 km from Pokhara Airport. Davi’s Fall is 5 km away, while Sarangkot is 15 km from the property.</p>

          </div>
        </div>
        
      </div>

        

<div class="button">
    <form method="POST">
      <div class="dropdown">
                  <button class="btn btn-lg btn-book">Offers</button>
                  <div class="dropdown-content">
                    <a><input type="radio" name="radio" value="2000">1 x Single bed normal - NRs 2000</a>
                    <a><input type="radio" name="radio" value="3000">2 x Single bed normal - NRs 3000 </a>
                    <a><input type="radio" name="radio" value="2500">Double bed normal - NRS 2500</a>
                    <a><input type="radio" name="radio" value="6000">1 x Single bed deluxe - RS 6000</a>
                    <a><input type="radio" name="radio" value="9000">2 x Single bed deluxe - NRS 9000</a>
                    <a><input type="radio" name="radio" value="12000">Double bed deluxe - NRS 12000</a>
                    <a><input type="radio" name="radio" value="20000">Single bed First Class - NRS 20000</a>
                    <a><input type="radio" name="radio" value="30000">Double bed First Class - NRS 30000</a>
                  </div>

                </div>
        <a href="https://www.booking.com/hotel/np/fish-tail-lodge.html?label=gen173nr-1DCAEoggJCAlhYSDNYBGirAYgBAZgBMbgBB8gBD9gBA-gBAfgBApICAXmoAgM;sid=628470724f5cca52814afb725c3f4c1d;all_sr_blocks=54727501_105118022_0_0_0;bshb=2;checkin=2018-04-10;checkout=2018-04-11;dest_id=-1022488;dest_type=city;dist=0;group_adults=2;hapos=1;highlighted_blocks=54727501_105118022_0_0_0;hpos=1;room1=A%2CA;sb_price_type=total;srepoch=1523355588;srfid=e320d67385afbcd25a75d2d33453d3899bc55785X1;srpvid=36a048a16d4c00c2;type=total;ucfs=1&#hotelTmpl" name="bookhere" class="btn btn-lg btn-book">Book</a>           
          <input type="submit" value= "Select" class="btn btn-lg btn-book" name="clickhere" /> 
     </form>
   </div>    


          
      <?php 
include("dbconfig.php");

/*if(isset($_SESSION['thisuserID']))
{
  $uuid=$_SESSION['thisuserID'];
}*/

$result ="SELECT userID 
FROM tcurrency
  ORDER BY userID DESC 
 LIMIT 1";
$results = mysqli_query($connection, $result);
//print values to screen
 $row = mysqli_fetch_assoc($results);
 $uuid= $row['userID']+1;



$placee="Pokhara";

$recreationn="Fish Tail Lodge";

if(isset($_POST['clickhere']) ) 
           {   
                      if(isset($_POST['radio']))
                          {
                            $pricee=$_POST['radio'];
                          }
                          else
                            {
                              echo "Select offer";
                              die();
                            }
                      
                       $query= "INSERT INTO alldetails SET 
                       userid='$uuid', 
                       place='$placee',
                       recreation='$recreationn',
                       price='$pricee'
                       ";
                                    

                        if(mysqli_query($connection, $query))
                        {

                          $_SESSION['enteredmoney']=$_SESSION['enteredmoney']-$pricee;
                          echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                           
                          
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('failed!')</script>";
                        }
                  }

   if(isset($_POST['book here']) ) 
   {  
    emailsend();
   } 
                  

 ?>

</div>

</section>
</body>