<?php 
include("header.php");
include("sidebar.php");
include("email.php");
include("manualentry.php");


?>

<!DOCTYPE html>
<html>
<head>
  <title>Ballon Nepal</title>
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
  <!--<div class="container">
      <div class="title-box">
        <h1 class="text-center">Budget Travel Plan</h1>
      </div>-->
<div class="blue-sky">
        <div class="row">
          <div class="col-sm-6">
            <img src="images/hotairballon.jpg" style="margin-top: 10px; width: 500px; height: 400px;">
          </div>


                    
                

          <div class="col-sm-6">
            <h1>WELCOME TO Ballon Nepal</h1>
             

              <p>Floating like the clouds in the sky above the Fishtail, Dhaulagiri , Hiunchuli, Lamjung Himal, Phewa lake with freshness of cold chill weather. Eagle-eye Flight is for 30 minutes of flight which descend for Dhumpus/Laurukh (depends on the weather) and round the beautiful city of lake.
               </p>
               <p> We offer two Flight shifts:

                  Sunrise Flight (6 am flight)
                  Sunset Flight (4 pm flight)
                  Cost for the flight is Nrs 9,000 per person for Nepali citizens and $120 per person for the foreign citizen. The cost will includes:

                  Pick Up and Return service inside Pokhara
                  Pre-Flight Refreshment and site seeing
                  Balloon Flight certificate
                  Insurance
                  Additional charges (Nrs 1000)

                  In-flight Photo
                  Time lapse Video of your flight</p>                


          </div>
                
        </div>
        
      </div>

  <div class="button">
    <form method="POST">
      <div class="dropdown">
                  <button class="btn btn-lg btn-book">Offers</button>
                  <div class="dropdown-content">
                    <a><input type="radio" name="radio" value="9000">Eagle Eye Flight - NRs 9000</a>
                    <a><input type="radio" name="radio" value="11000">Magical Voyage - NRs 11000 </a>
                    <a><input type="radio" name="radio" value="16000">Hot Air Balloon Flight Special -NRS 16000</a>
                    <a><input type="radio" name="radio" value="20000">Hot Air Romance -NRS 20000</a>
                    <a><input type="radio" name="radio" value="50000">Hot Air Engagement -NRS 50000</a>
                    <a><input type="radio" name="radio" value="43000">Hot Air Anniversary -NRS 43000</a>
                    <a><input type="radio" name="radio" value="30000">Hot Air Birthday -NRS 30000</a>
                  </div>

                </div>
        <a href="https://balloonnepal.com/result/?person=1&flight=eagle-eye%20Flight&bdate=2018-12-16" name="bookhere" class="btn btn-lg btn-book">Book</a>           
          <input type="submit" value= "Select" class="btn btn-lg btn-book" name="clickhere" /> 
     </form>
   </div>    


<?php 

include("dbconfig.php");


$result ="SELECT userID 
FROM tcurrency
  ORDER BY userID DESC 
 LIMIT 1";
$results = mysqli_query($connection, $result);
//print values to screen
 $row = mysqli_fetch_assoc($results);
 $uuid= $row['userID']+1;

 

$placee="Pokhara";
$recreationn="Hot Air Ballon";

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

                          $_SESSION['enteredmoney']=$_SESSION['enteredmoney']-($pricee);
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


</section>
</body>