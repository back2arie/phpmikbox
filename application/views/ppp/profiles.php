<?php
$this->load->view('ppp/subnav');
$this->load->view('ppp/button');
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Local Address</th>
			<th>Remote Address</th>
			<th>Bridge</th>
			<th>Rate Limit (rx/tx)</th>
			<th>Only One</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($ppp as $row):?>
			<tr>
				<td><?php echo $row['.id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo isset($row['local-address']) ? $row['local-address'] : '';?></td>
				<td><?php echo isset($row['remote-address']) ? $row['remote-address'] : '';?></td>
				<td><?php echo isset($row['bridge']) ? $row['bridge'] : '';?></td>
				<td><?php echo isset($row['rate-limit']) ? $row['rate-limit'] : '';?></td>
				<td><?php echo isset($row['only-one']) ? $row['only-one'] : '';?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>