<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Array Asosiatif</title>
</head>
<body>
  <h1>Demo Array Assosiatif -No Telepin</h1>
  Menuliskan array assosiatif:
  <br>
  <?php
  $telepon["Pohan"]="45678";
    $telepon["Andika"]="67809";
    $telepon["Totok"]="6789987";
    $telepon["Benny"]="987650";
echo "Telepon pohan: ".$telepon['Pohan'];
echo "<br>";
echo "Telepn Andika: ".$telepon['Andika'];
echo "<br>";
echo "Telepn Totok: ".$telepon['Totok'];
echo "<br>";
echo "Telepn Benny: ".$telepon["Benny"];
echo "<br>";
?>
</body>
</html>
