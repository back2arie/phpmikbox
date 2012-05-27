<?php
$this->load->view('system/license/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($license);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Software ID</th>
			<th>Upgradable To</th>
			<th>Level</th>
			<th>Features</th>
			<th>Expires In</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($license as $row):?>
			<tr>
				<td> </td>
				<td><?php echo $row['software-id'];?></td>
				<td><?php echo $row['upgradable-to'];?></td>
				<td><?php echo $row['nlevel'];?></td>
				<td><?php echo $row['features'];?></td>
				<td><?php echo isset($row['expires-in']) ? $row['expires-in'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>