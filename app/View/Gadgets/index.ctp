

	<div class="container">
    
    
    <div class="alert alert-success" style="margin-top: 50px;">
       
        <a href="#add" class="btn btn-primary" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Gadget</a> 
        <div flo>
<p>
<!--    check if user is logged, show user name and logout link or login link -->
    <?php if ($this->Session->read('Auth.User')): ?>
        You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?>. <?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>
    <?php else: ?>
        <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
    <?php endif; ?>
</p>
</div>
 
        
    </div>
    
</div>
<!--ADD Gadget-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Gadget
            </div>

            <form action = "addgdgt" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="ggpropertyno">Property Number</label>
                    <input type="text" name="data[Gadget][ggpropertyno]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ggdescription">Description</label>
                    <input type="textarea" name="data[Gadget][ggdescription]" id="" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="ggserial">Serial No.</label>
                    <input type="text" name="data[Gadget][ggserial]" id="" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="ggstatus">Status</label>

                      <select name="data[Gadget][ggstatus]" id="" class="form-control">
                        <option value="1"> Active</option>
                        <option  value="2"> Resign</option>          
                        </select>
               
                </div>
                  <div class="form-group">
                    <label for="ggavailability">Availability</label>

                      <select name="data[Gadget][ggavailability]" id="" class="form-control">
                        <option value="1"> Used</option>
                        <option  value="2"> Available</option>          
                        </select>
               
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
                <button data-dismiss="modal" class="btn btn-default">Cancel</button>
            </div>

        </div>
        </form>
    </div>
</div>
</div>



<div>



<?php echo $this->Session->flash('good'); ?>
<div class="container">
<table class="table table-bordered table-hover" >
	<tr>
		<th><?php echo $this->Paginator->sort('Property No.'); ?></th>
		<th><?php echo $this->Paginator->sort('Description'); ?></th>

        <th><?php echo $this->Paginator->sort('Serial'); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Availability'); ?></th>


		<th><?php echo __('Actions'); ?></th>
	</tr>

	<?php foreach ($gadgets as $gadget): ?>
	<tr>
		<td><?php echo $gadget['Gadget']['ggpropertyno']; ?></td>
		<td><?php echo $gadget['Gadget']['ggdescription']; ?></td>
        <td><?php echo $gadget['Gadget']['ggserial']; ?></td>
        <td><?php echo $gadget['Gadget']['ggstatus']; ?></td>
        <td><?php echo $gadget['Gadget']['ggavailability']; ?></td>
  
      
      

		<td>
        <a href="#view<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-success"><i class="glyphicon glyphicon-search"> </i>View</a>

		<a href="#edit<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

		<a href="#delete<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>





	</tr>
	<?php endforeach; ?>
</table>

    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>

   

<ul class="pagination">
    <li><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class' => 'prev disabled'));?></li>
   <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
   <li><?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => 'next disabled'));
    ?></li>
        </ul>
     
</div>

   






<!-- This modal for Edit Member -->
<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="editgdgt" method="post">
                <div class="modal-body">
                    <input type="text" name="id" value="<?php echo  $row['Gadget']['id'];?>"/>
                    <div class="form-group">
                        <label for="ggpropertyno">Property No.</label>
                        <input type="text" name="ggpropertyno" id="" value="<?php echo $row['Gadget']['ggpropertyno']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggdescription">Description</label>
                        <input type="textarea" name="ggdescription" id="" value="<?php echo $row['Gadget']['ggdescription']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggserial">Serial No.</label>
                        <input type="text" name="ggserial" id="" value="<?php echo $row['Gadget']['ggserial']; ?>" class="form-control"/>
                    </div>
                   
                    
                    <div class="form-group">
                        <label for="ggstatus">Status</label>
                        <select name="ggstatus" id="" class="form-control">
                        <?php $ggstatus = $row['Gadget']['ggstatus'];
                        if ($ggstatus == 1){?>

                        <option value="1"> Active</option>
                        <option  value="2"> Resign</option> 

<?php
                        }else{
                        	?>
                        <option  value="2"> Resign</option> 
                        <option value="1"> Active</option>
                     
                        	<?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>

                      <div class="form-group">
                        <label for="ggavailability">Availability</label>
                        <select name="ggavailability" id="ggavailability" class="form-control">
                        <?php $ggavailability = $row['Gadget']['ggavailability'];
                        if ($ggavailability == 1){?>

                        <option value="1"> Available</option>
                        <option  value="2"> Used</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Used</option> 
                        <option value="1"> Available</option>
                     
                            <?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>




                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<!-- This modal for Delete Member -->
<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="deletegdgt" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Gadget']['id'];?>"/>
                    Are you sure you want to delete this data?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Yes</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<!-- This modal for View Member -->
<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="view<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
                <div class="modal-body">
                 <label>  Porperty No. : <?php echo $row['Gadget']['ggpropertyno'];?> </label> <br/>
                  <label> Descriptiom : <?php echo $row['Gadget']['ggdescription'];?> </label> <br/>
                  <label> Serial No. : <?php echo $row['Gadget']['ggserial'];?> </label> <br/>
                  <label> Status : 
                    <?php $ggstatus = $row['Gadget']['ggstatus'];
                        if ($ggstatus == 1){ ?>
                  
                    <?php echo 'Active';?>

<?php
                        }else{
                            ?>
 <?php echo 'Resign';?>
                       
                            <?php 
                        }


                        ?>




                   </label> <br/>
                  <label> Status : 
                    <?php $ggavailability = $row['Gadget']['ggavailability'];
                        if ($ggavailability == 1){ ?>
                  
                    <?php echo 'Active';?>

<?php
                        }else{
                            ?>
 <?php echo 'Resign';?>
                       
                            <?php 
                        }


                        ?>




                   </label> <br/> <br/>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>

<?php } ?>
