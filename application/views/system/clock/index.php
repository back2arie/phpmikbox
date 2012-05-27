<?php
$this->load->view('system/clock/subnav');
$this->load->view('interfaces/button');
?>

<?php
/*echo "<pre>";
print_r($clock);
echo "</pre>";*/
?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Time</th>
			<th>Date</th>
			<th>Time Zone Name</th>
			<th>GMT Offset</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach ($clock as $row):?>
			<tr>
				<td> </td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['time-zone-name'];?></td>
				<td><?php echo $row['gmt-offset'];?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>