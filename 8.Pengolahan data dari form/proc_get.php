<html>
<head>
  <title>Proses input dari Form dengan get</title>
</head>
<body>
  <?php
  $bil1=$_GET["bil1"];
  $bil2=$_GET["bil2"];
   ?>
   <h1>Perbandingan Bilangan </h1>
   <hr>
   Bilangan  I: <?php echo $bil1 ?>
<br>
 Bilangan  II : <?php echo $bil2 ?>
 <br>
 <?php
 if ($bil1 > $bil2) {
   echo "$bil1 lebih besar  dari $bil2";
 }elseif ($bil1 < $bil2) {
   echo "$bil1 lebih kecil dari $bil2";
 }
 ?>
    </body>
    </html>
