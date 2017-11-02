<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh penggunaan Operator Increment/Decrement</title>
</head>
<body>
  <h1>Contoh Operator Increment/Decrement</h1>
  <?php
  echo  "<h3>Postincrement:</h3>";
  $a=5;
  echo "\$a = $a "." <br>";
  echo "Dengan \$a++ tetap 5: ".$a++."<br>\n";
  echo "Kemudian menjadi 6: ". $a. "<br>\n";
  echo "<h3>PreIncrement</h3>";
  $a= 5;
  echo "\$a = $a "."<br>";
  echo "Dengan ++\$a menjadi 6:" . ++$a ."<br>\n";
  echo "Tetap 6:".$a ."<br>\n";
  echo "<h3>PostDecrement </h3>";
  $a = 5;
  echo "\$a = $a "."<br>";
  echo "Dengan \$a tetap 5: " . $a-- . "<br>\n";
  echo "kemudian menjadi 4 :". $a ."<br>\n";
  echo "<h3>Predecremet</h3>";
  $a=5;
  echo "\$a= $a". "<br>";
  echo "Dengan --\$a Menjadi 4: " . --$a . "<br>\n";
  echo "Kemudian tetap 4:" . $a . "<br>\n";
  ?>
</body>
</html>
