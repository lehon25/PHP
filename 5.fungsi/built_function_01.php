<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <title>Contoh Fungsi -chr()</title>
</head>
<body>
  <h1>Contoh pemakaian fungsi chr untuk membuat  Index</h1>
  <?php
   for ($i=0; $i<26; $i++){
     echo chr(65+$i);
     if($i<25)echo " | ";
   }
   ?>
 </body>
 </html>
