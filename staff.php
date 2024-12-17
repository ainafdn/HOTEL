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
<center>
<h2>STAFF LIST</h2>
<table width="800" border="1" align="center"
  <tr>
    <td colspan="5" valign="middle" align="right"><b>
    <a href="staff_add.php">[+] Register New Staff</a></b></td>
  </tr>
  <tr>
    <td width="40"><b>Num.</b></td>
    <td width="300"><b>Staff Name</b></td>
    <td width="100"><b>User Name</b></td>
    <td width="50"><b>Password</b></td>
    <td width="150"><b>Action</b></td>
  </tr>
 <?php
  $data1=mysqli_query($samb,"SELECT * FROM staff");
      $no=1;
      while ($info1=mysqli_fetch_array($data1))
          {
          ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['name']; ?></td>
    <td><?php echo $info1['idstaff']; ?></td>
    <td><?php echo $info1['pass']; ?></td>
    <td><a href="staff_update.php?idstaff=<?php echo $info1['idstaff'];?>">UPDATE</a> |
    <?php
    //HIDDEN DELETE LINK FOR ADMIN
    if ($info1['levels']!="ADMIN")
    {
		?>
<a href="staff_delete.php?idstaff=<?php echo $info1['idstaff'];?>">DELETE</a>
    <?php
    }
    ?>
    </td>
  </tr>
  <?php $no++; } ?>
</table>
<a href="index2.php">MAIN MENU</a><br></center>
</body>
</html>