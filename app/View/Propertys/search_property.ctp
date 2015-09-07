
<?php  if ($showProperty) {?>
<div class="table-responsive">
<table class="table table-bordered table-hover" >
	<tr>
		<th>Classification</th>
		<th>Property No.</th>
		<th>Description</th>
        <th>Status</th>
        <th>Type</th>
        <th>Availability</th>
 		<th>Actions</th>

		
	</tr>

     
	<?php foreach ($showProperty as $show):
		 $pclassification =$show['Property']['pclassification'];
		$pstatus = $show['Property']['pstatus'];
		$ptype = $show['Property']['ptype'];
		$pavailability = $show['Property']['pavailability'];
	?>


	<tr>

		  <td><?php  if ($pclassification == 1){?> Monitor
                            <?php }?> 
                            <?php  if ($pclassification == 2){?> Mouse
                            <?php }?> 
                             <?php  if ($pclassification == 3){?> Keyboard
                            <?php }?> 
                             <?php  if ($pclassification == 4){?> System Unit
                            <?php }?> 
                             <?php  if ($pclassification == 5){?> Videocard
                            <?php }?> 
                             <?php  if ($pclassification == 6){?> Headset
                            <?php }?> 
                             <?php  if ($pclassification == 7){?> Speaker
                            <?php }?> 
                             <?php  if ($pclassification == 8){?> UPS
                          
                            
                            <?php   }   ?>
                          </td>



		</td>
		<td><?php echo $show['Property']['ppropertyno']; ?></td>
		<td><?php echo $show['Property']['pdescription']; ?></td>

        <td><?php  if ($pstatus == 1){?> Working
            <?php }else{ ?> Defective
            <?php   }   ?></td>
    	<td><?php  if ($ptype == 1){?> New
            <?php }else{ ?> Old
            <?php   }   ?></td>            
        <td><?php  if ($pavailability == 1){?> Available
            <?php }else{ ?> Used
            <?php   }   ?></td>
  		<td>
   		 <a href="/PCInventory/property/index" data-toggle="modal" class="btn btn-success" title="View All Keyboard"><i class="glyphicon glyphicon-search"> </i>View All Keyboard</a>
</td>

	</tr>
	<?php endforeach; ?>
</table>
</div>
<?php }  else{?>

  <div>NO RESULTS FOUND! </div>
<?php } ?>