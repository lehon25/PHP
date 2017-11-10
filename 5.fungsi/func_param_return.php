<?php
function tulisdata($bil1, $bil2){
  echo "$bil1 + $bil2=" ;
}
function jumlah2bil(float $bil1, float $bil2):int{
  return $bil1+$bil2;
}
  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Fungsi dengan hasil BertipeData</title>
</head>
<body>
  <h2>Fungsi dengan hasil BertipeData</h2>
  <?php
  echo tulisdata(2,4);
  echo jumlah2bil(2,3)."<br/>";
  echo tulisdata(2.7,3.9)."<br/>";
  echo jumlah2bil(2.7,3.9);
  echo tulisdata(2.7,3);
  echo jumlah2bil(2.5,3)."<br/>";
  ?>
</body>
</html>
