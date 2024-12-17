<?php
require('config.php');
//GET ID FROM URL
$idstaff = $_GET['idstaff'];
//EXECUTE SQL COMMAND DELETE
$result = mysqli_query($samb,"DELETE FROM staff
WHERE idstaff='$idstaff'");
//DISPLAY MSG
 echo "<script>alert('RECORD DELETED');
 window.location='staff.php'</script>";
?>