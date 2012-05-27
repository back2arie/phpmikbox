<?php
$this->load->view('ip/routes/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($routes);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Dst. Address</th>
			<th>Gateway</th>
			<th>Distance</th>
			<th>Routing Mark</th>
			<th>Pref. Source</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($routes as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['dst-address'];?></td>
				<td><?php echo $row['gateway'];?></td>
				<td><?php echo $row['distance'];?></td>
				<td><?php echo isset($row['routing-mark']) ? $row['routing-mark'] : '';?></td>
				<td><?php echo isset($row['pref-src']) ? $row['pref-src'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>