<?php
function sum(int ...$ints){
  return array_sum($ints);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Mode Coercive</title>
</head>
<body>
  <h1>Tipe data variabel : Coercive</h1>
  Penjumlahan isi array semua integer :
  <?php print(sum(2,3,4));
   ?>
 <p>
   Penjumlahan isi array campuran:
   <?php print(sum(2,3,4));
    ?>
  </body>
  </html>
