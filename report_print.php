<?php
//CONNECT TO DATABASE
require('config.php');

?>
<html>
<head>
<title>MONTHLY REPORT</title>
</head>
<body>
<table width="711" border="0">
    <td><p><strong>MONTHLY REPORT </strong></p>
<table width="1000" border="1" align="center">
  <tr>
  <td colspan="9">
MONTHLY REPORT: <?php echo $hotelname; ?><br>
<div align="right" class="style15">Date Print: <?php
echo date("d/m/Y"); ?></div>
  </td>
  </tr>
  <tr>
    <td width="30"><b>Num.</b></td>
	<td width="100"><b>Room Num</b></td>
	<td width="120"><b>Check In</b></td>
	<td width="120"><b>Check Out</b></td>
	<td width="100"><b>Days</b></td>
	<td width="200"><b>Guest Name</b></td>
	<td width="100"><b>HP Number</b></td>
	<td width="180"><b>Price</b></td>
	<td width="180"><b>Amount</b></td>
  </tr>
  
  <?php
     $no=1;
	 $numroom=$_POST["numroom"];
	 $month=$_POST["month"];
	 $year=$_POST["year"];
	 
	if ($numroom=="-"&&$month=="-"&&$year=="-")
	{
	  $data1=mysqli_query($samb,"SELECT * FROM booking
	  ORDER BY idroom,check_in");
	}
	elseif ($numroom!="-"&&$month=="-"&&$year=="-")
	{
		$data1=mysqli_query($samb,"SELECT * FROM booking
		WHERE idroom='$numroom'
	   ORDER BY idroom,check_in");
	}
	elseif ($numroom!="-"&&$month!="-"&&$year=="-")
	{
		$data1=mysqli_query($samb,"SELECT * FROM booking
		WHERE idroom='$numroom' and (MONTH(check_in)='$month'
		OR MONTH(check_out)='$month')
		 ORDER BY idroom,check_in");
	}
    elseif ($numroom!="-"&&$month!="-"&&$year!="-")
    {
     $data1=mysqli_query($samb,"SELECT * FROM booking
	 WHERE idroom='$numroom' and ((MONTH(check_in)='$month'
	 AND YEAR(check_in)='$year')
	 or (MONTH(check_out)='$month' AND YEAR(check_out)='$year'))
	 ORDER BY idroom,check_in");
	}
	elseif ($numroom=="-"&&$month!="-"&&$year=="-")
	{
     $data1=mysqli_query($samb,"SELECT * FROM booking
	 WHERE MONTH(check_in)='$month' OR MONTH(check_out)='$month'
	 ORDER BY idroom,check_in");
	}
	elseif ($numroom=="-"&&$month=="-"&&$year!="-")
	{
     $data1=mysqli_query($samb,"SELECT * FROM booking
	 WHERE YEAR(check_in)='$year' or YEAR(check_out)='$year'
	 ORDER BY idroom,check_in");
	}
	elseif ($numroom!="-"&&$month=="-"&&$year!="-")
	{
     $data1=mysqli_query($samb,"SELECT * FROM booking
	 WHERE idroom='$numroom' AND (YEAR(check_in)='$year'
	OR YEAR(check_out)='$year')
	 ORDER BY idroom,check_in");
	}
	
	 $totalAmount=0;
	 $total_rec=mysqli_num_rows($data1);
	 while ($info1=mysqli_fetch_array($data1))
	      {
			  //LINK TO TABLE ROOM
			  $Room=mysqli_query($samb,"select * from room
			  where idroom='$info1[idroom]'");
			  $getRoom=mysqli_fetch_array($Room);
			  
			  //LINK TO TABLE GUEST
			  $Guest=mysqli_query($samb,"select * from guest
			  where icguest='$info1[icguest]'");
			  $getGuest=mysqli_fetch_array($Guest);
			  
			  //DIFF TWO DATE
			  $date1=date_create($info1['check_in']);
			  $date2=date_create($info1['check_out']);
			  $diff=date_diff($date1,$date2);
			  $totaldays=$diff->format("%a");
			  
			  
              //FORMAT DATE
              $In = date("d-m-Y", strtotime($info1['check_in']));
			  $Out = date("d-m-Y", strtotime($info1['check_out']));
			  
	?>
	
 <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $getRoom['nomroom']; ?></td>
	<td><?php echo $In; ?></td>
	<td><?php echo $Out; ?></td>
	<td><?php echo $diff->format("%a days"); ?></td>
	<td><?php echo $getGuest['name']; ?></td>
	<td><?php echo $getGuest['hpnum']; ?></td>
	<td>RM <?php echo number_format($info1['payment']/$totaldays,2); ?></td>
	<td>RM <?php echo number_format($info1['payment'],2);
	
	$totalAmount+=($info1['payment']);
 ?></td>
   </tr>
 <?php $no++; } ?>
   <tr>
 <td colspan="8" align="right">
   Total Amount
 </td>
 <td>RM <?php echo number_format($totalAmount,2);?></td>
  </tr>
</table>
<hr /><div align="center" class="style15">* Report End *<br />Total Records:<?php echo $total_rec; ?></div>
<center><br><br>
<a href="index2.php">MAIN MENU</a><br>
<a href="javascript:window.print()">Print Report</a>
</center>
</body>
</html>
		
			  
			  
		 