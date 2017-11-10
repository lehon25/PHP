<html>
<head>
  <title>Demo buat file teks - fputs 02</title>
</head>
<body>
  <h1>Demo Buat file teks - fputs- 02</h1>
  <?php
  $namafile="outfile.txt";
  $mydata="Budi, Bandung, 54458";
  $fp=fopen($namafile,"w");
  fputs($fp,$mydata);
  echo "<br> Berhasil menulis : $mydata";
  fputs($fp,$mydata);
  echo "<br> Berhasil menulis : $mydata";
  fclose($fp);
  ?>
  <hr>
  Sukses membuat file teks dengan nama :
  <?php echo $namafile ?>
  <br>
</body>
</html>
