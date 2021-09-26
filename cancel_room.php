<html>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["book_id"];
		$sql = "SELECT * from  confirmed_booking";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_assoc($result))
	   	{
			if($bid==$row['book_id'])
			{				
				$sql1 = "DELETE FROM  confirmed_booking WHERE book_id='$bid'";
				mysqli_query($conn,$sql1);
				header("Location: cancel_room1.php");
				break;
			}
		}
	?>
</body>
</html>