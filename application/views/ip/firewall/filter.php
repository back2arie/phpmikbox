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
		<?php foreach ($firewall as $filter):?>
			<tr>
				<td><?php echo $filter['.id'];?></td>
				<td><?php echo $filter['action'];?></td>
				<td><?php echo $filter['chain'];?></td>
				<td><?php echo isset($filter['src-address']) ? $filter['src-address'] : '';?></td>
				<td><?php echo isset($filter['dst-address']) ? $filter['dst-address'] : '';?></td>
				<td><?php echo isset($filter['protocol']) ? $filter['protocol'] : '';?></td>
				<td><?php echo isset($filter['src-port']) ? $filter['src-port'] : '';?></td>
				<td><?php echo isset($filter['dst-port']) ? $filter['dst-port'] : '';?></td>
				<td><?php echo isset($filter['in-interface']) ? $filter['in-interface'] : '';?></td>
				<td><?php echo isset($filter['out-interface']) ? $filter['out-interface'] : '';?></td>
				<td> </td>
				<td> </td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>