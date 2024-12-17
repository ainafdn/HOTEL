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
<h2>CATEGORIES & PRICE</h2>
<table width="700" border="1" align="center">
  <tr>
    <td colspan="8" valign="middle" align="right"><b>
	<a href="category_add.php">[+] Add New Category</a></b></td>
  </tr>
  <tr>
    <td width="20"><b>Num.</b></td>
	<td width="200"><b>Category</b></td>
	<td width="70"><b>Price</td>
	<td width="150"><b>Action</b></td>
	</tr>
 <?php
$data1=mysqli_query($samb,"SELECT * FROM categories ORDER BY price ASC");
$no=1;
    while ($info1=mysqli_fetch_array($data1))
	    {
        ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['category']; ?></td>
    <td>RM <?php echo $info1['price']; ?></td>
	<td><a href="category_update.php?idcat=<?php echo $info1['idcat'];?>">UPDATE</a> |
	    <a href="category_delete.php?idcat=<?php echo $info1['idcat'];?>">DELETE</a>
	</td>
  </tr>
		<?php $no++;} ?>
</table><br/>
<a href="index2.php">MAIN MENU</a><br>
</center></body><br/><br/>
<?php require('footer.php'); ?>
</html>