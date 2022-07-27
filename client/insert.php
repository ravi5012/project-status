<?php
include("config.php");
		if (isset($_POST['submit'])) 
		{
			$topic=$_POST['topic'];
			$number=$_POST['number'];
			$instruction=$_POST['instruction'];

			$result=mysqli_query($mysqli,"INSERT INTO table_1 values('','$topic','$number','$instruction')");
			if($result)
			{
				header("location:index.php");
			}

		}

		?>