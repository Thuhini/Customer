<?php
mysql_connect("localhost","root",'');
mysql_select_db('customer');

$email = $_POST["email"];
$password= $_POST["password"];

if($_POST["submit"]){
  $sql = "SELECT * FROM users WHERE email='".$email."' and password='".$password."' limit 1";

  $result = mysql_query($sql);

    if (mysql_num_rows($result)==1) {
        echo "login";
      } else {
        echo "fail";
      }
  }


?>
