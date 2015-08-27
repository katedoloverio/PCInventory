
<?php  if ($showGadget) {?>

<table class="table table-bordered table-hover" >
	<tr>
		<th>Property No.</th>
		<th>Description</th>

        <th>Serial</th>
        <th>Status</th>
        <th>Availability</th>


		<th><?php echo __('Actions'); ?></th>
	</tr>

     
	<?php foreach ($showGadget as $show):?>


	<tr>

		<td><?php echo $show['Gadget']['ggpropertyno']; ?></td>
		<td><?php echo $show['Gadget']['ggdescription']; ?></td>
        <td><?php echo $show['Gadget']['ggserial']; ?></td>
        <td><?php echo $show['Gadget']['ggstatus']; ?></td>
        <td><?php echo $show['Gadget']['ggavailability']; ?></td>
  		<td>
   		 <a href="#view<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-success" title="View"><i class="glyphicon glyphicon-search"> </i></a>

		<a href="#edit<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-primary" title="Edit"> <i class="glyphicon glyphicon-edit"> </i></a>

		<a href="#delete<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-danger"  title="Delete"><i class="glyphicon glyphicon-trash"> </i></a></td>




	</tr>
	<?php endforeach; ?>
</table>

<?php }  else{?>

  <div>NO RESULTS FOUND! </div>
<?php } ?>