<?php
require ("reqonce_01.php");
function showVar($var){
  if(PHPVERSION == 4){
    print_r($var);
  }else{
    var_dump($var);
  }
}
?>
