<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<a href="index.php">MAIN</a>
	<?php
	include('connect.php');
	if(isset($_POST['submit']))
	{
		if($_POST['delete'])
		{
			foreach($_POST['delete']as $del)
			{
				$query="DELETE FROM tasks WHERE id='$del'";
				mysqli_query($conn,$query);
			}
			$loc = "view.php";
		}
	}
	else
	{
		echo"nothing to do";
	}
	header("location: ".$loc);
	?>

</body>
</html>