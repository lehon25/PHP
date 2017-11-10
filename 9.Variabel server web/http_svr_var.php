<html>
<head>
  <title>Info browser dan IP pengunjung</title>
</head>
<body>
  <h1>Info browser dan IP pengunjung</h1>
  Menggunakan variabel array $HTTP_SERVER_VARS:
  <br>
  <?php echo "Brwser yang digunakan : ".$HTTP_SERVER_VARS["HTTP_USER_AGENT"]."<br>";
  echo "Mengakses dari IP :".$HTTP_SERVER_VARS["REMOTE_ADDR"]."<br>";
  ?>
</body>
</html>
