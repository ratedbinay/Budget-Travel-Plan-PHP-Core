<?php 
include("header.php");
include("sidebar.php");
include("email.php");
include("manualentry.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Pokhara Paraglide</title>
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
          <div class="col-sm-6">
            <img src="images/pokhara-paraglide.jpg" style="width: 100%; height: 400px;">
          </div>
          <div class="col-sm-6">
            <h1>WELCOME TO POKHARA PARAGLIDING</h1>
              <p>Take three steps forward sit back in separate harness in front of the pilot where you can seat care free and enjoy beautifull surroundings of the Annapurna Mountain range, Pokhara city, Fewa lake and Sarangkot mountain where we are takking off from. Enjoy the relaxing 20 minutes fly or challenge a 1 hour "Cross Country" flight where pilot bring you from one thermal to another showing you the perfection of this sport. Many people tell us we doing the best job in the world. We take that very siriusly trying to continue doing our job in the best way we can!</p>


          </div>
        </div>
        
      </div>

 

</div>




<div class="button">
       <form method="POST">
       <div class="dropdown">
                  <button class="btn btn-lg btn-book">Offers</button>
                  <div class="dropdown-content">
                   <a><input type="radio" name="radio" value="4000">Normal - NRs 4000</a>
                   <a><input type="radio" name="radio" value="6000">With pickup/drop service + lunch  - NRs 6000</a>
                    <a><input type="radio" name="radio" value="5000">With pickup/drop service - NRs 5000 </a>
                  </div>

                </div>
        <a href="http://www.pkrparagliding.com/contact_us" name="bookhere" class="btn btn-lg btn-book">Book</a>           
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
$recreationn="Pokhara Paraglide";

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
                          # header("Refresh:0");
                          
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