<?php
$this->load->view('interfaces/bridge/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($firewall);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Action</th>
			<th>Chain</th>
			<th>Src. Address</th>
			<th>Dst. Address</th>
			<th>Protocol</th>
			<th>Src. Port</th>
			<th>Dst. Port</th>
			<th>In. Interface</th>
			<th>Out. Interface</th>
			<th>Bytes</th>
			<th>Packets</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($interfaces as $interface):?>
			<tr>
				<td><?php echo $interface['.id'];?></td>
				<td><?php echo $interface['action'];?></td>
				<td><?php echo $interface['chain'];?></td>
				<td><?php echo isset($interface['src-address']) ? $interface['src-address'] : '';?></td>
				<td><?php echo isset($interface['dst-address']) ? $interface['dst-address'] : '';?></td>
				<td><?php echo isset($interface['protocol']) ? $interface['protocol'] : '';?></td>
				<td><?php echo isset($interface['src-port']) ? $interface['src-port'] : '';?></td>
				<td><?php echo isset($interface['dst-port']) ? $interface['dst-port'] : '';?></td>
				<td><?php echo isset($interface['in-interface']) ? $interface['in-interface'] : '';?></td>
				<td><?php echo isset($interface['out-interface']) ? $interface['out-interface'] : '';?></td>
				<td> </td>
				<td> </td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>