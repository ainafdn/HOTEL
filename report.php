<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER
require('header.php');
?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>
<html>
<body>
<center>
<table width="711" border="0">
    <td><p><strong>PRINT MONTHLY REPORT</strong></p>
	 <form name="form1" method="post" action="report_print.php">
	  <table width="600" border="0"
	   <tr>
	    <td width="200">Room Number</td>
		<td width="31">:</td>
		<td width="429"><label for="select"></label>
		  <select name="numroom">
	<?php
	$Room=mysqli_query($samb,"select * from room");
	echo "<option>-</option>";
	while ($getRoom=mysqli_fetch_array($Room))
	{
	echo "<option value='$getRoom[idroom]'>$getRoom[nomroom]</option>";

    }
    ?>
</select></td>
        </tr>
        <tr>
        <td>Month</td>
        <td>:</td>
        <td><select name="month" id="month">
            <option value="-"></option>
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		   </select></td>
		  </tr>
		  <tr>
		    <td>Year</td>
			<td>:</td>
			<td><select name="year" id="year">
			  <option value="-">-</option>
			  <option>2019</option>
			  <option>2020</option>
			</select></td>
		   </tr>
		   <tr>
		    <td colspan="3"><input type="submit"
			  name="button" id="button" value="PRINT NOW"></td>
			</tr>
		   </table>
		</form>
		<p>&nbsp;</p>
		<hr /><div align="center" class="style15"></div>
		    <center>   <br><br>
		        <a href="index2.php">MAIN MENU</a><br>
		    </center>
		</center>
</body>

</html>
