
<?php  if ($showEmployee) {?>
<div class="table-responsive">
<table class="table table-bordered table-hover" >
	<tr>
		
		<th>Photo</th>
    <th>Name</th>
    <th>PC Type</th>
    <th>Monitor/s</th>
    <th>Actions</th>
	</tr>

     
	<?php foreach ($showEmployee as $show): 
      $imagedisplay= $show['Employee']['empphoto']; ?>

 
    <td> <img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message"></td>
    <td><?php echo $show['Employee']['empfirstname']; ?>&nbsp; <?php echo $show['Employee']['emplastname']; ?> </td>
    <td><?php $pctype =  $show['Inventory']['pctype'] ;
       if($pctype==1) { ?> Fast
              <?php } else{ ?>Slow
                <?php  }   ?>
    </td>
    <td><?php echo $show['Inventory']['monitor_id']; ?></td>

    <td class='text-center'>
         <a href="/PCInventory/employee/index" data-toggle="modal" class="btn btn-success" title="View All Employee"><i class="glyphicon glyphicon-search"> </i>View All Employee</a>    </td>

  </tr>

	<?php endforeach; ?>

</table>
</div>
<?php } else { ?>

  <div>NO RESULTS FOUND! </div>
  
<?php } ?>