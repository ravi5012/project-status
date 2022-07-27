<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<table border="1">
			<tr>
				<th>Topic</th>
				<th>Number Of Words</th>
				<th>Instruction</th>
				<th>Scheduled Delivery Date</th>
			</tr>
		<?php
		$date=date('Y-m-d');
		$daten=date('Y-m-d',strtotime('+1 day',strtotime($date)));
		$result=mysqli_query($mysqli,"SELECT * from table_1 ORDER by id DESC");


		while($res=mysqli_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>'.$res['topic'].'</td>';  
			echo '<td>'.$res['number'].'</td>';
			echo '<td>'.$res['instruction'].'</td>';
		

			if ($res['number']<=1000) 
			{
				echo '<td>'; 
				echo $date; 
				echo'</tr>';
			
			} 
				else 
			{
				echo '<td>';
				echo $daten; 
				echo '</tr>';
			}
				echo '</tr>'; 

		}	
		?>
	</table>
</body>
</html>