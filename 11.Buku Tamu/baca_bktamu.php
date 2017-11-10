<html>

<head>
  <title>Data Baca Buku Tamu</title>
</head>

<body>
  <h1>Data Buku Tamu</h1>
  <?
  $fp=fopen("bukutamu.dat","r");
  while (!feof($fp)) {
    $baris=fgets($fp,80);
    echo $baris;
  }
  fclose($fp);
  ?>
</body>
</html>
