<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$idproof = $_POST["idproof"];
	$dob = $_POST["dob"];
	$sql = "INSERT INTO user_login(phone, password, name, email, idproof, dob) VALUES('$phone', '$password', '$name', '$email', '$idproof', '$dob')";
	if($conn->query($sql)==TRUE)
	{
		// header("Location: user_created.php");
		
	
		echo '<script>
      alert("Registration Successfull!");
      window.location="user_login.php";
      </script>';
		
	}
	else
	{
		echo '<script>
      alert("Registration Not Successfull!");
      window.location="user_login.php";
      </script>';
	}
?>
</body>
</html>