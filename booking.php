<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE 
require('header.php');
?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>

<html>
<body><center>
<form name="searchForm" method="post" action="booking_start.php">
<table width="800" border="0" align="center" cellpadding="0">
<tr>
    <td colspan="2" align="center">
    <h2>GUEST INFORMATION<h2></td>
</tr>
<tr>
    <td align="right" >SEARCH IC NUMBER:</td>
    <td> <input type="text" name="icguest" autofocus> </td>
</tr>
<tr>
    <td colspan="2" align="center"> <input type="submit"
	    name="SUBMIT" id="SUBMIT" value="SEARCH NOW" > </td>
</tr>
<tr>
  <td colspan="2" align="center">OR</td>
 </tr>
 <tr>
    <td align="right" >REGISTER NEW GUEST</td>
	<td><a href="guest_register.php">REGISTER HERE!</a></td>
</tr>
</table>
</form>
</body>
<a href="index2.php">MAIN MENU </a></br></center>
<?php require('footer.php'); ?>
</html>