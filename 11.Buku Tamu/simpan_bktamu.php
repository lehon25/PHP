<html>

<head>
  <title>Simpan Data Buku Tamu</title>
</head>

<body>
  <?php
  $nama=$_POST["nama"];
  $email=$_POST["email"];
  $komentar=$_POST["komentar"];
  ?>
  <h1>Proses Simpan Buku Tamu</h1>
  <hr>
  Nama Anda : <?php echo $nama; ?>
  <br>
  Email Adress : <?php echo $email; ?>
  <br>
  Komentar :
  <textarea name="komentar" cols="40" rows="5"><?php echo $komentar ?></textarea>
  <?php
  $fp=fopen("bukutamu.dat","a+");
  fputs($fp,$nama."|".$email."|".$komentar."\n");
  fclose($fp);
   ?>
   <p>Simpan telah berhasil dilakukan!</p>
 </body>
 </html>
