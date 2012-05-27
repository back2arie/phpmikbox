<?php
$this->load->view('ip/dhcp_server/subnav');
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
			<th>Name</th>
			<th>Interface</th>
			<th>Relay</th>
			<th>Lease Time</th>
			<th>Address Pool</th>
			<th>Add ARP For Leases</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($dhcp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['interface'];?></td>
				<td><?php echo isset($row['relay']) ? $row['relay'] : '';?></td>
				<td><?php echo $row['lease-time'];?></td>
				<td><?php echo $row['address-pool'];?></td>
				<td><?php echo isset($row['add-arp-for-leases']) ? $row['add-arp-for-leases'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>