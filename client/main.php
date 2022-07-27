<?php
include("config.php");
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>client form</title>
	</head>
	<body>
		<form action="insert.php" method="POST">

			Topic <input type="text"  name="topic"><br>
			Number Of Words <input type="int"  name="number"><br>
			Instruction <input type="text"  name="instruction"><br>
			<input type="submit" name="submit"><br>
		</form>

	</table>
	</body>
	</html>