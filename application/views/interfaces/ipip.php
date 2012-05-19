<?php
$this->load->view('interfaces/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($interfaces);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Type</th>
			<th>L2 MTU</th>
			<th>Tx</th>
			<th>Rx</th>
			<th>Tx Packet (p/s)</th>
			<th>Rx Packet (p/s)</th>
			<th>Tx Drops</th>
			<th>Rx Drops</th>
			<th>Tx Errors</th>
			<th>Rx Errors</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($interfaces as $interface):?>
			<tr>
				<td><?php echo $interface['.id'];?></td>
				<td><?php echo $interface['name'];?></td>
				<td><?php echo $interface['type'];?></td>
				<td><?php echo $interface['l2mtu'];?></td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>