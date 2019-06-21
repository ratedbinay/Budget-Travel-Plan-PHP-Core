<?php

session_start();
include("dbconfig.php");
include("header1.php");


    ?>

  <html> <head> 
  <title>Buddet Travel Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 


<style>
            @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {

  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}
table{
   margin-top: 50px;

}
h1 {
  font-size:25px;    
  line-height:1em;
  text-align: left;
  color: #4DC3FA;
}



.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
  float: center;

    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
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

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

.button2 {
  background-color: white; 
  color: black; 
  width: 116px;
  height: 50px;
  font-size:25px; 
  border: 2px solid #008CBA;
}
.button2:hover{
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

            
        </style>
        <body style=" background-image: url('assets/images/image4.jpg');">
        
     <div class="container">
      <div class="row">
      <div class="col-lg-offset-2 col-lg-8">
    <form method="POST" action="">

    	<table > 
        <tr><td><h1>Currency</h1></td>
        <td><h1>Unit</h1></td>
        <td><h1>Buying Price</h1></td>
        <td><h1>Selling Price</h1></td>
        <td><h1>User amount</h1></td>
        <td><h1>Nepali equivalent</h1></td>
        <td><h1>Select</h1></td></tr>
<?php

#getting data from previous page
        #test code


    
  if(isset($_SESSION['enteredmoneyy']))
  {
      $totalamo= $_SESSION['enteredmoneyy'];     

      
  }

$amount = array();
$selectoption = array();
$num=0;
$f = fopen("rates.csv", "r");
while (($line = fgetcsv($f)) !== false) {


        if($num == 0){
         $num++; 
         continue; 
       }
        

        echo "<tr>";



        foreach ($line as $cell) {
          
        		$tempdata=htmlspecialchars($cell);
                echo "<td>" . $tempdata ."</td>";
                
        }

          #amount entered by user
        echo"<td>". $totalamo."</td>";
        
        
               # echo'<a > '. $totalamo. '</a>';
               # echo "</td>";


        	

          #total amount of tempdata
        $nepaliequ=$totalamo * $tempdata;
        echo"<td>". $nepaliequ."</td>";
        #echo"<td>"; 
        
        
              #  echo'<a > '. $nepaliequ. '</a>';
               # echo "</td>";

        
        echo"<td>"; 
        $amount[$num]=$nepaliequ;
        $thisbtnn=$num;
        echo'
        <input type="radio" name="currencyy" value= "'.$thisbtnn.'"> 
         ';
               
        
                #echo'<a  href="city.php"> SELECT This </a>';
                echo "</td>";
                $num=$num+1;
        echo "</tr>";
}


fclose($f); 
?>
</table >
<br>
<input type="submit" class="button2"  name="exchangesubmitbtn" /> 
</form>

<?php
$oldid=0;
if (isset($_POST['exchangesubmitbtn'])) 
{
  
		if(isset($_POST['currencyy']))
		{
      
			$a=1;
			while(1)
			{
				if ($_POST['currencyy']==$a)
        {
					$finalprice=$amount[$a];
					break;
				}
				$a++;
			}
      

      #checking if same amount was entered before as well
         /* $checkpre= "SELECT userID
          FROM tcurrency
          WHERE TotalCurrency='$finalprice'
          ORDER BY userID DESC
          LIMIT 1 ";

          $checkthis = mysqli_query($connection, $checkpre);   
          $roww3= mysqli_fetch_row($checkthis);
          $oldid=$roww3['userID'];

          
             if (isset($checkthis)) {
               
             
             ?>
              <script type="text/javascript">
                var r=confirm("Someone already entered this money before. Do you want to check his plan?");
                if (r==true)
                  {

                    <?php
                    
                    $_SESSION['olduser']=$oldid;
                    ?>
                    //header("Location:oldplan.php");
                    
                    window.location.replace("oldplan.php");
                  }
                  
                    </script>
                    */
                          
                
                 
                
                       #inserting into new database with userid and total price
                        $query= "INSERT INTO tcurrency SET 
                                  userID='',                             
                                  TotalCurrency='$finalprice'
                                  ";


                                 #finding user ID
                       $result ="SELECT userID 
                       FROM tcurrency
                       ORDER BY userID DESC 
                       LIMIT 1";
                       $results = mysqli_query($connection, $result);
                       //print values to screen
                       $row = mysqli_fetch_assoc($results);
                       $uid= $row['userID']+1;
                         
                       $_SESSION['enteredmoney'] = $finalprice;
                       $_SESSION['thisuserID']= $uid;


                       # $done = mysqli_query($connection, $query);
                       if(mysqli_query($connection, $query))
                      { 
                        ?>
                              <script> window.location.replace("city.php"); </script>
                          <?php 
                       }
                       else
                       {
                        return NULL;
                       }
                     
                }               
                          
       
    }



?>

</div></div></div>
</body>

</html>

