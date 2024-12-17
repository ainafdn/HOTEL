<?php
require('config.php');
//GET ID FROM URL
$idRoom = $_GET['idroom'];
//EXECUTE SQL COMMAND DELETE
$result = mysqli_query($samb,"DELETE FROM room
WHERE idroom='$idRoom'");
//DISPLAY MSG 
 echo "<script>alert('RECORD DELETED');
 window.location='room.php'</script>";
?>