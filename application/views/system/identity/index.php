<?php
$this->load->view('system/identity/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($identity);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($identity as $row):?>
			<tr>
				<td> </td>
				<td><?php echo $row['name'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>