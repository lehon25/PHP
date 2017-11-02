<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Script PHP dengan if</title>
</head>
<body>
<h1>If</h1>
<p>Script ini mendemontrasikan if untuk membandingkan 2 bilangan
  <br>$a=5;
  <br>$b=7;
  <hr>
  <?php
  $a=5;
  $b=7;
  echo "\$a = $a <br>";
  echo "\$b = $b<br>";
  if ($a >$b){
    echo "\$a >\$b";
  }
  if ($a <$b){
    echo "\$a <\$b";
  }
  if ($a ==$b){
    echo "\$b =\$a";
  }
  ?>
</body>
</html>
