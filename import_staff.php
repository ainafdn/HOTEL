<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL DATABASE 
require('header.php');

?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>
<html>
<center>
<h2>IMPORT STAFF RECORDS<br>
---CSV FILE IMPORT---</h2>
<body>
<form action="import_process.php" method="post"
name="upload_excel" enctype="multipart/form-data">
<table width="700" border="0" align="center"
  <tr>
    <td width="300">Choose CSV Excel file:</td>
	<td width="400">
	<input type="file" name="file" id="file" class="input-large">
	</td>
	</tr>
	<tr>
	<td></td>
    <td width="400"><button type="submit" name="Import"
>UPLOAD NOW</button></td>
  <tr>
</table>
</form>
<a href="index2.php">MAIN MENU </a>
<center></body>
</html>

</form>
	