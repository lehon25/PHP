<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Array : Konstanta</title>
</head>
<body>
  <h1>Konstanta Array nama Hari</h1>
  <?php
  define("Hari",["Minggu","senin","selasa","rabu","kamis","jumat","sabtu"]);
  ?>
  <p>
  Menampilkan kostanta nama hari :
  <?php
  for($i=0;$i<7;$i++) print("<br/>".($i+1)." - ".Hari[$i]);
  ?>
  </body>
  </html>
