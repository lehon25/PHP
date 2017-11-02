<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh script PHP dengan Ternary</title>
</head>
<body>
  <h1>ternary</h1>
  <p>Scrip ini mendemontrasikan Ternary untuk menghitung selisih 2 bilangan
    <br>$a=5;
    <br>$b=7;
    <hr>
<?php
$a= 5;
$b = 7;
echo "\$a = $a<br>";
echo "\$b = $b<br>";
$selisih= ($a > $b) ? ($a - $b) : ($b - $a);
echo "Selisihnya : $selisih";
?>
</body>
</html>
