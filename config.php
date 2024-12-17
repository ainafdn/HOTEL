<?php
//sambungan MYSQLI dengan nama $samb
$samb = mysqli_connect("localhost","root","","hotel");
// semak sambungan jika gagal
if (mysqli_connect_errno()){
echo "Gagal sambungkan pangkalan data mysql: ".mysqli_connect_error();
}
//SETUP NAMA HOTEL 
$sysname="HOTEL MANAGEMENT SYSTEM";
$hotelname="EMPERO HOTEL";
$address="Lot 26 , Bandar Saujana Indah , <br> 40150 Shah Alam , Selangor.";
$moto="Good Night , Sleep Tight !";
$logo="header.jpg";
?>