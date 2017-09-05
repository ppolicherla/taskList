<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href= "style.css" type="text/css" >
</head>
<body>
<a href="index.php">MAIN</a>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
	$task = $_POST['task'];
	$date = $_POST['date'];
	$query="INSERT INTO tasks(task,dueDate) VALUES('$task','$date')";
	mysqli_query($conn,$query);
}
header("location:view.php");
mysqli_close($conn);
?>

</body>
</html>