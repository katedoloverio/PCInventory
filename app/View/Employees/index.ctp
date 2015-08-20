

<div class="container-fluid">
 <div class="row">
  <div class="col-sm-2">
 <div class = "breadcrumb">
<img src="/PCInventory/img/users/"/>
 </div>
  </div>
  <div class="col-sm-10">
 


<div class="container">
  
<div class="pull-right" >


</div>
</div>


    <div> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><i class="glyphicon glyphicon-user"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Employee Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Employee</a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-search"> </i> View All Details</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> &nbsp;Admin <span class="caret"></span></a>

<!--    check if user is logged, show user name and logout link or login link -->
          <ul class="dropdown-menu">
            <li><a href="#">  <?php if ($this->Session->read('Auth.User')): ?>
        You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?> <li role="separator" class="divider">   </li> <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
    <?php else: ?>
        <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
    <?php endif; ?></a></li>
         
         
           </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    </div>
   
      
 
<div  class="panel panel-info" >


        <div class="panel-heading" >
                Employee Table
        </div>
        <div class="panel-body" style="background-color:navyblue" >

<div>



<?php echo $this->Session->flash('good'); ?>

<table class="table table-bordered table-hover" >
    <tr>
       <th><?php echo $this->Paginator->sort('Photo'); ?></th>
        <th><?php echo $this->Paginator->sort('Firstname'); ?></th>
        <th><?php echo $this->Paginator->sort('Lastname'); ?></th>
       <th><?php echo $this->Paginator->sort('Company ID'); ?></th>
       <th><?php echo $this->Paginator->sort('Status'); ?></th>

        <th><?php echo __('Actions'); ?></th>
    </tr>

    <?php foreach ($employees as $employee):

    $imagedisplay= $employee['Employee']['empphoto']; ?>


    <tr>
    <td> <img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message"></td>
        <td><?php echo $employee['Employee']['empfirstname']; ?></td>
        <td><?php echo $employee['Employee']['emplastname']; ?></td>
         <td><?php echo $employee['Employee']['empcompanyid']; ?></td>
       <td><?php echo $employee['Employee']['empstatus']; ?></td>

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

<?php echo $this->Form->create('Employee', array('controller' => 'Employee', 'action' => 'add', 'type' => 'file')); ?>



            <div  class="modal-body">
                <div class="form-group">
                    <label for="empfirstname">First Name</label>
                    <input type="text" name="empfirstname" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="emplastname">Lastname</label>
                    <input type="text" name="emplastname" id="" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="empcompanyid">Company ID</label>
                    <input type="text" name="empcompanyid" id="" class="form-control">
                </div>
                <div class="form-group">
                <label for="empphoto">Photo</label>
               <img src="
               ">
               <div class="input file"><label for="PageImage"></label>
             
<?php echo $this->Form->input('', array('type' => 'file', 'class' => 'form-control', 'value' => '')); ?>
              </div>

                </div>
                
                  <div class="form-group">
                    <label for="available">Status</label>

                      <select name="empstatus" id="available" class="form-control">
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
         <?php echo $this->Form->create('Employee', array('controller' => 'Employee', 'action' => 'edit', 'type' => 'file')); ?>

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
                <label for="empphoto">Photo <img src="/PCInventory/img/users/download.jpg" class="img-circle img-for-own-message"/></label>
               
               <div class="input file"><label for="PageImage"></label>
             
<?php echo $this->Form->input('empphoto', array('type' => 'file', 'class' => 'form-control', 'value' => '')); ?>
              </div>

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
<?php foreach($employees  as $row){ 
    $imagedisplay= $row['Employee']['empphoto'] ;?>

<div class="modal fade" id="view<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Employee Information 
            </div>
                <div class="modal-body">
                <label><img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message"></label> <br/>
                 <label>  First Name : <?php echo $row['Employee']['empfirstname'];?> </label> <br/>
                  <label> Last Name : <?php echo $row['Employee']['emplastname'];?> </label> <br/>
                  <label> Company ID : <?php echo $row['Employee']['empcompanyid'];?> </label> <br/>
                  <label>Status: <?php echo $row['Employee']['empstatus'];?> </label> <br/>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>




<?php } ?>

  </div>
 </div>
</div>
