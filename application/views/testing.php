<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
	</tr>
		<?php foreach($pe_result as $pe)
		{
			echo'
				<tr>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
					<td>'.$pe->height.'</td>
				</tr>
				';	

		} ?>
</table>

</body>
</html>