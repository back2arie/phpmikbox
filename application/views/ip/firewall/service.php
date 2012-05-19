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
			<th>Name</th>
			<th>Ports</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($firewall as $service):?>
			<tr>
				<td><?php echo $service['.id'];?></td>
				<td><?php echo $service['name'];?></td>
				<td><?php echo isset($service['ports']) ? $service['ports'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>