<?php
error_reporting(0);
include "get_from_file.php";
$str = [];
$Schoolers = get_from_file($str);
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Human_class</title>
	</head>
	<body>
	<table border="1">
		<thead>
			 <td>ФИО</td>
			 <td>Средняя оценка</td>
			 <td>Количество посещений</td>
			 <td>Количесвто пропусков</td>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($Schoolers);$i+=1){  ?>
				<tr>
					<td><?php echo $Schoolers[$i]->get_full_name() ?></td>
					<td><?php echo $Schoolers[$i]->get_av_score() ?></td>
					<td><?php echo $Schoolers[$i]->count_attendance() ?></td>
					<td><?php echo $Schoolers[$i]->count_unattendance() ?></td>
				</tr>				
			<?php } ?>
		</tbody>
	</table>
	</body>
	</html>	
