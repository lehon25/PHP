<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh function eksternal untuk akses file dbase</title>
</head>
<body>
  <h1>Contoh function eksternal untuk akses file Dbase</h1>
  <?php
  dl("extensions/php_dbase.dll");
  $records=dbase_open("animals.dbf",0);
  if($records){
    echo "Database connected"."<br>";
    $rc=dbase_numrecords($records);
    echo "Jumlah record".$rc;
  }else{
    echo "Database not connected";
  }
  ?>
</body>
</html>
