<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
//semak sama ada data dengan IC Pelanggan telah dihantar
if (isset($_POST['icguest'])) {
 //pembolehubah untuk memegang data yang dihantar
 $ic = $_POST['icguest'];
 $name = $_POST['name'];
 $hp = $_POST['hpnum'];
 $address1 = $_POST['address1'];
 $address2 = $_POST['address2'];
 $town = $_POST['town'];
 $postcode = $_POST['postcode'];
 $states = $_POST['states'];
 
 //Semak data empty atau tidak
 if (empty($ic) or empty($name) or empty($hp) or empty($address1) or empty($town) or empty($postcode) or empty($states))
 {
    die("<script>alert('PLEASE COMPLETE THE INFORMATION');
    window.history.back();</script>");
  }
  if(strlen($postcode)<5)
  {
    die("<script>alert('POSTCODE DIGIT IS LESS THAN 5');
    window.history.back();</script>");
  }
  if(strlen($postcode)>5)
  {
    die("<script>alert('POSTCODE DIGIT IS MORE THAN 5');
    window.history.back();</script>");
  }
  
//Tambah rekod baru ke dalam table pelanggan 
$sql = "INSERT INTO guest (icguest,name,hpnum)
VALUES ('$ic','$name','$hp')";
$hasil=mysqli_query($samb,$sql);
//Tambah rekod baru ke dalam table alamat
$sql1 = "INSERT INTO address (idaddress,address1,address2,town,postcode,states,icguest)
VALUES (NULL,'$address1','$address2','$town','$postcode','$states','$ic')";
$hasil=mysqli_query($samb,$sql1);
    // papar mesej berjaya atau gagal simpan rekod baru
 if ($hasil) {
  echo "<script>alert('REGISTER SUCCESSFUL');
  window.location='index2.php'</script>";
 }else{
  echo "<script>alert('REGISTER FAILED. TRY AGAIN!');
  window.location='register_guest.php'</script>";
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
<h2>REGISTER NEW GUEST</h2>
<body>
<fieldset>
<!-- PAPAR BORANG PENDAFTARAN -->
<form method="POST">
    <label>Ic Number</label><br>
 <font size="2" color="#ff0000">*WITHOUT -</font><br>
 <input type="text" name="icguest"
 placeholder="090807031234" maxlength='12'size="15"
 onkeypress='return event.charCode >= 48 && event.charCode <= 57'
 required autofocus><br>
 
 <label>Your Name</label><br>
 <font size="2" color="#ff0000">*CAPITAL LETTER</font><br>
 <input type="text" name="name" id="name"
 placeholder="guest name" size="60" required ><br>
 
 <label>HP Number</label><br>
 <input type="text" name="hpnum" placeholder="0187654321"
 maxlength='12'size="15"
 onkeypress='return event.charCode >= 48 && event.charCode <= 57'
 required autofocus><br>
 
 <label><u>Address :</u></label><br>
 <label>Address1</label><br>
 <input type="text" name="address1" id="address1"
 placeholder="Address1" size="60" required ><br>
 <label>Address2</label><br>
 <input type="text" name="address2" id="address2"
 placeholder="Address2" size="60"><br>
 <label>Town</label><br>
 <input type="text" name="town" id="town"
 placeholder="Town" size="40" required ><br>
 <label>Postcode</label><br>
 <input type="text" name="postcode" placeholder="18000"
 maxlength='8'size="7"
 onkeypress='return event.charCode >= 48 && event.charCode <= 57'
 required autofocus><br>
 <label>States</label><br>
 <input type="text" name="states" id="states"
 placeholder="states" size="30" required ><br><br>
<button type="submit">REGISTER</button>
<button type="reset">RESET</button><br><br>
*makesure all information completed.
</form>
<form action="booking.php"><button type="submit">Home</button><br><br>
</fieldset>
</body>
</html>