<html>
<head>
  <title>Membaca file buku telepon</title>
</head>
<body>
  <h1>Membaca Data Buku telepon dengan fgets()</h1>
  <?php
  $fp=fopen("bukutelepon.txt","r");
   while($isi=fgets($fp,100)){
     echo $isi."<br>";
   }
  ?>
</body>
</html>
