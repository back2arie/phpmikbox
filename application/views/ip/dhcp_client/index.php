<?php
$this->load->view('ip/dhcp_client/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($dhcp);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Interface</th>
			<th>Use Peer DNS</th>
			<th>Add Default Route</th>
			<th>IP Address</th>
			<th>Expires After</th>
			<th>Status</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($dhcp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['interface'];?></td>
				<td><?php echo $row['use-peer-dns'];?></td>
				<td><?php echo $row['add-default-route'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['expires-after'];?></td>
				<td><?php echo $row['status'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>