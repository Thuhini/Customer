<?php
$db=mysqli_connect("localhost","root",'');
mysqli_select_db($db,'customer');

$email = $_POST["email"];
$password= $_POST["password"];

if($_POST["submit"]){
  $sql = "SELECT * FROM users WHERE email='".$email."' and password='".$password."' limit 1";

  $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result)==1) {
          header("location: ../home.php");

      } else {
        echo "fail";
      }
  }


?>
