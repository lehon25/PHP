<html>
<head>
  <title>Membaca file buku telepon</title>
</head>
<body>
  <h1>Membaca file buku telepon dengan fread()</h1>
  <?php
  $fp=fopen("bukutelepon.txt","r");
  while (list($nama,$telepon)= fscanf($fp,"%s\t%s\n")){
    echo $nama.".".$telepon."<br>";
  }
  ?>
</body>
</html>
