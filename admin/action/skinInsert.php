<?php
  $db = mysqli_connect("localhost", "root", "", "customer");
  $msg = "";
  $itemcode=$_POST['ItemCode'];
  $itemname=$_POST['ItemName'];
  $discription=$_POST['Discription'];
  $price=$_POST['Price'];

  if (isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    $sql = "INSERT INTO skin VALUES ('$itemcode', '$itemname','$discription','$price','$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "successfully Inserted";
      header("Location: http://localhost:8079/Customer/admin/skin.php");
  	}else{
  		$msg = "Failed";
  	}
  }
  //$result = mysqli_query($db, "SELECT * FROM images");
?>
