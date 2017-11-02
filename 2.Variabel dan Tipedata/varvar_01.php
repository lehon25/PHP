<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Variabel Variabel</title>
</head>
<body>
  <h1>Contoh Variabel-variabel</h1>
  <p>Contoh ini menunjukan kita mengisi variabel $c dengan is variabel $a</p>
  <pre>
    $a=7;
    $b="a";
    $c=$$b;
  </pre>
  Hasil eksekusi dengan PHP: <br>
  <?php
  $a=7;
  $b="a";
  $c=$$b;
  echo "\$a= $a"."<br>";
  echo "\$b= $b"."<br>";
  echo "\$c= $c"."<br>";
  ?>
</body>
</html>
