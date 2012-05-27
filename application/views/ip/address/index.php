<?php
$this->load->view('ip/address/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($arp);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Address</th>
			<th>Network</th>
			<th>Broadcast</th>
			<th>Interface</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($address as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['network'];?></td>
				<td><?php echo $row['broadcast'];?></td>
				<td><?php echo $row['interface'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>