
<?php
if(!isset($_SESSION)) {
  session_start();
}
include("dbconfig.php");

 
if(isset($_SESSION['numberofdays'])){
  $days=$_SESSION['numberofdays'];
}
if(isset($_SESSION['daily_need']))
  {
     $daily_needs=$_SESSION['daily_need'];
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
/*
table {
  border-collapse: collapse;
  width: 100%;
  border: 4px black solid white ;
  font: 15px sans-serif;
  
}

th, td {
  text-align: left;
  padding: 8px;
  border: 2px solid black;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;

}*/

@import url(https://fonts.googleapis.com/css?family=Patua+One|Open+Sans);
.dailydetail{  
  color: black;
  font-family: 'Patua One', cursive;
  font-size: 17px;
  font-weight: 100;
  color: #000;
}
.dailydetail p{
  color: black;
}

table {
  padding-left: 10px;
  padding-right: 5px;
  padding-top: 20px;
  border-collapse: separate;
  background: #fff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  margin: 5px auto;
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

thead {
  font-size: 17px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

thead th {
  font-family: 'Patua One', cursive;
  font-size: 17px;
  font-weight: 100;
  color: #fff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
  text-align: left;
  padding: 20px;
  
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
  background-image: -moz-linear-gradient(#646f7f, #4a5564);
  background-image: -webkit-linear-gradient(#646f7f, #4a5564);
  background-image: linear-gradient(#646f7f, #4a5564);
  border-top: 1px solid #858d99;
}
thead th:first-child {
  -moz-border-radius-topleft: 5px;
  -webkit-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
}
thead th:last-child {
  -moz-border-radius-topright: 5px;
  -webkit-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}

tbody tr td {
  font-family: 'Open Sans', sans-serif;
 font-size: 15px;
  color: #5f6062;
  font-size: 13px;
  padding: 5px 5px 5px 5px;
  border-bottom: 1px solid #e0e0e0;
}

tbody tr:nth-child(2n) {
  background: #f0f3f5;
}

tbody tr:last-child td {
  border-bottom: none;
}
tbody tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 5px;
  -webkit-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
tbody tr:last-child td:last-child {
  -moz-border-radius-bottomright: 5px;
  -webkit-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

tbody:hover > tr td {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
  opacity: 0.5;
  /* uncomment for blur effect */
  /* color:transparent;
  @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
}

tbody:hover > tr:hover td {
  text-shadow: none;
  color: #2d2d2d;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}

.delbtn{
   
  background-color: white; 
  color: black; 
  width: 100%
  height: 40px;
  font-size:18px; 
  border: 2px solid #008CBA;
}
.delbtn:hover{
background-color: #FFF842;
  color: #403E10;
  font-weight: bold;  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #d7e4f7;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 38px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 15px;}
}


 
} 
</style>
</head>
<body>


<span style="font-size:30px;cursor:pointer; float:right; "  onclick="openNav()">&#9776; Total</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "290px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 



<?php

$result ="SELECT userID 
FROM tcurrency
  ORDER BY userID DESC 
 LIMIT 1";
$results = mysqli_query($connection, $result);
//print values to screen
 $row = mysqli_fetch_assoc($results);
 $uuid= $row['userID']+1;

#get total price of user's selected
#add data from user's price database
 $result1="SELECT SUM(price) AS value_sum FROM alldetails WHERE userid='$uuid' ";
$result2 = mysqli_query($connection, $result1); 
$row1 = mysqli_fetch_assoc($result2); 
$sum1 = $row1['value_sum'];




$query = "SELECT place, recreation, price 
FROM alldetails 
WHERE userid='$uuid'
"; 

 
$count=1;
$pla= array();
$rec= array();
$pri=array();
$pripeople=array();


//You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);
?>

<form method="POST" action="">
<table>

<tr >
  <th> </th><th>Place </th>
<th>Recreation </th>
<th>Price </th>


<th>Delete</th>
</tr>


<?php

while($row = mysqli_fetch_array($result))
{
$pla[$count]= $row['place'];
$rec[$count]= $row['recreation'];
$pri[$count]= $row['price'];



   //Creates a loop to loop through results
echo "<tr><td> </td><td>" . $pla[$count]. "</td><td>" . $rec[$count] . "</td><td>" . $pri[$count] . "</td> 
<td > <input type='checkbox' name='deletedis' value='".$count."'></td></tr>";  //$row['index'] the index here is a field name
$count++;
} 

echo " <tr> </tr>
<tr> </tr><tr> </tr>
 <tr>
 <td> </td>
 <td>Total</td>
        <td> </td>   
        
        <td>" . $sum1 . "</td>
        <td> </td>
        
        </tr>        

        ";     

 echo"<tr> <td></td><td>Daily need for ".$days." days</td>";
 ?>
 <td><div class="dailydetail"><p onclick="popupCenter('daily_need.php')">See per day</p></div></td>  
  <?php

  
  $totaldaydailyneed= $daily_needs*$days;

  echo"<td>".$totaldaydailyneed ."</td> 
  <td> </td>

</tr>";



$grandtotal= $sum1 + $totaldaydailyneed;
echo"<tr><td> </td> <td> <b> Grand Total </b> </td>
  <td> </td> 
  <td>".$grandtotal."</td> 
  <td> </td>
</tr>

</table>";

?>
<script>
function popupCenter(pageURL, title, w, h) {
    var left = (screen.width / 2)  - (w / 2);
    var top  = (screen.height / 2) - (h / 2);
    var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>


<br><input type='submit' name='deletebtn' class='delbtn' value='Delete'>
<input type='submit' name='clearbtn' class='delbtn'  value='CLEAR ALL'></form> </div> 
<?php

    if(isset($_POST['deletebtn']) )
    {
       if (isset($_POST['deletedis']))
       {
            $a=1;
            while(1)
             {
                 if ($_POST['deletedis']==$a)
                  {

                    $deleteindex=$a;
                    break;
                  }
                  $a++;
             }             
                
             #count how many same data are there
             $numofdata= "SELECT COUNT(*) as totalnumofsamedata FROM alldetails WHERE place='$pla[$deleteindex]' AND recreation='$rec[$deleteindex]' AND price='$pri[$deleteindex]'
               ";
             $countdata=mysqli_query($connection, $numofdata);
             $row5 = mysqli_fetch_assoc($countdata);
             $row6= $row5['totalnumofsamedata'];
             
             if ($row6>0) {
              $result = "DELETE  
               FROM alldetails
               WHERE place='$pla[$deleteindex]' AND recreation='$rec[$deleteindex]' AND price='$pri[$deleteindex]'
               ";


               $_SESSION['enteredmoney']=$_SESSION['enteredmoney']+($pri[$deleteindex] * $row6 ) ;

               $results = mysqli_query($connection, $result);
               
              }
          
          }   
       }


       if(isset($_POST['clearbtn']) ){

        ?>
        <script>          
            
            var cf=confirm("do you want to delete all Y/N");
              if(cf){

                <?php

                  $result = "DELETE  
               FROM alldetails
               WHERE userid='$uuid'
               ";

               $_SESSION['enteredmoney']=$_SESSION['enteredmoney']+ $grandtotal ;

               $results = mysqli_query($connection, $result);               

                ?>
              }
              
             else {
              
            }
            
          
        </script>
        <?php
       }


    if($_SESSION['enteredmoney']<0)
    {
      ?>
        <script>
        alert("Your plan is going over budget, Reduce your plan to make it within your budget");
      </script>
      <?php
    }


    if (!$results){
      echo"failed";
    } 

    function refreshsidebar(){
      ?>
              <script> document.location.reload(true) </script>
             <?php 
             exit();              
     # header("Refresh:0");
    } 

?>

</body>
</html> 