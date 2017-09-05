<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="center">
	<div class="box">
		<a href="index.php">MAIN/ADD TASK</a>
		<?php
		include('connect.php');
		$query="SELECT id, task, dueDate FROM tasks ORDER BY dueDate ASC";
		$results=mysqli_query($conn,$query);
		if($results->num_rows > 0)
		{
			echo" <table>
			<tr>
				<th>task</th>
				<th>Due By</th>
				<th>Options</th>
			</tr>";
			echo"<form action=\"delete.php\" method=\"POST\">";
			while($arr = mysqli_fetch_assoc($results))
			{
				echo"<tr><td>".$arr["task"]."</td><td>".$arr["dueDate"]."</td><td>
				<input type=\"checkbox\" name=\"delete[]\"value=\"".$arr['id']."\">delete"."</td></tr>";
			}
			echo"</table>";
			echo"<input type=\"submit\" name=\"submit\" value=\"submit\">";
			echo"</form>";
		}
		else
		{
			echo"Nothing here yet";
		}
		mysqli_close($conn);
		?>
	</div>

</div>

</body>
</html>
