<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Penggunaan Operator Assigment</title>
</head>
<body>
  <h1>Contoh Penggunaan Operator Assigment</h1>
  <?echo "-->Assigment by Refrences hanya pada PHP 4
  <pre>
    $a=5;
    $b=&$a;
    $a=7;
    $b=&$a;
    </pre>
    <?php
  $a=5;
  $b=&$a;
  echo "\$a= $a" . " <br>";
  echo "\$b= $b" . "<br>";
  $a=7;
  $b=&$a;
  echo "\$a = $a"."<br>";
  echo "\$b = $b"."<br>";
  ?>
</body>
</html>
