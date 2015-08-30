
<?php  if ($showMonitor) {?>

<table class="table table-bordered table-hover" >
	<tr>
		<th>Property No.</th>
		<th>Description</th>

        <th>Status</th>
        <th>Availability</th>
 		<th>Actions</th>

		
	</tr>

     
	<?php foreach ($showMonitor as $show):?>


	<tr>

		<td><?php echo $show['Monitor']['mopropertyno']; ?></td>
		<td><?php echo $show['Monitor']['modescription']; ?></td>
        <td><?php echo $show['Monitor']['mostatus']; ?></td>
        <td><?php echo $show['Monitor']['motype']; ?></td>
        <td><?php echo $show['Monitor']['moavailability']; ?></td>
  		<td>
   		 <a href="/PCInventory/monitor/index" data-toggle="modal" class="btn btn-success" title="View All Monitor"><i class="glyphicon glyphicon-search"> </i>View All Monitor</a>


	</tr>
	<?php endforeach; ?>
</table>

<?php }  else{?>

  <div>NO RESULTS FOUND! </div>
<?php } ?>