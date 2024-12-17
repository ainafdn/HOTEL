<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//GET THE ID FROM URL
$IdCat = $_GET['idcat'];
//GET CURRENT RECORD ON SELECTED ID
$result= mysqli_query($samb,"SELECT * FROM categories WHERE idcat='$IdCat'");
while($res= mysqli_fetch_array($result))
{
    $cat=$res['category'];
    $rm=$res['price'];
}
//GET THE POST VALUE
if(isset($_POST['update']))
{	
    $cat=$_POST['cat'];
    $rm=$_POST['rm'];
	
    //UPDATE WITH NEW VALUE
    $result = mysqli_query($samb,"UPDATE categories SET category='$cat',price='$rm' WHERE idcat='$IdCat'");
//DISPLAY MSG
echo "<script>alert('RECORD SUCCESSFULLY UPDATED ');
window.location='category.php'</script>";
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
<h2>UPDATE CATEGORY & PRICE</h2>
<form method="post" enctype="multipart/form-data">
<table width="700" border="0" align="center">
  <tr>
    <td width="200">CATEGORY:</td>
    <td width="400"><input type="text" name="cat" id="cat" value="<?php echo $cat;?>" AUTOFOCUS /></td>
  </tr>
  <tr>
    <td width="200">PRICE:</td>
    <td width="400"><input type="money" name="rm" id="rm" value="<?php echo $rm;?>"/></td>
  </tr>
</table>
        <p>
	<input type="submit" name="update" id="submit" value="UPDATE NOW" />
   </form>
   <a href="category.php">CATEGORY LIST</a><br>
</center>
</body><br/>
<?php require('footer.php'); ?>
</html>