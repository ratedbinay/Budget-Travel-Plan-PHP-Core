
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
  float: right;
  margin-top: 15px;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav h1 {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-buttonn {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Full-width input fields */
.form-container input[type=number],  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
  


  <div class="topnav">
    <a onclick="openForm()">About</a>
    <a>Cities</a>
  <a class="active" href="index.php">Home</a>
  
  <h1>BUDGET TRAVEL Plan</h1>
  
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
</div>
</body>

</div>