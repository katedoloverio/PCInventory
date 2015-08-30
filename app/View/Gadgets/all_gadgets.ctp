
<table class=" table table-bordered table-hover" id="gadget">
	<tr>
		<th><?php echo $this->Paginator->sort('Property No.'); ?></th>
		<th><?php echo $this->Paginator->sort('Description'); ?></th>

        <th><?php echo $this->Paginator->sort('Serial'); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Availability'); ?></th>


		<th><?php echo __('Actions'); ?></th>
	</tr>

     
	<?php foreach ($gadgets as $gadget):
		$ggstatus = $gadget['Gadget']['ggstatus'];
		$ggavailability = $gadget['Gadget']['ggavailability'];
     ?>


	   <tr>
		<td><?php echo $gadget['Gadget']['ggpropertyno']; ?></td>
		<td><?php echo $gadget['Gadget']['ggdescription']; ?></td>
        <td><?php echo $gadget['Gadget']['ggserial']; ?></td>
        <td><?php  if ($ggstatus == 1){?> Working
            <?php }else{ ?> Defective
            <?php   }   ?></td>
        <td><?php  if ($ggavailability == 1){?> Available
            <?php }else{ ?> Used
            <?php   }   ?></td>
  
      
      

		<td>
    <a href="#view<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-success" title="View"><i class="glyphicon glyphicon-search"> </i>View</a>

    <button id="<?php echo $gadget['Gadget']['id'];?>" class="btn btn-primary " onclick="editGadget(<?php echo $gadget['Gadget']['id']; ?>, '<?php echo $gadget['Gadget']['ggpropertyno']; ?>','<?php echo $gadget['Gadget']['ggdescription']; ?>','<?php echo $gadget['Gadget']['ggserial']; ?>', <?php echo $gadget['Gadget']['ggstatus']; ?>,<?php echo $gadget['Gadget']['ggavailability']; ?>)" 
      title ="Edit"><i class="glyphicon glyphicon-edit"> </i> 
    Edit
    </button>


		<a href="#delete<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-danger"  title="Delete"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>





	</tr>
	<?php endforeach; ?>
</table>
