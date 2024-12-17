<?php 
session_start();
//TO AVOID BAYPASS
include ("security.php");
//CONNECT TO DATABASE
require ('config.php');
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
<body>
<center><table width='70%' border=0>
<tr>
    <td><?php include ("menu.php"); ?>  </td>
</tr>
</table></center></body><br><br>
<?php require('footer.php'); ?>
</html>

