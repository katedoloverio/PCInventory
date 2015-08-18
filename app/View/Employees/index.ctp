<nav style = "color:white" class="navbar navbar-inverse" role="navigation">
<div class="container" style="margin: 30px 1px 15px 175px;">
<div class="pull-right" >

<p><i class="glyphicon glyphicon-user"></i> &nbsp;

<!--    check if user is logged, show user name and logout link or login link -->
    <?php if ($this->Session->read('Auth.User')): ?>
        You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?>. <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
    <?php else: ?>
        <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
    <?php endif; ?>

</p>
</div>
</div>

</nav>

<div class="container">
    
    
    <div class="alert alert-info" style="margin-top: 5px;">
       
        <a href="#add" class="btn btn-primary" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Employee</a> 
       

</div>

<div  class="panel panel-primary">

        <div class="panel-heading">
                Employee Table
        </div>
        <div class="panel-body">

<div>



<?php echo $this->Session->flash('good'); ?>

<table class="table table-bordered table-hover" >
    <tr>
        <th><?php echo $this->Paginator->sort('Firstname'); ?></th>
        <th><?php echo $this->Paginator->sort('Lastname'); ?></th>


        <th><?php echo __('Actions'); ?></th>
    </tr>

    <?php foreach ($employees as $employee): ?>
    <tr>
        <td><?php echo $employee['Employee']['empfirstname']; ?></td>
        <td><?php echo $employee['Employee']['emplastname']; ?></td>
      
      

        <td>
        <a href="#view<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-success"><i class="glyphicon glyphicon-search"> </i>View</a>

        <a href="#edit<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

        <a href="#delete<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>





    </tr>
    <?php endforeach; ?>
</table>





     <div class="text-center">
   <ul class="pagination text-center" >
    <li><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class' => 'prev disabled'));?></li>
   <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
   <li><?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => 'next disabled'));
    ?></li>
        </ul>
</div>
   


        </div>
        <div class="panel-footer">
        <div class="text-center">
    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
</div>
   
        </div>
	
 
        
    </div>
    
</div>
</div>


 
<!--ADD EMPLOYEE-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Employee
            </div>

            <form action = "addemp" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="empfirstname">First Name</label>
                    <input type="text" name="data[Employee][empfirstname]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="emplastname">Lastname</label>
                    <input type="text" name="data[Employee][emplastname]" id="" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="empcompanyid">Company ID</label>
                    <input type="text" name="data[Employee][empcompanyid]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="empphoto">Photo</label>
                    <input type="text" name="data[Employee][empphoto]" id="" class="form-control">
                </div>
                
                  <div class="form-group">
                    <label for="available">Status</label>

                      <select name="data[Employee][available]" id="available" class="form-control">
                        <option value="1"> Active</option>
                        <option  value="2"> Resign</option>          
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





   






<!-- This modal for Edit Member -->
<?php foreach($employees  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="editemp" method="post">
                <div class="modal-body">
                    <input type="text" name="id" value="<?php echo  $row['Employee']['id'];?>"/>
                    <div class="form-group">
                        <label for="empfirstname">First Name</label>
                        <input type="text" name="empfirstname" id="empfirstname" value="<?php echo $row['Employee']['empfirstname']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="emplastname">Last Name</label>
                        <input type="text" name="emplastname" id="emplastname" value="<?php echo $row['Employee']['emplastname']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="empcompanyid">Company ID</label>
                        <input type="text" name="empcompanyid" id="empcompanyid" value="<?php echo $row['Employee']['empcompanyid']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="empphoto">Photo</label>
                        <input type="text" name="empphoto" id="empphoto" value="<?php echo $row['Employee']['empphoto']; ?>" class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="empstatus">Status</label>
                        <select name="empstatus" id="empstatus" class="form-control">
                        <?php $empstatus = $row['Employee']['empstatus'];
                        if ($empstatus == 1){?>

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
<?php foreach($employees  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="deleteemp" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Employee']['id'];?>"/>
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
<?php foreach($employees  as $row){ ?>

<div class="modal fade" id="view<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Employee Information 
            </div>
                <div class="modal-body">
                 <label>  First Name : <?php echo $row['Employee']['empfirstname'];?> </label> <br/>
                  <label> Last Name : <?php echo $row['Employee']['emplastname'];?> </label> <br/>
                  <label> Company ID : <?php echo $row['Employee']['empcompanyid'];?> </label> <br/>
                  <label> Photo : <?php echo $row['Employee']['empphoto'];?> </label> <br/>
                  <label>Status: <?php echo $row['Employee']['empstatus'];?> </label> <br/>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>

<?php } ?>
