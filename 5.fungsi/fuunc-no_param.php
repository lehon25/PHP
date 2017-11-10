<?php
function Hai($nama){
  echo "Hai[".$nama."]";
  echo "dari fungsi Hai...<br/>";
}
function Halo($nama="Razan"){
  echo "Halo[".$nama."]";
  echo "dari fungsi Hallo..<br/>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Fungsi dengan Parameter Default</title>
</head>
<body>
  <h2>Fungsi Tanpa parameter Default</h2>
  <?php
  Hai();
  Hai("Sabig");
   ?>
   <h2>Fungsi dengan parameter Default</h2>
   <?php
   Halo();
   Halo("Sabil");
  ?>
</body>
</html>
