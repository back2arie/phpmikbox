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
		<?php foreach ($firewall as $mangle):?>
			<tr>
				<td><?php echo $mangle['.id'];?></td>
				<td><?php echo $mangle['action'];?></td>
				<td><?php echo $mangle['chain'];?></td>
				<td><?php echo isset($mangle['src-address']) ? $mangle['src-address'] : '';?></td>
				<td><?php echo isset($mangle['dst-address']) ? $mangle['dst-address'] : '';?></td>
				<td><?php echo isset($mangle['protocol']) ? $mangle['protocol'] : '';?></td>
				<td><?php echo isset($mangle['src-port']) ? $mangle['src-port'] : '';?></td>
				<td><?php echo isset($mangle['dst-port']) ? $mangle['dst-port'] : '';?></td>
				<td><?php echo isset($mangle['in-interface']) ? $mangle['in-interface'] : '';?></td>
				<td><?php echo isset($mangle['out-interface']) ? $mangle['out-interface'] : '';?></td>
				<td> </td>
				<td> </td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>