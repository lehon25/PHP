<html>
<head>
  <title>Demo buat Perikas File</title>
</head>
<body>
  <h1>Demo Buat Perikas File</h1>
  <?php
  $namafile="outfile.txt";
  if(file_exists($namafile)){
    echo "$namafile SUDAH ADA!";
  }else{
    echo "$namafile BELUM ADA!";
  }
  ?>
</body>
</html>
