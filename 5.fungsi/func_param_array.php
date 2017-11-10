<?php
function tulisdata(...$arrdata){
  echo "Data yang akan dijumlahkan :<br/>";
  for($i=0;$i<count($arrdata);$i++){
    if($i>0)echo ",";
    echo "$arrdata[$i]";
  }
  echo "<br/>Jumlahnya adalah= ";
}
function jumlahkan(int...$arrdata):int{
  $jml=0;
  for($i=0;$i<count($arrdata);$i++)
    $jml=$jml+$arrdata[$i];
    return $jml;
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Fungsi dengan parameter Array</title>
</head>
<body>
  <h2>Fungsi dengan parameter Array</h2>
  <?php
  echo tulisdata(2,3,4,5,6,7,8);
  echo jumlahkan(2,3,4,5,6,7,8)."<br/>";
  echo tulisdata(2.6,3.7,4,5.8,6.7,7.7,8.3);
  echo jumlahkan(2.6,3.7,4,5,8,6.7,7.7,8.3)."<br/>";
   ?>
 </body>
 </html>
