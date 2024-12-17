<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER
require('header.php');
//RECEIVED POST VALUE 
if(isset($_POST['idstaff']))
{
    $IdStaff=$_POST['idstaff'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    //ADD NEW RECORD TO TABLE 
    $result = mysqli_query($samb, "INSERT INTO staff
     (idstaff,name,pass,levels) values ('$IdStaff','$name','$pass','STAFF')");
//DISPLAY MSG
echo "<script>alert('NEW RECORD ADDED');
window.location='staff.php' </script>";
    }

?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>
<html>
<center>
<body>
<h2>REGISTER NEW STAFF</h2>
<form name="form1" action="staff_add.php" method="POST">
<table width="700" border="1" align="center">
  <tr>
    <td width="200">STAFF NAME:</td>
    <td width="300"><input type="text" name="name" size=60
    id="name" placeholder="OMAR BIN AZMAN"
    required autofocus /></td>
  </tr>
  <tr>
    <td width="200">USER NAME:</td>
    <td width="300"><input type="text" name="idstaff" size=30
        id="staffid" placeholder="mar10" required /></td>
  </tr>
  <tr>
    <td width="200">PASSWORD:</td>
    <td width="300"><input type="text" name="pass"
        id="pass" placeholder="1234" required /></td>
  </tr>
</table>
<input type="submit" name="update" id="submit" value="ADD NEW STAFF" />
</form>
<a href="staff.php">STAFF LIST</a><br>
</body ></center>
<?php require('footer.php'); ?>
</html> 