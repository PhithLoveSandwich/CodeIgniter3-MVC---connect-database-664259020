<table border="1">
	<tr>
		<th>ID</th>
		<th>Code</th>
		<th>Name</th>
		<th>Price</th>
	</tr>
	<?php foreach ($query as $row): ?>
	<tr>
		<td><?php echo $row->id; ?></td>
		<td><?php echo $row->code; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->price; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
