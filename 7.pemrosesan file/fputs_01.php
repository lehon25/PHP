<html>
<head>
  <title>Demo buat file teks - fputs</title>
</head>
<body>
  <h1>Demo Buat file teks - fputs</h1>
  <?php
  $namafile="outfile.txt";
  $mydata="Budi, Bandung, 40132";
  $fp=fopen($namafile,"w");
  fputs($fp,$mydata);
  fclose($fp);
   ?>
   <hr>
   Sukses membuat file teks dengan nama file :<?php echo
   $namafile?>
   Data yang diteliskan : <?php echo $mydata?>
 </body>
 </html>
