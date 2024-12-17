<?php
//CONNECT TO DATABASE
require('config.php');

//POST VALUE
if (isset($_POST['icguest'])) {
  $ic=$_POST['icguest'];
  $In=$_POST['checkin'];
  $Out=$_POST['checkout'];
  $room =$_POST['idroom'];
  $idstaff =$_POST['staff'];
  
//DIFF DAY 
$date1=date_create($In);
$date2=date_create($Out);
$diff=date_diff($date1,$date2);
$totalday=$diff->format("%a");

//LINK TO OTHER TABLE 
        $Room=mysqli_query($samb,"SELECT * FROM room WHERE idroom='$room'");
  $getRoom=mysqli_fetch_array($Room);
  
  $pay=mysqli_query($samb,"SELECT * FROM categories
  WHERE idcat='$getRoom[idcat]'");
  $getCat=mysqli_fetch_array($pay);
  
  $pay=$getCat['price'];
  $mustpay=$totalday*$pay;
  
  //CHECK AVAILABLE ROOM
  $wujud=mysqli_query($samb,
  "SELECT * from booking
  WHERE idroom='$room' AND (
  (check_in <= '$In' AND check_out > '$In')
  OR (check_in < '$Out' AND check_out >= '$Out')
  OR(check_in >= '$In' AND check_out < '$Out')
  )");
  $bil_rekod=mysqli_num_rows ($wujud);
  if ($bil_rekod==0&&$In!=$Out)
  {
//ENTER BOOKING INTO TABLE
    $rekod = "INSERT INTO booking
  (idbook,check_in,check_out,idroom,icguest,payment,idstaff)
  VALUES (NULL,'$In','$Out','$room','$ic','$mustpay','$idstaff')";
  
  //EXECUTE SQL STATEMENT
  $hasil = mysqli_query($samb, $rekod);
  
  $last_id =mysqli_insert_id($samb);
  //DISPLAY MSG WHEN SUCCESSFULLY
  echo "<script>alert('ROOM BOOKING SUCCESSFULLY');
  window.location='booking_receipt.php?id=$last_id'</script>";
  }
  else{
  echo "<script>alert ('ROOM BOOKING FAILED! Room not available');
  window.location='booking.php'</script>";
  }
}
?>