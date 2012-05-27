<?php
$this->load->view('ip/pool/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($pool);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Addresses</th>
			<th>Next Pool</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($pool as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['ranges'];?></td>
				<td><?php echo isset($row['next-pool']) ? $row['next-pool'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>