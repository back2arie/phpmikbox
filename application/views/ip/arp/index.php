<?php
$this->load->view('ip/arp/subnav');
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
			<th>IP Address</th>
			<th>MAC Address</th>
			<th>Interface</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($arp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['mac-address'];?></td>
				<td><?php echo $row['interface'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>