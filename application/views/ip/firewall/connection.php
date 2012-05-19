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
			<th>Src. Address</th>
			<th>Dst. Address</th>
			<th>Protocol</th>
			<th>Connection Type</th>
			<th>Connection Mark</th>
			<th>P2P</th>
			<th>Timeout</th>
			<th>TCP State</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($firewall as $connection):?>
			<tr>
				<td><?php echo $connection['.id'];?></td>
				<td><?php echo isset($connection['src-address']) ? $connection['src-address'] : '';?></td>
				<td><?php echo isset($connection['dst-address']) ? $connection['dst-address'] : '';?></td>
				<td><?php echo isset($connection['protocol']) ? $connection['protocol'] : '';?></td>
				<td><?php echo isset($connection['connection-type']) ? $connection['connection-type'] : '';?></td>
				<td><?php echo isset($connection['connection-mark']) ? $connection['connection-mark'] : '';?></td>
				<td><?php echo isset($connection['p2p']) ? $connection['p2p'] : '';?></td>
				<td><?php echo isset($connection['timeout']) ? $connection['timeout'] : '';?></td>
				<td><?php echo isset($connection['tcp-state']) ? $connection['tcp-state'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>