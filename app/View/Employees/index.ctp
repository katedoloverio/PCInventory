<html>
<head>
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('main3', 'jquery-1.9.1.min', 'livevalidation_standalone'));
?> 
</head>

<title>Employee</title>
<body>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-2">
   <div>
   <nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">FDCI PC Inventory <img src="/PCInventory/img/users/fdci.png"/> </a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>


                <li class="active" ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>inventory/index">PC <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>
                
                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties <span class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span><span style="font-size:16px;" ></span></a>

                <ul class="dropdown-menu forAnimate" role="menu">

                <li>
                  <li ><a href="<?php echo $this->webroot;?>monitor/index">Monitor<span style="font-size:16px;"></span></a></li>
                </li>

                <li ><a href="<?php echo $this->webroot;?>mouse/index">Mouse<span style="font-size:16px;" ></span></a></li>
                </li>

                <li>
                  <li ><a href="<?php echo $this->webroot;?>keyboard/index">Keyboard<span style="font-size:16px;"></span></a></li>
                  </li>
                <li>

                <li >
                  <li><a href="<?php echo $this->webroot;?>systemunit/index">System Unit<span style="font-size:16px;"></span></a></li>
                </li>

                <li>
                  <li ><a href="<?php echo $this->webroot;?>videocard/index">Videocard<span style="font-size:16px;"></span></a></li>
                </li>

                <li>
                  <li ><a href="<?php echo $this->webroot;?>headset/index">Headset<span style="font-size:16px;"></span></a></li>
                </li>
 
                <li>
                   <li ><a href="<?php echo $this->webroot;?>speaker/index">Speakers<span style="font-size:16px;"></span></a></li>
                </li>

                <li>
                   <li ><a href="<?php echo $this->webroot;?>ups/index">UPS<span style="font-size:16px;"></span></a></li>
                </li>
                
          
          </ul>
              <li ><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li>
              </li>
          </ul>
                </ul>
                </li>
        </div>
    </div>
</nav>
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
      <a href="/PCInventory/employee/index" class="navbar-brand"><i class="glyphicon glyphicon-user"></i></a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Employee Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Employee</a></li>
        
          </ul>
        </li>
      </ul>

<!-- 
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->

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
   
      
 
<div  class="panel panel-default" >


        <div class="panel-heading" >
                Employee Table
        </div>
        <div class="panel-body"  >
<?php echo $this->Session->flash(); ?>

<div>

<?php echo $this->Session->flash('error'); ?>
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('added'); ?>
<table class="table table-bordered table-hover" >
    <tr> 
       <th><?php echo $this->Paginator->sort('View'); ?></th>
       <th><?php echo $this->Paginator->sort('Photo'); ?></th>
        <th><?php echo $this->Paginator->sort('Name'); ?></th>
        <th><?php echo $this->Paginator->sort('PC Type'); ?></th>
       <th><?php echo $this->Paginator->sort('Monitor/s'); ?></th>
      

        <th><?php echo __('Actions'); ?></th>
    </tr>

    <?php foreach ($employees as $employee):

    $imagedisplay= $employee['Employee']['empphoto']; ?>


    <tr>
    <td><a href="#changephoto<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-default"  title ="View"><i class="glyphicon glyphicon-user" > </i></a></td>
    <td> <img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message"></td>
    <td><?php echo $employee['Employee']['empfirstname']; ?>&nbsp; <?php echo $employee['Employee']['emplastname']; ?> </td>
       <td><?php $pctype =  $employee['Inventory']['pctype'] ;
       if($pctype==1) { ?> Fast
              <?php } else{ ?>Slow
                <?php  }   ?>
        </td>
         <td><?php echo $employee['Inventory']['monitor_id']; ?></td>

        <td>
        <a href="#view<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-success"  title ="View"><i class="glyphicon glyphicon-search" > </i>View</a>

        <a href="#edit<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-primary" title ="Edit"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

        <a href="#delete<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-danger" title ="Delete"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>





    </tr>
    <?php endforeach; ?>
</table>




  <div class="text-center">
   <?php if ($allEmployees > 10){ ?>
   <ul class="pagination pagination-large">

    <li><?php  echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>

    <li><?php  echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?></li>
    <li> <?php  echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
   
   </ul>
   <?php } ?>
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


 
<!-- EMPLOYEE-->
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
                    <input  type="text" name="empfirstname" id="fname-input"   class="form-control" >
                </div>
                <div class="form-group">
                    <label for="emplastname">Last Name</label>
                    <input type="text" name="emplastname" id="lname-input" class="form-control" >
                </div>
                  <div class="form-group">
                    <label for="empcompanyid">Company ID</label>
                    <input type="text" name="empcompanyid" id="companyID-input" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Photo</label>
                <div class="input file" ><label for="PageImage"></label>
                <div class="input file"><input type="file" name="data[Employee][empphoto]"  class="form-control" id="EmployeeEmpphoto"/></div>              
               </div>

                </div>
                
                  <div class="form-group">
                    <label for="available">Status</label>

                      <select name="empstatus" id="available" class="form-control" id="status-input">
                        <option value="1"> Active</option>
                                  0.
                        </select>
               
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onClick="checkForm()" >Add</button>
                <button data-dismiss="modal" class="btn btn-default">Cancel</button>
            </div>

        </div>
        </form>
       
    </div>
</div>
</div>

<!--Modal to change photo-->
<?php foreach($employees  as $row){ 

    $imagedisplay= $row['Employee']['empphoto']; ?>

<div class="modal fade" id="changephoto<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>

                <?php echo $this->Form->create('Employee', array('controller' => 'Employee', 'action' => 'editphoto', 'type' => 'file')); ?>
                <div class="modal-body">
                   <div class="form-group">
                       <label>  <img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message"></label>
                   </div>
                    <div class="input file" >
                      <label for="PageImage"></label>
                    </div>
                    <div class="input file">
                      <input type="file" name="data[Employee][empphoto]"  class="form-control" id="EmployeeEmpphoto"/>
                      <input type="hidden" name="data[Employee][id]" value="<?php echo $row['Employee']['id'];?>" />
                    </div>
                </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php } ?>




   

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
                  
                    <div class="form-group">
                        <label for="empfirstname">First Name</label>
                        <input type="text" name="empfirstname" id="fname_edit-input"  value="<?php echo $row['Employee']['empfirstname']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="emplastname">Last Name</label>
                        <input type="text" name="emplastname" id="lname_edit-input"  value="<?php echo $row['Employee']['emplastname']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="empcompanyid">Company ID</label>
                        <input type="text" name="empcompanyid" id="companyID_edit-input"  value="<?php echo $row['Employee']['empcompanyid']; ?>" class="form-control"/>
                    </div>
                 <!--  <div class="form-group">
                <label>Photo <img src="/PCInventory/img/users/user.png" class="img-circle img-for-own-message"/></label>
               

                <div class="input file" ><label for="PageImage"></label>
<div class="input file"><input type="file" name="data[Employee][empphoto]"  class="form-control" id="EmployeeEmpphoto"/></div>              
              </div>
             

                </div>-->
                    
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

<!-- This modal for View Employees -->
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
                  <label> Status : <?php $empstatus = $row['Employee']['empstatus'];
                        if ($empstatus == 1){?> Active
                        <?php }else{ ?> Resign
                            <?php   }   ?>
                  </label> <br/>
                
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
</body>
</html>