<?php 
include("header.php");
include("sidebar.php");
include("email.php");
include("manualentry.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Hotel Monalisa</title>
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
     <!-- <div class="title-box">
        <h1 class="text-center">Budget Travel Plan</h1>
      </div>-->

       <div class="blue-sky">
        <div class="row">
          <div class="col-sm-8">
            <img src="images/hotel monalisa 1.jpg" style="width: 100%; height: 400px;">
          </div>
          <div class="col-sm-4">
           <h2>WELCOME TO Hotel monalisa</h2>
              <p>Namaste and welcome to the Hotel Monalisa Chitwan, a peaceful, homely atmosphere Hotel at Chitwan. The accommodation at Hotel Monalisa is perfect for everyone who have desire to enjoy nature in peace and to make their holidays in chitwan a memorable one.
Our Hotel built in Pagoda styles with all western comforts and facilities in every room. We have separated dining hall with restaurant and bar where delicious cuisines are served. Similarly our hotel building built in environment friendly manner.

          </div>
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
        <a href="https://www.booking.com/hotel/np/monalisa-chitwan.en-gb.html?aid=357026;label=gog235jc-1DCAsoqwFCEG1vbmFsaXNhLWNoaXR3YW5IM1gDaKsBiAEBmAEJuAEIyAEM2AED6AEBiAIBqAID;sid=4c07de71f60debd7638895c80895ee59;dist=0&keep_landing=1&sb_price_type=total&type=total&" name="bookhere" class="btn btn-lg btn-book">Book</a>           
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

 

$placee="Chitwan";
$recreationn="Hotel Monalisa";

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
</html>