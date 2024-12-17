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
<h2>LIST OF ROOM</h2><br>
<table width="811" border="1" align="center">
  <tr>
    <td colspan="5" valign="middle" align="right"><b>
    <a href="room_add.php">[+] Add Room</a></b></td>
  </tr>
  <tr>
    <td width="40"><b>Num</b></td>
    <td width="150"><b>Room Number</b></td>
    <td width="200"><b>Type Room</b></td>
    <td width="150"><b>Price Room</b></td>
    <td width="150"><b>Action</b></td>
  </tr>
<?php
  $data1=mysqli_query($samb,"SELECT * FROM room ORDER BY nomroom ASC");
  $no=1;
while ($info1=mysqli_fetch_array($data1))
        {
$dataCat=mysqli_query($samb,"SELECT * FROM categories
WHERE idcat='$info1[idcat]'");
$infoCat=mysqli_fetch_array($dataCat);
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['nomroom']; ?></td>
    <td><?php echo $infoCat['category']; ?></td>
    <td>RM <?php echo $infoCat['price']; ?></td>
    <td><a href="room_update.php?idroom=
    <?php echo $info1['idroom'];?>">UPDATE</a> |
        <a href="room_delete.php?idroom=
	<?php echo $info1['idroom'];?>">DELETE</a></td>
</tr>
  <?php $no++; } ?>
</table>
<a href="index2.php">MAIN MENU</a><br>
</center></body>
</html>