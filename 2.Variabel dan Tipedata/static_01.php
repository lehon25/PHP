<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Pengunaan Variabel Statik</title>
<?php
function itung(){
    static $c=1;
  echo "Dipanggil ke : $c<br>";
  $c++;
}
?>
</head>
<body>
  <h1>Pemanggilan fungsi degan variabel static</h1>
  Hasil eksekusi dengan PHP : <br>
  <?php
  itung();
  itung();
  itung();
  ?>
</body>
</html>
