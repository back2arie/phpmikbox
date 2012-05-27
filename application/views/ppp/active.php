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
			<th>Service</th>
			<th>Caller ID</th>
			<th>Encoding</th>
			<th>Address</th>
			<th>Uptime</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($ppp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['service'];?></td>
				<td><?php echo $row['caller-id'];?></td>
				<td><?php echo $row['encoding'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['uptime'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>