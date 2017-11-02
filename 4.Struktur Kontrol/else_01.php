<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Script PHP dengan if else</title>
</head>
<body>
  <h1>If</h1>
  <p>Scrip ini mendemontrasikan if dan else untuk menghitung selisih 2 bilangan
<br>$a=5;
<br>$b=7;
<br>Itung Selisih
<br>$a = 7;
<br>$b = 5;
<br>Itung Selisih
<hr>
<?php
$a=5;
$b=7;
    echo "\$a = $a <br>";
    echo "\$b = $b<br>";
    if ($a >$b){
      $selisih=$a-$b;
      echo "Selisih \$a > \$b adalah $selisih "."<br>";
    }
    if ($a<$b){
      $selisih=$a-$b;
      echo "Selisih \$a < \$b adalah $selisih "."<br>";
    }
    if($b==$a){
      echo "\$b = \$a"."<br>";
    }
    $a=5;
    $b=7;
    echo "\$a = $a <br>";
    echo "\$b = $b<br>";
    if ($a>$b){
      $selisih=$a-$b;
      echo "Selisih \$a > \$b adalah $selisih "."<br>";
    }
    if ($a<$b){
      $selisih=$a-$b;
      echo "Selisih \$a < \$b adalah $selisih "."<br>";
    }
    if($b==$a){
      echo "\$b = \$a"."<br>";
    }
    ?>
  </body>
  </html>
