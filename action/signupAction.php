<?php
	mysql_connect("localhost","root",'');
	mysql_select_db('customer');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$password= $_POST["password"];
  $repassword= $_POST["repassword"];
	$type = "Customer";

	if($_POST["submit"]) {
		$sql = "INSERT INTO users VALUES (0,'$name','$email','$password','$type')";

		if(mysql_query($sql)) {
			echo "Done";
		}
		else {
			echo "fail";
		}
	}
?>
