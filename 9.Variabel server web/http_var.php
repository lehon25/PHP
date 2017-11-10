<html>
<head>
  <title>Info browser dan IP pengunjung</title>
</head>
<body>
  <h1>Info browser dan IP pengunjung</h1>
  Menggunakan nama teks asosiasi atau nama variabel langsung;
  <br>
  <?php echo "Brwser yang digunakan : ".$HTTP_USER_AGENT."<br>";
  echo "Mengakses dari IP :".$REMOTE_ADDR."<br>";
  ?>
</body>
</html>
