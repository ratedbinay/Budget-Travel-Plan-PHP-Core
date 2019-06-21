<?php 
include("header.php");
include("sidebar.php");
include("email.php");
include("manualentry.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sun Rise Paraglide</title>
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
          <div class="col-sm-6">
            <img src="images/sunriseparaglide.jpg" style="width: 100%; height: 400px;">
          </div>
          <div class="col-sm-6">
            <h1>WELCOME to Sunrise Paragliding</h1>
              <p>For everyone that has enjoyed a tandem flight with us, learned to fly under our instructors, there is one thing we hear consistently: "You have the best job in the world." We don't take this comment lightly, and even after hearing it a thousand times it is a nice reminder of how privileged we are to be able to make our passion our profession. It speaks a lot for our team for this passion to still remain after all these years. In fact, it grows with almost every flight. Nothing compares to the feeling of soaring freely with the birds over one of the most picturesque landscapes on earth, and with each joyful shout from a passenger that leaves the ground for the first time, or a student that has made their first successful landing, our passion is recharged. </p>


          </div>
        </div>
        
      </div>
      </div>

  


<div class="button">
       <form method="POST">
       <div class="dropdown">
                  <button class="btn btn-lg btn-book">Offers</button>
                  <div class="dropdown-content">
                    <a><input type="radio" name="radio" value="7000">Normal - NRs 7000</a>
                    <a><input type="radio" name="radio" value="9000">With pickup/drop + lunch service - NRs 9000 </a>
                  </div>

                </div>
        <a href="http://sunrise-paragliding.com/booking" name="bookhere" class="btn btn-lg btn-book">Book</a>           
          <input type="submit" value= "Select"  class="btn btn-lg btn-book"  name="clickhere" /> 
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
$recreationn="Sun rise paraglide";

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
                         # refreshheader();
                          #refreshsidebar();
                          echo "<script type='text/javascript'>alert('submitted successfully!')
                                
                              
                              </script>";
                          
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