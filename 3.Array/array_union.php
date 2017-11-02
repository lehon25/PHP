<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Array : Union</title>
</head>
<body>
  <h1>Array : Uninon</h1>
  <?php
  $ar_a=array(1,2,3,4,5);
  print "isi Array \$ar_a<br>";
  print_r($ar_a);
  print"<br>";
  $ar_b=array("abc",5,6,90);
  print "isi Array \$ar_b<br>";
  print_r($ar_b);
  print"<br>" ;
  $gabung=array_merge($ar_a,$ar_b);
  print " isi Array \$gabung <br>" ;
  print_r($gabung);
  print "<br>" ;
  ?>
</body>
</html>
