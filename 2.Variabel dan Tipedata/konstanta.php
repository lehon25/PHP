<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Konstanta PHI</title>
</head>
<body>
  <h1>Menampilkan Konstanta</h1>
  Konstanta PHI :
  <?php define ("PHI",3.14);
  print(PHI);
   ?>
   <p>
     Hitung luas dan keliling linkaran
     <?php $r=7;
     $luas=PHI*2*$r;
     $keliling=PHI*2*$r;
     print("<br /> Jari-jari :".$r);
     print("<br/> Luas ligkaran : ".$luas);
     print("<br/> Keliling lingkaran :" . $keliling);
      ?>
    </body>
    </html>
