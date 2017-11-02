<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Array : Diff</title>
</head>
<body>
  <h1>Array : Diff</h1>
  <?php
  $ar_a=array(1,2,5,7,8);
  print "isi Array \$ar_a<br>";
  print_r($ar_a);
  print"<br>";
  $ar_b=array("abc",5,7,90);
  print "isi Array \$ar_b<br>";
  print_r($ar_b);
  print "<br>" ;
  $diff=array_diff($ar_a,$ar_b);
  print ("isi Array \$diff<br>");
  print_r($diff);
  print("<br>");
  ?>
</body>
</html>
