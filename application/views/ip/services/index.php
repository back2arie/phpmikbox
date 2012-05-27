<?php
$this->load->view('ip/services/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($services);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Port</th>
			<th>Available From</th>
			<th>Certificate</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($services as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['port'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo isset($row['certificate']) ? $row['certificate'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>