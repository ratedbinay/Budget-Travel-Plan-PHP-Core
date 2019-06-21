
<?php
include("header1.php");
include("dbconfig.php");

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

table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid black;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;

}
 
 
</style>
</head>
<body>




<?php


$uuid= $_SESSION['olduser'];


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

//You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);
?>

<form method="POST" action="">
<table>
<tr ><th>Place</th>
<th>Recreation</th>
<th>Price</th>

</tr>


<?php

while($row = mysqli_fetch_array($result))
{
$pla[$count]= $row['place'];
$rec[$count]= $row['recreation'];
$pri[$count]= $row['price'];

   //Creates a loop to loop through results
echo "<tr><td>" . $pla[$count] . "</td><td>" . $rec[$count] . "</td><td>" . $pri[$count] . "</td> 
</tr>";  //$row['index'] the index here is a field name
$count++;
} 

echo "
 <tr ><td>Total</td>
        <td> </td>
        <td>" . $row1['value_sum'] . "</td>
        </tr>";

echo "</table></form> </div>"; 


    




?>

</body>
</html> 