<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" >
</head>
<header>
	<h1>Task List</h1>
</header>
<body>
<div class="center">
	<div class="box">
	<a href="index.php">MAIN</a>
	<p>Add a task to the list</p>
	<form action = "add.php" method = "post">
	<fieldset>
		<label>task:</label>
		<textarea name ="task" maxlength="200" required></textarea><br><br>
		<label>date:</label>
		<input type="text" name="date" required><br><br>
		<div class="center">
		<input type="submit" name="submit" value="submit">	
		</div>
	</fieldset>
	</form>
	<p>View Tasks</p>
	<form action="view.php" method="post">
	<input type="submit" name="view" value="view">
		
	</form>
		
	</div>
</div>

</body>
</html>