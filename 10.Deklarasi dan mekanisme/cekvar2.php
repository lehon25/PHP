<html>
<head>
  <title>Periksa keberadaan Variabel</title>
</head>
<body>
  <body bgcolor="#ffffff">
    <h1>Periksa keberadaan Variabel</h1>
    <?php
    $a=NULL;
    if(isset($a)){
      echo "Vraiabel \$a telah dideklarasikan isinya :".$a;
    }else{
      echo "Variabel \$a belum dideklarasikan isinya";
    }
    ?>
  </body>
  </html>
