<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Demo UDF: fungsi selisih</title>
</head>
<body>
  <h1>Demo UDF:fungsi selisih()</h1>
  <?php
  function selisih($a,$b){
    if($a>$b) $hasil=$a-$b;
    else $hasil=$b-$a;
    return $hasil;
  }
  $bil1=10;
  $bil2=30;
  $hasil=selisih($bil1,$bil2);
  print "Selisih antara \$bil1=$bil1 dan \$bil2=$bil2 adalah $hasil";
  ?>
</body>
</html>
