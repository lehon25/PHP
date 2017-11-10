<html>
<head>
  <title>Demo fgec</title>
</head>
<body>
  <h1>Demo fgetc()</h1>
  Statistik file : bukutelepon.txt
  <br>
  <?php
  $fp=fopen("bukutelepon.txt","r");  
  $huruf=0;
  $baris=1;
  while (!feof($fp)){
    $ch=fgetc($fp);
    if(($ch!=" ") && ($ch!="\n") && ($ch!="\t"))$huruf++;
    if (($ch=="\n")) $baris++;
    }
    echo "<br>";
    echo "Jumlah huruf : $huruf";
    echo "<br>";
    echo "Jumlah baris :$baris";
    ?>
  </body>
  </html>
