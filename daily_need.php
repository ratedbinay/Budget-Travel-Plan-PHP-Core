<?php 
if(!isset($_SESSION)) {
  session_start();
}
 
if(isset($_SESSION['numberofperson'])){
  $person=$_SESSION['numberofperson'];
}
 ?>

<style type="text/css">
	
	@charset "UTF-8";
.image {
  width: 250px;
  float: left;
  margin: 20px;
}

body {
  font-size: small;
  line-height: 1.4;
}

p {
  margin: 0;
}

.performance-facts {
  border: 1px solid black;
  margin: 20px;
  float: left;
  width: 280px;
  padding: 0.5rem;
}
.performance-facts table {
  border-collapse: collapse;
}

.performance-facts__title {
  font-weight: bold;
  font-size: 2rem;
  margin: 0 0 0.25rem 0;
}

.performance-facts__header {
  border-bottom: 10px solid black;
  padding: 0 0 0.25rem 0;
  margin: 0 0 0.5rem 0;
}
.performance-facts__header p {
  margin: 0;
}

.performance-facts__table, .performance-facts__table--small, .performance-facts__table--grid {
  width: 100%;
}
.performance-facts__table thead tr th, .performance-facts__table--small thead tr th, .performance-facts__table--grid thead tr th, .performance-facts__table thead tr td, .performance-facts__table--small thead tr td, .performance-facts__table--grid thead tr td {
  border: 0;
}
.performance-facts__table th, .performance-facts__table--small th, .performance-facts__table--grid th, .performance-facts__table td, .performance-facts__table--small td, .performance-facts__table--grid td {
  font-weight: normal;
  text-align: left;
  padding: 0.25rem 0;
  border-top: 1px solid black;
  white-space: nowrap;
}
.performance-facts__table td:last-child, .performance-facts__table--small td:last-child, .performance-facts__table--grid td:last-child {
  text-align: right;
}
.performance-facts__table .blank-cell, .performance-facts__table--small .blank-cell, .performance-facts__table--grid .blank-cell {
  width: 1rem;
  border-top: 0;
}
.performance-facts__table .thick-row th, .performance-facts__table--small .thick-row th, .performance-facts__table--grid .thick-row th, .performance-facts__table .thick-row td, .performance-facts__table--small .thick-row td, .performance-facts__table--grid .thick-row td {
  border-top-width: 5px;
}

.small-info {
  font-size: 0.7rem;
}

.performance-facts__table--small {
  border-bottom: 1px solid #999;
  margin: 0 0 0.5rem 0;
}
.performance-facts__table--small thead tr {
  border-bottom: 1px solid black;
}
.performance-facts__table--small td:last-child {
  text-align: left;
}
.performance-facts__table--small th, .performance-facts__table--small td {
  border: 0;
  padding: 0;
}

.performance-facts__table--grid {
  margin: 0 0 0.5rem 0;
}
.performance-facts__table--grid td:last-child {
  text-align: left;
}
.performance-facts__table--grid td:last-child::before {
  content: "•";
  font-weight: bold;
  margin: 0 0.25rem 0 0;
}

.text-center {
  text-align: center;
}

.thick-end {
  border-bottom: 10px solid black;
}

.thin-end {
  border-bottom: 1px solid black;
}
</style>


<section class="performance-facts">
  <header class="performance-facts__header">
    <h1 class="performance-facts__title">Daily need</h1>
    <p>Average price of everyday requirement</p>
    
  </header>
  <table class="performance-facts__table">
    <thead>
      
    </thead>
    <tbody>
      <tr>
        <th colspan="2">
          <b>Materials</b>
          
        </th>
        <td>
         PRICE
        </td>
      </tr>
      <tr class="thick-row">
        <td colspan="3" class="small-info">
          
        </td>
      </tr>
      <tr>
        <th colspan="2">
          <b>Food</b>
          x 2
        </th>
        <td>
          <b>500</b>
        </td>
      </tr>

      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Lunch
        </th>
        <td>
          <b>400</b>
        </td>
      </tr>

      <tr>
        <td class="blank-cell">
        </td>
        <th>
          Water
          4 bottle
        </th>
        <td>
          <b>100</b>
        </td>
      </tr>
      
      <tr>
        <th colspan="2">
          <b>Mobile Recharge(inc internet)</b>           
        </th>
        <td>
          <b>50</b>
        </td>
      </tr>   
      <tr>
        <th colspan="2">
          <b>Travel</b>  
          (Taxi reference)         
        </th>
        <td>
          <b>1000</b>
        </td>
      </tr>   
      <tr>
        <th colspan="2">
          <b>Tickets for heritage sites</b>                   
        </th> 
        <td>
          <b>400</b>
        </td>
      </tr>  
      <tr>
        <th colspan="2">(Avg. 2 per day)</th> 
      </tr>      
      
      <tr class="thick-end">
        <th colspan="2">
          
        </th>
        <td>
        </td>
      </tr>
    </tbody>
  </table>
  
  <table class="performance-facts__table--grid">
    <tbody>
      <tr>
        <td colspan="2">
          Total
        </td>
        <td>
          2450
        </td>
      </tr>
<?php  $tprice= 2450 * $person;
echo "     <tr>
        <td colspan='2'>
          Total for ". $person ." Person
        </td>
        <td>
           " .$tprice."
        </td>
      </tr> "; ?>
      <tr class="thin-end">
        <td colspan="2">
          +10% overhead
        </td>
        <td>
   <?php  $overhead = $tprice*1.1;
   echo "<b>".$overhead."</b> "; ?>
        </td>
      </tr>
    </tbody>
  </table>
  
  
  
  <p class="small-info">
    Note:
  </p>
  <p class="small-info text-center">
    This data is estimated daily price, not accurate. This might change according to places and types of equipment used. 
  </p>

  <?php
      $_SESSION['daily_need']=$overhead;
  ?>
  
</section>