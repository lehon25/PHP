<html>
<head>
  <title>Menampilkan nama pengakses</title>
</head>
<body>
  <h1>Menampilkan nama pengakses!</h1>
  <?php
  $namauser="anonymous";
  if (isset($_GET["namauser"])) $namauser=$_GET["namauser"];
   ?>
   Selamat  datang :<?php echo $namauser;?>!
 </body>
 </html>
