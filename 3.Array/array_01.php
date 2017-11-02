<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Demo Array...</title>
</head>
<body>
  <h1>Demo Array</h1>
  Memuat dan menampilkan isi array
  <hr>
  Diisi dengan menunjukan nomor indeknya:
  <br>
  <?php
  $anak[0]="sabig";
  $anak[1]="sabil";
  $anak[2]="Razan";
  echo "isi array \$anak[0] adalah $anak[0]";
  echo "<br>";
    echo "isi array \$anak[1] adalah $anak[1]";
    echo "<br>";
      echo "isi array \$anak[2] adalah $anak[2]";
      echo "<br>";
?>
<hr>
Disii dengan tanpa nomor indeknya:
<br>
<?php
$nama[]="sabig";
$nama[]="sabil";
$nama[]="Razan";
echo "isi array \$nama[0] adalah $nama[0]";
echo "<br>";
  echo "isi array \$nama[1] adalah $nama[1]";
  echo "<br>";
    echo "isi array \$nama[2] adalah $nama[2]";
    echo "<br>";
  ?>
</body>
</html>
