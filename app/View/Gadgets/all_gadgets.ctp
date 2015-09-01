


<head>
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('gadget', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min'));
?> 

</head>




<div class="mytable table-responsive">
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


           <tr class="remove<?php echo $gadget['Gadget']['id'];?>">
            <td><?php echo $gadget['Gadget']['ggpropertyno']; ?></td>
            <td><?php echo $gadget['Gadget']['ggdescription']; ?></td>
            <td><?php echo $gadget['Gadget']['ggserial']; ?></td>
            <td><?php  if ($ggstatus == 1){?> Working
                <?php }else{ ?> Defective
                <?php   }   ?></td>
            <td><?php  if ($ggavailability == 1){?> Available
                <?php }else{ ?> Used
                <?php   }   ?></td>

      
          
          


            <td class='text-center'>
               <a href="javascript:void(0);" data-href="#view<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-success gadget-view-modal"><i class="glyphicon glyphicon-search"> </i>View</a>

               <a href="javascript:void(0);" data-href="#edit<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-primary gadget-edit-modal"><i class="glyphicon glyphicon-edit"> </i>Edit</a>


               <a href="javascript:void(0);" data-href="#delete<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-danger gadget-delete-modal"><i class="glyphicon glyphicon-trash"> </i>Delete</a> 
            </td>



        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>