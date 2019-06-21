
<?php
include("dbconfig.php");
if(!isset($_SESSION)) 
    { 
       session_start();
    }

    if(isset($_SESSION['thisuserID']))
      {
          $userid1=$_SESSION['thisuserID']+1;
      }
?>  

  <html> <head> <title>Bugdet Travel Plan</title>
  <title>Bugdet Travel Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 



<style>


 
.open-buttonn {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 528px;
  width: 280px;
  z-index: 999;
}

/* The popup form - hidden by default */
.form-popup {
  background-color: #555;
  color: white;
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 999;
}

/* Add styles to the form container */
.form-container {

  max-width: 300px;
  padding: 10px;
  background-color: grey;
}

/* Full-width input fields */
.form-container input[type=text], {
  width: 100%;
  color:black;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Full-width input fields */
.form-container input[type=number],  {
  width: 100%;
  color:black;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus{
  background-color: #ddd;
  color:grey;
  outline: none;
}
.form-container input[type=number]:focus{
  background-color: #ddd;
  color:grey;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.thisbtn{
  width: 100%;
  color:black;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container h1 {
  border-color: yellow;
  float: center;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 40px;
  font-style: bold;
} 
.form-container p {
  
  color:  white;
  text-align: left;
  font-size: 20px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  color:black;
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body> 




<button class="open-buttonn" onclick="openForm()">Enter Manually</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <form method="POST">
      <h1>Manual Entry</h1>
      
          <div class="form-group">
            <p>Place:</p>
            <input type="text" class="thisbtn" placeholder="Place" name="manualplace" required>

            <p>Activity:</p>
            <input type="text" class="thisbtn" placeholder="Recreation" name="manualrecreation" required>

            <p>Price:</p>
            <input type="number" class="thisbtn" placeholder="Price" name="manualprice" required>
            <br>
          </div>
      <input type="submit" value= "Entry" class="btn"  name="manualenterybtn" />    
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </form>
</div>


<script>
function openForm() {

    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>


<?php


if(isset ($_POST['manualenterybtn']))
{      
    

        #Check if empty


      $place1=$_POST['manualplace'];
      if (empty($place1)) 
      {
          echo "<script type='text/javascript'>alert('Please fill place!')</script>";
      }
      $recreation1=$_POST['manualrecreation'];
      if (empty($recreation1)) 
      {
          echo "<script type='text/javascript'>alert('Please fill activity!')</script>";
      }
      $price1=$_POST['manualprice'];
      if (empty($price1)) 
      {
          echo "<script type='text/javascript'>alert('Please fill price!')</script>";
      }

      if ( (!empty($place1))&&(!empty($recreation1))&&(!empty($price1))    )
      {
        $query= "INSERT INTO alldetails SET 
                 userid='$userid1', 
                 place='$place1',
                 recreation='$recreation1',
                 price='$price1'
                 ";
                                        
                  if(mysqli_query($connection, $query))
                  {
                    $_SESSION['enteredmoney']=$_SESSION['enteredmoney']-$price1;
                    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                    
                  }
                  else
                  {
                      echo "<script type='text/javascript'>alert('failed!')</script>";
                  }
      }
}

?>

</div></body></html> 

    