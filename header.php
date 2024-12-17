<?php include "config.php"; ?>
<html>
<head>
<title><?php echo $sysname; ?></title>
</head>
<body><center>
<TABLE BORDER="0" cellpadding="0" CELLSPACING="0">
<TR>
<!-- nama fail header adalah header.jpg -->
<TD WIDTH="1000" HEIGHT="200" BACKGROUND="<?php echo $logo; ?>"
VALIGN="center"style="background-repeat:no-repeat;">
<!-- tukar nama sistem yang sesuai -->
<FONT SIZE="+2" COLOR="white" font face="Times New Roman">
<?php echo $sysname; ?></FONT></br>
<FONT SIZE="+4" COLOR="white" font face="Algerian">
<?php echo $hotelname; ?></FONT></br>
<FONT SIZE="+2" COLOR="pink" font face="Script MT Bold"><i>
<?php echo $moto; ?></i></FONT>
</TD>
</P>
</TR>
</center>
</TABLE>
</body></center>
<!-- RECALL ZOOM FILE -->
<?php include "zoom.php"; ?>
<!-- RECALL CHANGE COLOR NAME-->
<?php include "color.php";?>
</html>