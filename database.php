<?php
//connesct to mysql
$con = mysqli_connect("localhost", "root1", "1234", "shoutit");

//test connection
if(mysqli_connect_errno()){
  echo "failed".mysqli_connect_error();
}
?>
