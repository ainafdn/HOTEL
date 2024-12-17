<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//GET THE ID STAFF
session_start();
$saleMan=$_SESSION['idstaff'];
//RECEIVED IC NUMBER FROM URL 
$guest2=$_GET['icguest'];
//GET CURRENT RECORD ON SELECTED ID 
$result = mysqli_query($samb, " SELECT * FROM guest WHERE
icguest='$guest2'");
while ($res = mysqli_fetch_array($result))
{
  $Name = $res['name'];
  $Ic = $res['icguest'];
  $Hp = $res['hpnum'];
}
?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>
<html>
<body>
<form method="POST" action="booking_enter.php">
<table width="800" border="1" align="center">
<tr>
    <td colspan="2" align="center">GUEST INFORMATION</td>
</tr>
<tr>
    <td width="200">Guest Ic Number:</td>
    <td width="400"><input readonly type="text" name="icguest"
      value="<?php echo $Ic;?>"></td>
</tr>
<tr>
    <td>Guest Name:</td>
    <td><input size="60" readonly type="text" name="name"
      value="<?php echo $Name;?>"></td>
</tr>
<tr>
    <td>Guest HP Number:</td>
    <td><input readonly type="text" name="hpnum"
  value="<?php echo $Hp;?>"></td>
</tr>
<tr>
  <td colspan="2" align="center">BOOKING SECTION</td>
 </tr>
 
 <tr>
    <td>Room:</td>
  <td><select name="idroom">
  <?php
  $dataRoom=mysqli_query($samb,"SELECT * FROM room");
  while ($infoRoom=mysqli_fetch_array($dataRoom))
  {
    echo "<option hidden selected> -- Choose Room -- </option>";
    echo "<option value='$infoRoom[idroom]'>$infoRoom[nomroom]</option>";
  }
  ?>
  </select></td>
  
<tr>
    <td>Check In Date</td>
  <td><input type="date" name="checkin"></td>
</tr>
    
<tr>
    <td>Check Out Date</td>
  <td><input type="date" name="checkout"></td>
  <input hidden type="text" name="staff"
  value="<?php echo $saleMan;?>">
</tr>

<tr>
    <td colspan="2" align="center">
  <button type="submit">BOOKING NOW</button>
  <button type="reset">RESET</button></td>
</tr>

<tr>
    <td colspan="2" align="center">
  <a href="index2.php">MAIN MENU </a></td>
</tr>

</table>
</form>
</body>
</html>