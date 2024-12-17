<?php  
if ($_SESSION['levels']=="ADMIN")
{
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-myfont {
  font-family: "Bernard MT Condensed";
}
</style>
<br>
<div class="w3-center w3-myfont w3-xlarge">
<center>MAIN MENU<br>[admin]</center>
</div>
<BR>
<div class="w3-bar w3-blue-gray">
  <a href="room.php" class="w3-bar-item w3-button w3-hover-pale-blue">ROOM SETUP</a>
  <a href="category.php" class="w3-bar-item w3-button w3-hover-pale-blue">CATEGORY</a>
  <a href="staff.php" class="w3-bar-item w3-button w3-hover-pale-blue">STAFF</a>
  <a href="import_staff.php" class="w3-bar-item w3-button w3-hover-pale-blue">STAFF IMPORT</a>
  <a href="booking.php" class="w3-bar-item w3-button w3-hover-pale-blue">BOOKING</a>
  <a href="booking_list.php" class="w3-bar-item w3-button w3-hover-pale-blue">BOOKING LIST</a>
  <a href="report.php" class="w3-bar-item w3-button w3-hover-pale-blue">REPORT</a>
  <a href="signout.php" class="w3-bar-item w3-button w3-hover-pale-blue">SIGN OUT </a>
  </div>
<?php
}
else
{
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-myfont {
  font-family: "Bernard MT Condensed";
}
</style>
<br>
<div class="w3-center w3-myfont w3-xlarge">
<center>MAIN MENU<br>[staff]</center>
</div>
<BR>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-bar w3-blue-gray">
  <a href="booking.php" class="w3-bar-item w3-button w3-hover-pale-blue"> ROOM BOOKING</a>
  <a href="booking_list.php" class="w3-bar-item w3-button w3-hover-pale-blue">BOOKING LIST</a>
  <a href="signout.php" class="w3-bar-item w3-button w3-hover-pale-blue">SIGN OUT</a>
  </div>
<?php
}
?>
<div class="w3-third w3-container w3-center"> 
  <h4>SINGLE ROOM<br>RM200</h4>  
  <p><img src="single.jpg" class="w3-round-large" alt="Norway" style="width:70%"></p>
</div>

<div class="w3-third w3-container w3-center">
  <h4>TWIN ROOM<br>RM300<br></h4>
  <p><img src="twin.jpg" class="w3-round-large" alt="Norway" style="width:80%"></p>
</div>

<div class="w3-third w3-container w3-center">
  <h4>FAMILY ROOM<br>RM400<br>FREE BREAKFAST!</h4>
   <p><img src="family.jpg" class="w3-round-large" alt="Norway" style="width:60%"></p>
</div>