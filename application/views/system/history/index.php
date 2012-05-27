<?php
$this->load->view('system/history/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($history);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Action</th>
			<th>By</th>
			<th>Policy</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($history as $row):?>
			<tr>
				<td> </td>
				<td><?php echo $row['action'];?></td>
				<td><?php echo $row['by'];?></td>
				<td><?php echo $row['policy'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>