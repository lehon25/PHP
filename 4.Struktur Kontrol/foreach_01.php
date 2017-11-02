<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Demo foreach untuk Array</title>
</head>
<body>
  <h1>Demo foreach untuk Array</h1>
  <hr>
  Daftar nama anak:
  <br>
  <?php
  $anak[0]="sabig";
  $anak[1]="sabil";
  $anak[2]="Razan";
  foreach ($anak as $value) {
    echo "Nama anak : $value";
    echo "<br>";
  }
  ?>
  </body>
  </html>
