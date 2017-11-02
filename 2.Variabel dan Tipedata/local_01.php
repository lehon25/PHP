<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Pengunaan Variabel Lokal</title>
<?php
function itung(){
  $c=0;
  echo "Dipanggil ke : $c<br>";
  $c++;
}
?>
</head>
<body>
  <h1>Pemanggilan fungsi degan lokal variabel</h1>
  Hasil eksekusi dengan PHP : <br>
  <?php
  itung();
  itung();
  itung();
  ?>
</body>
</html>
