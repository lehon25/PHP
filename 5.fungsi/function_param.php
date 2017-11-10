<?php
function Hai(String $nama){
  echo "Hai[".$nama."]";
  echo "dari fungsi Hai...<br/>";
}
function Halo(String $nama="Razan"){
  echo "Halo[".$nama."]";
  echo "dari fungsi Hallo..<br/>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Fungsi Parameter BertipeData</title>
</head>
<body>
  <h2>Fungsi parameter BertipeData</h2>
  <?php ?>
  Hai("Sabig");
   ?>
  <h2>Fungsi Dengan Parameter Bertiprdata Dengan Default</h2>
  <?php
  Halo();
  Halo("Sabil");
  ?>
</body>
</html>
