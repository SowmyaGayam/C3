<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	
	<h2>Users List</h2>
	
	<table>
		<tr>
		<th>UserName</th>
		<th>Password</th>
		</tr>
		<tbody>
		<?php
			foreach($result as $row){
				//var_dump($row);
		
				/*echo $row->Username;
				echo $row->Password;*/
				?>
				<tr>
					<td><?php echo $row->Username;?></td>
					<td><?php echo $row->Password;?></td>
				</tr>
				<?php
		
		
		} 
		?>
		</tbody>
	</table>

</body>
</html>

<!-- <tr>
			<td><?php //echo $row->Username; ?></td>
			<td><?php //echo $row->Password; ?></td>
		</tr> --> 