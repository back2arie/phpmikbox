<?php
$this->load->view('ip/firewall/subnav');
$this->load->view('ip/firewall/button');
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
		<?php foreach ($firewall as $nat):?>
			<tr>
				<td><?php echo $nat['.id'];?></td>
				<td><?php echo $nat['action'];?></td>
				<td><?php echo $nat['chain'];?></td>
				<td><?php echo isset($nat['src-address']) ? $nat['src-address'] : '';?></td>
				<td><?php echo isset($nat['dst-address']) ? $nat['dst-address'] : '';?></td>
				<td><?php echo isset($nat['protocol']) ? $nat['protocol'] : '';?></td>
				<td><?php echo isset($nat['src-port']) ? $nat['src-port'] : '';?></td>
				<td><?php echo isset($nat['dst-port']) ? $nat['dst-port'] : '';?></td>
				<td><?php echo isset($nat['in-interface']) ? $nat['in-interface'] : '';?></td>
				<td><?php echo isset($nat['out-interface']) ? $nat['out-interface'] : '';?></td>
				<td> </td>
				<td> </td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>