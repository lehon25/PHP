<html>
<head>
  <title>Membaca file buku telepon</title>
</head>
<body>
  <h1>Membaca file buku telepon dengan fread()</h1>
  <?php
  $fp=fopen("bukutelepon.txt","r");
  while ($isi=fread($fp,25)){
    echo $isi."<br>";
  }
  ?>
</body>
</html>
