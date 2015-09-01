
<?php  if ($showKeyboard) {?>
<div class="table-responsive">
<table class="table table-bordered table-hover" >
	<tr>
		<th>Property No.</th>
		<th>Description</th>

        <th>Status</th>
        <th>Type</th>
        <th>Availability</th>
 		<th>Actions</th>

		
	</tr>

     
	<?php foreach ($showKeyboard as $show):
		$kbstatus = $show['Keyboard']['kbstatus'];
		$kbtype = $show['Keyboard']['kbtype'];
		$kbavailability = $show['Keyboard']['kbavailability'];
	?>


	<tr>

		<td><?php echo $show['Keyboard']['kbpropertyno']; ?></td>
		<td><?php echo $show['Keyboard']['kbdescription']; ?></td>

        <td><?php  if ($kbstatus == 1){?> Working
            <?php }else{ ?> Defective
            <?php   }   ?></td>
    	<td><?php  if ($kbtype == 1){?> New
            <?php }else{ ?> Old
            <?php   }   ?></td>            
        <td><?php  if ($kbavailability == 1){?> Available
            <?php }else{ ?> Used
            <?php   }   ?></td>
  		<td>
   		 <a href="/PCInventory/keyboard/index" data-toggle="modal" class="btn btn-success" title="View All Keyboard"><i class="glyphicon glyphicon-search"> </i>View All Keyboard</a>
</td>

	</tr>
	<?php endforeach; ?>
</table>
</div>
<?php }  else{?>

  <div>NO RESULTS FOUND! </div>
<?php } ?>