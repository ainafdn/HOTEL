<?php
//CONNECT TO DATABASE
require('config.php');
//RECALL HEADER FILE
require('header.php');
//RECEIVED POST VALUE
if(isset($_POST['update']))
{
    $nomroom=$_POST['nomroom'];
    $idcat=$_POST['idcat'];
    $idroom=$_POST['idroom'];
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,
"UPDATE room SET nomroom='$nomroom', idcat='$idcat'
WHERE idroom='$idroom'");
echo "<script>alert('RECORD UPDATED');
window.location='room.php'</script>";
    }
?>
<style>
body
{
	background-image: url("image.jpg");
}
</style>
<?php
$idroom = $_GET['idroom'];
$result = mysqli_query($samb, "SELECT * FROM room
WHERE idroom='$idroom'");
while($res = mysqli_fetch_array($result))
{
    $nomroom = $res['nomroom'];
    $idcat = $res['idcat'];
}
$dataCat=mysqli_query($samb,"SELECT * FROM categories
WHERE idcat='$idcat'");
$infoCat=mysqli_fetch_array($dataCat);
?>
<html>
<center>
<body>
    <h2>UPDATE ROOM & CATEGORY</h2>
    <form name="form1" action="room_update.php" method="POST">
<table width="600" border="0" align="center">
  <tr>
    <td width="200"><b>Room Number</b></td>
    <td><b>
    <input size="15" type="text" name="nomroom" id="nomroom"
    value="<?php echo $nomroom;?>" /></td>
  </tr>
  <tr>
    <td width="200"><b>Room Category</b></td>
    <td><b>
    <select name="idcat">
    <option selected value="<?php echo $res['idcat']; ?>">
    <?php echo $infoCat['category']; ?></option>
    <?php $data2=mysqli_query($samb,"SELECT * FROM categories
    WHERE idcat <> '$res[idcat]'");
    while ($info2=mysqli_fetch_array($data2))
    {
    echo "<option value='$info2[idcat]'>$info2[category]</option>";
    }
    ?>
    </td>
    <td><font size="2" color="#ff0000"><a href="category.php">
    *Update Category</a></font></td>
  </tr>
</table>
<input type="hidden" name="idroom" value=<?php echo $_GET['idroom'];?>>
<input type="submit" name="update" id="submit" value="UPDATE" />
    </form>
    <a href="room.php">ROOM LIST</a><br>
	</center>
</body>
</html>