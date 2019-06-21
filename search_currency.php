<?php


#to connect database 
#include("dbconfig.php");
include("header1.php");
session_start();
?>

<html> <head> <title>Bugdet Travel Plan</title>
  <title>Bugdet Travel Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> </head>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>



        <body  onload="loadExternalfile()" style=" background-image: url('assets/images/image4.jpg');">

        <section class="cmnsection">

       <?php
       


                        $command = escapeshellcmd("C:/xampp/htdocs/budget2/rategenerator.py");
                        shell_exec("python ".$command);
?>
<?php
 
 
    
    if(isset ($_REQUEST['amountEnterBtn']))
          {
                      $amountt=$_REQUEST['amountentered'];
                      $days=$_REQUEST['daystostay'];
                      $person=$_REQUEST['numberofperson'];
                      

                      if (empty($amountt)) 
                      {

                        ?>
                         <script type="text/javascript">
                          var r=confirm("Please fill amount of money");
                          if(r==true){

                          }
                          else{
                            window.location.replace("index.php");
                          }
                          </script>
                          <?php
                      }
                      if (empty($days)) 
                      {
                        ?>
                         <script type="text/javascript">
                          var r=confirm("Please fill number of days to stay");
                          if(r==true){

                          }
                          else{
                            window.location.replace("index.php");
                          }
                          </script>
                          <?php
                      }

                      if (empty($person)) 
                      {
                        ?>
                         <script type="text/javascript">
                          var r=confirm("Please fill number of Person to visit");
                          if(r==true){

                          }
                          else{
                            window.location.replace("index.php");
                          }
                          </script>
                          <?php
                      }
                      


                      else
                      {
                        $_SESSION['enteredmoneyy'] = $amountt;
                        $_SESSION['numberofdays'] = $days;
                        $_SESSION['numberofperson'] = $person;
                       
                        ?>
                        <script>
                        window.location.replace("rate_table.php");
                      </script>

                        <?php
                        
					             }
              }

          

?>
<div class="container section-exchange">
        <div class="row">
          <div class="col-lg-offset-2 col-lg-8">
            <div class="panel panel-default">
              <div class="panel-body">
                <form action>
                  <div class="row">
                    
                    <div class="col-lg-6">
                    
                         <div class="form-group">
                          <label for="amount">Enter Amount of money in your currency *</label>
                          <input type="number" class="form-control" name="amountentered">
                          <label for="amount">Enter number of days *</label>
                          <input type="number" class="form-control" name="daystostay">
                          <label for="amount">Enter number of Person *</label>
                          <input type="number" class="form-control" name="numberofperson">
                          

                          <div class="col-lg-6">
                    <input type="submit" value= "Enter here" class="btn btn-lg btn-select" name="amountEnterBtn" />
                    </div>
                        </div>
                    </div>    
                    
                    </div>
                </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>

      </section></body></html>

      