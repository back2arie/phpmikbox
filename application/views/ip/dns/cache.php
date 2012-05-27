<?php
$this->load->view('ip/dns/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($dns);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Type</th>
			<th>Data</th>
			<th>TTL</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($dns as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo isset($row['type']) ? $row['type'] : '';?></td>
				<td><?php echo isset($row['data']) ? $row['data'] : '';?></td>
				<td><?php echo $row['ttl'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>