<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Script PHP dengan if else 02</title>
</head>
<body>
  <h1>Demo if ... else --02</h1>
  <?php
  $bil=28;
  if($bil>0){
    echo $bil."adalah positif";
  }else{
    if($bil<0){
      echo $bil."adalah negatif";
    }else {
      echo $bil."adalah nol";
    }
  }
  ?>
</body>
</html>
