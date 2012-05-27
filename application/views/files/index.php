<?php
$this->load->view('files/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($files);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>File Name</th>
			<th>Type</th>
			<th>Size</th>
			<th>Creation Time</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($files as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['type'];?></td>
				<td><?php echo $row['size'];?></td>
				<td><?php echo $row['creation-time'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>