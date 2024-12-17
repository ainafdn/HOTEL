<?php
//CONNECT TO DATABASE 
require('config.php');
//RECALL HEADER FILE 
require('header.php');
//START LOGIN SESSION 
session_start();
//GET THE POST VALUES 
if (isset($_POST['idstaff'])) {
	//PASS POST VALUE TO VARIABLE 
    $user = $_POST['idstaff'];
	$pass = $_POST['pass'];
	//EXE. THE SQL STATEMENT 
	$query = mysqli_query($samb, "SELECT * FROM STAFF
	 WHERE idstaff='$user' AND pass='$pass'");
	  $row = mysqli_fetch_assoc($query);
	
if(mysqli_num_rows($query) == 0||$row['pass']!=$pass)
        {
	//MSG IF FAIL TO LOGIN 
	echo "<script>alert('ID Staff OR Password incorrect');
	window.location='index.php'</script>";
	}
	else
	{
        $_SESSION['idstaff']=$row['idstaff'];
	$_SESSION['levels'] =$row['levels'];
	//CREATE VARIABLE FOR LOGIN SESSION 
	$saleMan=$_SESSION['idstaff'];
	
	//OPEN THE MENU 
	header("Location: index2.php");
	}
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

<center>
<table width='70%' border=0>
<tr>
    <td width="400"><FONT SIZE="+2"><U>STAFF LOGIN ONLY</U></td>
</tr>
    <td>
<form method="POST">
<p>STAFF LOGIN</P>
<label>ID Staff</label><br>
<input type="text" name="idstaff"
    placeholder="Ahmad" required><br>
<label>Password</label><br>
<input type="password" name="pass"
    placeholder="123" required><br>
<button type="submit">Login</button><br>
</td>
<td width="400"><font size="6" face="Georgia, Arial" color="maroon">
"Discover a hotel that defines a new dimension of luxury"
</td>
</tr>
</form>
</table></center>
</body><br><br>
<?php require('footer.php'); ?>
</html>

	
