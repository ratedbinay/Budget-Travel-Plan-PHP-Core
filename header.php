<?php
  if(!isset($_SESSION)) 
  {
    session_start();
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

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  margin-top: 15px;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 20px;
}

.topnav h1 {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 30px;
}
.topnav h2 {
  float: right;
  
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>
</head>

  <?php
  
  if(isset($_SESSION['enteredmoney'])){
    $usablemoney = $_SESSION['enteredmoney'];
    
  }


   ?>

    <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="city.php">Cities</a>
  <a >About</a>

  <h2> Money left=  <?php echo $usablemoney;  ?> </h2>
  <h1>BUDGET TRAVEL PLAN</h1>
 

 <?php 

    function refreshheader(){
      $cou=1;
      if ($cou==1) {
        # code...
      
        location.reload(); 
             $cou++;
             die();

    }}

 ?>
 
<!--
  <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Team Members</h1>

    <button type="button" class="btn cancel" onclick="closeForm()">Binay Dahal 14709</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Saroj Adhikari 14732</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Niroj Prasain 14741</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Ojaswee Thapa 14720</button>
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
-->
  
</div>


    