
<?php  if ($showGadget) {?>

<table id="searchGad"  class="table table-bordered table-hover" >
	<tr>
		<th>Property No.</th>
		<th>Description</th>

        <th>Serial</th>
        <th>Status</th>
        <th>Availability</th>
 		<th>Actions</th>

		
	</tr>

     
	<?php foreach ($showGadget as $show):?>


	<tr>

		<td><?php echo $show['Gadget']['ggpropertyno']; ?></td>
		<td><?php echo $show['Gadget']['ggdescription']; ?></td>
        <td><?php echo $show['Gadget']['ggserial']; ?></td>
        <td><?php echo $show['Gadget']['ggstatus']; ?></td>
        <td><?php echo $show['Gadget']['ggavailability']; ?></td>
  		<td>
   		 <a href="/PCInventory/gadget/index" data-toggle="modal" class="btn btn-success" title="View All Gadgets"><i class="glyphicon glyphicon-search"> </i>View All Gadgets</a>


	</tr>
	<?php endforeach; ?>
</table>

<?php }  else{?>

  <div>NO RESULTS FOUND! </div>
<?php } ?>