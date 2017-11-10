<html>
<head>
  <title>Form Input User  Name dan Password</title>
</head>
<body>
  <?php
  function periksa($username,$password){
    if(($username=="super") and ($password=="user")){
      return true;
    } else {
      return false;
    }
  }
  if (periksa($username, $password)) {
    $login=true;
  }else {
    echo "User ID atau password salah!";
  }
  if ($login) {
    echo "<br>Disini aplikasi setelah login dilakukan";
    echo "<br>Anda berhasil menjalankan!";
  }
  ?>
</body>
</html>
