<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('property', 'jquery-1.9.1.min', 'livevalidation_standalone'));
?>
<div class="container-fluid" background-color="black">
<div class="row">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-2">
   <div >
   
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

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>inventory/index">PC <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>



                
             

               
                <li  class="active" class="dropdown">
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
                <li ><a href="<?php echo $this->webroot;?>systemunit/index">System Unit<span style="font-size:16px;"></span></a></li>

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
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><i class="glyphicon glyphicon-user"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Mouse Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Mouse</a></li>
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
   
      
 
<div  class="panel panel-default" >
        
        <div class="panel-heading" >Mouse Table </div>
        <div class="panel-body" style="background-color:navyblue" > <div>


<!--DISPLAY Mouse DETAILS IN TABLE-->
<?php echo $this->Session->flash('mouse'); ?>
<?php echo $this->Session->flash('mouse_error'); ?>
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('added'); ?>

<div class="table-responsive">
<table class="table table-bordered table-hover" >
    <tr>
        <th><?php echo $this->Paginator->sort('Property Number'); ?></th>
        <th><?php echo $this->Paginator->sort('Description'); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Type'); ?></th>
        <th><?php echo $this->Paginator->sort('Availability'); ?></th>
        <th><?php echo __('Actions'); ?></th>
    </tr>

    <?php foreach ($mouses as $mouse):
   $msstatus =  $mouse['Mouse']['msstatus'];
   $msavailability =  $mouse['Mouse']['msavailability'];
   $mstype =  $mouse['Mouse']['mstype'];
    ?>

    <tr>
    
        <td><?php echo $mouse['Mouse']['mspropertyno']; ?></td>
        <td><?php echo $mouse['Mouse']['msdescription']; ?></td>
        <td><?php if($msstatus==1) { ?> Working
              <?php } else{ ?>Defective
                <?php  }   ?>
        </td>
        <td><?php if($mstype==1) { ?> New
              <?php } else{ ?>Old
                <?php  }   ?>
        </td>
                <td><?php if($msavailability ==1){?> Used
           <?php }else{?> Available
           <?php  }?>
         </td>
   
        <td>
        <a href="#view<?php echo $mouse['Mouse']['id'];?>" data-toggle="modal" class="btn btn-success"><i class="glyphicon glyphicon-search"> </i>View</a>

        <a href="#edit<?php echo $mouse['Mouse']['id'];?>" data-toggle="modal" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

        <a href="#delete<?php echo $mouse['Mouse']['id'];?>" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

<!--PAGINATION-->
  <div class="text-center">
   
   <?php if ($allMouses > 10){ ?>
    <ul class="pagination" "text-center">
    <li><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class' => 'prev disabled'));?></li>

   <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>

   <li> <?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => 'next disabled'));
    ?></li>

   </ul>
   <?php } ?>
</div>
   


  </div>
        <div class="panel-footer">
        <div class="text-center">
    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, SZhowing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
        </div>
        </div>
  </div>
    
</div>
</div>

<!--MODAL FORMS-->

 
<!--ADD MOUSE-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Mouse
            </div>


        <form action = "/PCInventory/mouse/addms" method ="post">

            <div  class="modal-body">
                <div class="form-group">
                    <label for="mspropertyno">Property No.</label>
                    <input type="text" name="mspropertyno"   id="mypropertyno-input" class="LV_field" class="form-control">
                </div>
                <div class="form-group">
                    <label for="msdescription">Description</label>
                    <input type="text" name="msdescription"  id="mydescription-input" class="LV_field" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="available">Status</label>
                     <select name="msstatus" id="msstatus" class="form-control">
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option>          
                      </select>
               
                </div>
                <div class="form-group">
                    <label for="available">Type</label>
                     <select name="mstype" id="mstype" class="form-control">
                        <option value="1"> New </option>
                        <option  value="2"> Old</option>          
                      </select>
               
                </div>

                  <div class="form-group">
                    <label for="available">Availability</label>

                      <select name="msavailability" id="msavailability" class="form-control">
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





   






<!-- EDIT MOUSE DETAILS -->
<?php foreach($mouses  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Mouse']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
        <form action = "/PCInventory/mouse/editms" method ="post">

                <div class="modal-body">
                    <input type="text" name="id" value="<?php echo  $row['Mouse']['id'];?>"/>
                    <div class="form-group">
                        <label for="mspropertyno">Property No.</label>
                        <input type="text" name="mspropertyno" id="mypropertyno_edit-input" class="LV_field" value="<?php echo $row['Mouse']['mspropertyno']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="msdescription">Description</label>
                        <input type="text" name="msdescription" id="mydescription_edit-input" class="LV_field" value="<?php echo $row['Mouse']['msdescription']; ?>" class="form-control"/>
                    </div>
                     
                    
                    <div class="form-group">
                        <label for="msstatus">Status</label>
                        <select name="msstatus" id="msstatus" class="form-control">
                        <?php $msstatus = $row['Mouse']['msstatus'];
                        if ($msstatus == 1){?>

                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Defective</option> 
                        <option value="1"> Working</option>
                     
                            <?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="mstype">Type</label>
                        <select name="mstype" id="mstype" class="form-control">
                        <?php $mstype = $row['Mouse']['mstype'];
                        if ($mstype == 1){?>

                        <option value="1"> New</option>
                        <option  value="2"> Old</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Old</option> 
                        <option  value="1"> New</option> 


                     
                            <?php 
                        }


                        ?>
                        
                        </select>




                    </div>

                    <div class="form-group">
                        <label for="msavailability">Availability</label>
                        <select name="msavailability" id="msavailability" class="form-control">
                        <?php $msavailability = $row['Mouse']['msavailability'];
                        if ($msavailability == 1){?>

                        <option value="1"> Used</option>
                        <option  value="2"> Availaible</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Availaible</option> 
                        <option value="1"> Used</option>
                     
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

<!-- This modal for Delete Mouse -->
<?php foreach($mouses  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Mouse']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/mouse/deletems" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Mouse']['id'];?>"/>
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

<!-- This modal for View Mouse -->
<?php foreach($mouses  as $row){ 
    ?>

<div class="modal fade" id="view<?php echo $row['Mouse']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Mouse Information 
            </div>
                <div class="modal-body">
                
                 <label> Property No : <?php echo $row['Mouse']['mspropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Mouse']['msdescription'];?> </label> <br/>
                  <label> Status : <?php $mstatus = $row['Mouse']['msstatus'];
                        if ($msstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $mstype = $row['Mouse']['mstype'];
                        if ($mstype == 1){?> New
                        <?php }else{ ?> Old
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $msavailability = $row['Mouse']['msavailability'];
                        if ($msavailability == 1){?> Used
                        <?php }else{ ?> Available
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
