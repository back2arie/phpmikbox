<?php
$this->load->view('ppp/subnav');
$this->load->view('ppp/button');
?>

<?php
/*echo "<pre>";
print_r($ppp);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Password</th>
			<th>Service</th>
			<th>Caller ID</th>
			<th>Profile</th>
			<th>Local Address</th>
			<th>Remote Address</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($ppp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['service'];?></td>
				<td><?php echo $row['caller-id'];?></td>
				<td><?php echo $row['profile'];?></td>
				<td><?php echo isset($row['local-address']) ? $row['local-address'] : '';?></td>
				<td><?php echo isset($row['remote-address']) ? $row['remote-address'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>