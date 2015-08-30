
<html>
<head>

<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('headset', 'jquery-1.9.1.min', 'livevalidation_standalone'));
?>
 

 </head> 
 
 <title> Inventory </title>



<div class="container-fluid" background-color="black">
<div class="row">
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

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li  class="active"><a href="<?php echo $this->webroot;?>inventory/index">PC <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>

                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties <span class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span><span style="font-size:16px;" ></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li> <li><a href="<?php echo $this->webroot;?>monitor/index">Monitor<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li><a href="<?php echo $this->webroot;?>mouse/index">Mouse<span style="font-size:16px;" ></span></a></li> </li>
                        <li> <li><a href="<?php echo $this->webroot;?>keyboard/index">Keyboard<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li><a href="<?php echo $this->webroot;?>systemunit/index">System Unit<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li><a href="<?php echo $this->webroot;?>videocard/index">Videocard<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li ><a href="<?php echo $this->webroot;?>headset/index">Headset<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li ><a href="<?php echo $this->webroot;?>speaker/index">Speakers<span style="font-size:16px;"></span></a></li> </li>
                        <li> <li ><a href="<?php echo $this->webroot;?>ups/index">UPS<span style="font-size:16px;"></span></a></li> </li>

                    </ul>
                       <li ><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li> </li>
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
        <li class="active"><a href="#">PC Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add PC</a></li>
       
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" method="post" style="margin-top:0px">
        <div class="form-group">
          <input type="text" name ="search" id="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" id="submit" class="btn btn-default " style="margin-top:5px">Search</button>   
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
        
        <div class="panel-heading" >PC Table </div>
        <div class="panel-body"  > <div>


<!--DISPLAY PC DETAILS IN TABLE-->
<?php echo $this->Session->flash('good'); ?>

<div class="mytable table-responsive">
<table class="table table-bordered table-hover search-table inner" >
    <tr>
        <th><?php echo $this->Paginator->sort('Employee'); ?></th>
        <th><?php echo $this->Paginator->sort('System Unit'); ?></th>
        <th><?php echo $this->Paginator->sort('Monitor'); ?></th>
        <th><?php echo $this->Paginator->sort('Video Card'); ?></th>
        <th><?php echo $this->Paginator->sort('Mouse'); ?></th>
        <th><?php echo $this->Paginator->sort('Keyboard'); ?></th>
        <th><?php echo $this->Paginator->sort('Headset'); ?></th>
        <th><?php echo $this->Paginator->sort('Speakers'); ?></th>
        <th><?php echo $this->Paginator->sort('UPS'); ?></th>

        <th><?php echo $this->Paginator->sort('OS'); ?></th>
        <th><?php echo $this->Paginator->sort('OS SN#'); ?></th>
        <th><?php echo $this->Paginator->sort('Additional Info '); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Type'); ?></th>
        <th><?php echo $this->Paginator->sort('Availability'); ?></th>
        <th><?php echo $this->Paginator->sort('Receive Date'); ?></th>
        <th><?php echo __('Actions'); ?></th>

    </tr>

    <?php foreach ($inventorys as $inventory):

   $pcstatus =  $inventory['Inventory']['pcstatus'];
   $pcavailability =  $inventory['Inventory']['pcavailability'];
   $pctype =  $inventory['Inventory']['pctype'];

    ?>

<tr>
                  
        <td><a href="#viewem<?php echo $inventory['Inventory']['employee_id']?>" data-toggle="modal"><?php echo $inventory['Employee']['empfirstname'] ?></a></td>  

        <td><a href="#viewsu<?php echo $inventory['Inventory']['systemunit_id']?>" data-toggle="modal"><?php echo $inventory['Systemunit']['supropertyno'] ?></a></td>
         
        <td><a href="#viewmo<?php echo $inventory['Inventory']['monitor_id']?>" data-toggle="modal"><?php echo $inventory['Monitor']['mopropertyno'] ?></a></td>
               
        <td><a href="#viewvc<?php echo $inventory['Inventory']['videocard_id']?>" data-toggle="modal"><?php echo $inventory['Videocard']['vcpropertyno'] ?></a></td>

        <td><a href="#viewms<?php echo $inventory['Inventory']['mouse_id']?>" data-toggle="modal"><?php echo $inventory['Mouse']['mspropertyno'] ?></a></td>
               
        <td><a href="#viewkb<?php echo $inventory['Inventory']['keyboard_id']?>" data-toggle="modal"><?php echo $inventory['Keyboard']['kbpropertyno'] ?></a></td>
               
        <td><a href="#viewhs<?php echo $inventory['Inventory']['headset_id']?>" data-toggle="modal"><?php echo $inventory['Headset']['hspropertyno'] ?></a></td>
            
        <td><a href="#viewsp<?php echo $inventory['Inventory']['speaker_id']?>" data-toggle="modal"><?php echo $inventory['Speaker']['sppropertyno'] ?></a></td>
               
        <td><a href="#viewup<?php echo $inventory['Inventory']['up_id']?>" data-toggle="modal"><?php echo $inventory['Up']['uppropertyno'] ?></a></td>
               

        <td><?php echo $inventory['Inventory']['os_id']; ?></td>
        <td><?php echo $inventory['Inventory']['pcosserialno']; ?></td>
        <td><?php echo $inventory['Inventory']['pcadditionalinfo']; ?></td>

        <td><?php if($pcstatus==1) { ?> Working
              <?php } else{ ?>Defective
                <?php  }   ?>
        </td>
        <td><?php if($pctype==1) { ?> Fast
              <?php } else{ ?>Slow
                <?php  }   ?>
        </td>
        <td><?php if($pcavailability ==1){?> Used
           <?php }else{?> Available
           <?php  }?>
         </td>
   
      
        <td><?php echo $inventory['Inventory']['pcreceivedate']; ?></td>


        <td>
        <a href="#view<?php echo $inventory['Inventory']['id'];?>" data-toggle="modal" class="btn btn-success btn-xs" title="View"><i class="glyphicon glyphicon-search"> </i>View</a>

        <a href="#edit<?php echo $inventory['Inventory']['id'];?>" data-toggle="modal" class="btn btn-primary btn-xs"  title="Edit"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

         <button id="<?php echo $inventory['Inventory']['id'];?>" data-toggle="modal" class="btn btn-danger delete btn-xs" title ="Delete"><i class="glyphicon glyphicon-trash"> </i>Delete</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>



<!--PAGINATION-->
            <div class="text-center">
             <?php if ($allInventorys > 10){ ?>
             <ul class="pagination pagination-large">
                <li><?php  echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
                <li><?php  echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?></li>
                <li> <?php  echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
               </ul>
               <?php } ?>
            </div>
           
 
        <div class="panel-footer">
        <div class="text-center">
    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, Showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
         </div>
        </div>
      </div>
 </div>
         <!-- Show  Search results-->
    <div id="inventory">
    </div> 

  </div>
 </div>
</div>
</div>
<!--MODAL FORMS-->



<!-- This modal for View Employees -->
<?php foreach($inventorys  as $row){ 
    $imagedisplay= $row['Employee']['empphoto'] ;?>

<div class="modal fade" id="viewem<?php echo $row['Inventory']['employee_id'];?>" tabindex="-1" role="dialog">

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

<!--end of employee view -->

<!--System Unit VIEW-->
<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewsu<?php echo $row['Inventory']['systemunit_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                System Unit Information 
            </div>
                <div class="modal-body">
                 <div class="modal-body">
                
                 <label> Property No : <?php echo $row['Systemunit']['supropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Systemunit']['sudescription'];?> </label> <br/>
                  <label> Status : <?php $sustatus = $row['Systemunit']['sustatus'];
                        if ($sustatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $sutype = $row['Systemunit']['sutype'];
                        if ($sutype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability : <?php $suavailability = $row['Systemunit']['suavailability'];
                        if ($suavailability == 1){?> Used
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
</div>
<?php } ?>

<!-- end Monitor VIEW-->


<!--Monitor VIEW-->
<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewmo<?php echo $row['Inventory']['monitor_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Monitor Information 
            </div>
                
                 <div class="modal-body">
                
                 <label> Property No : <?php echo $row['Monitor']['mopropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Monitor']['modescription'];?> </label> <br/>
                  <label> Status : <?php $mostatus = $row['Monitor']['mostatus'];
                        if ($mostatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $motype = $row['Monitor']['motype'];
                        if ($motype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability : <?php $moavailability = $row['Monitor']['moavailability'];
                        if ($moavailability == 1){?> Used
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
</div>
<?php } ?>

<!-- end Monitor VIEW-->



<!--Video card VIEW-->
<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewvc<?php echo $row['Inventory']['videocard_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Video Card Information 
            </div>
                
                 <div class="modal-body">
                
                 <label> Property No : <?php echo $row['Videocard']['vcpropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Videocard']['vcdescription'];?> </label> <br/>
                  <label> Status : <?php $vcstatus = $row['Videocard']['vcstatus'];
                        if ($vcstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $vctype = $row['Videocard']['vctype'];
                        if ($vctype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $vcavailability = $row['Videocard']['vcavailability'];
                        if ($vcavailability == 1){?> Used
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
</div>
<?php } ?>

<!-- end Video Card VIEW-->




<!-- This modal for View Mouse -->
<?php foreach($inventorys  as $row){ 
    ?>

<div class="modal fade" id="viewms<?php echo $row['Inventory']['mouse_id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Mouse Information 
            </div>
                <div class="modal-body">
                
                  <label> Property No : <?php echo $row['Mouse']['mspropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Mouse']['msdescription'];?> </label> <br/>
                  <label> Status : <?php $msstatus = $row['Mouse']['msstatus'];
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
<!--->

<!--KEYBOARD VIEW-->

<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewkb<?php echo $row['Inventory']['keyboard_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Keyboard Information 
            </div>
                <div class="modal-body">
                  <label> Property No : <?php echo $row['Keyboard']['kbpropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Keyboard']['kbdescription'];?> </label> <br/>
                  <label> Status : <?php $kbstatus = $row['Keyboard']['kbstatus'];
                        if ($kbstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $kbtype = $row['Keyboard']['kbtype'];
                        if ($kbtype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $kbavailability = $row['Keyboard']['kbavailability'];
                        if ($kbavailability == 1){?> Used
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
<!--end Keyboard VIEW-->

<!--HEADSET VIEW-->

<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewhs<?php echo $row['Inventory']['headset_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Headset Information 
            </div>
                <div class="modal-body">
                  <label>Property No : <?php echo $row['Headset']['hspropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Headset']['hsdescription'];?> </label> <br/>
                  <label> Status : <?php $hsstatus = $row['Headset']['hsstatus'];
                        if ($hsstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $hstype = $row['Headset']['hstype'];
                        if ($hstype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $hsavailability = $row['Headset']['hsavailability'];
                        if ($hsavailability == 1){?> Used
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
<!--end HEADSET VIEW-->
<!--SPEAKERS VIEW-->

<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewhs<?php echo $row['Inventory']['headset_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Headset Information 
            </div>
                <div class="modal-body">
                  <label> Property No : <?php echo $row['Headset']['hspropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Headset']['hsdescription'];?> </label> <br/>
                  <label> Status : <?php $hsstatus = $row['Headset']['hsstatus'];
                        if ($hsstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $hstype = $row['Headset']['hstype'];
                        if ($hstype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $hsavailability = $row['Headset']['hsavailability'];
                        if ($hsavailability == 1){?> Used
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
<!--end HEADSET VIEW-->

<!--SPEAKERS VIEW-->

<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="viewsu<?php echo $row['Inventory']['headset_id']?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <i class="glyphicon glyphicon-pencil"></i>
                Headset Information 
            </div>
                <div class="modal-body">
                  <label> Property No : <?php echo $row['Headset']['hspropertyno'];?> </label> <br/>
                  <label>Description : <?php echo $row['Headset']['hsdescription'];?> </label> <br/>
                  <label> Status : <?php $hsstatus = $row['Headset']['hsstatus'];
                        if ($hsstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $hstype = $row['Headset']['hstype'];
                        if ($hstype == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Availability :      <?php $hsavailability = $row['Headset']['hsavailability'];
                        if ($hsavailability == 1){?> Used
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
<!--end HEADSET VIEW-->



<!--ADD Inventories-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add PC
            </div>


        <form action = "addpc" method ="post">

            <div  class="modal-body">
                <div class="form-group">
                    <label for="employee_id"> Employee No.</label>
                    <input type="text" name="employee_id" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="systemunit_id">System Unit #</label>
                    <input type="text" name="systemunit_id" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="monitor_id">Monitor #</label>
                    <input type="text" name="monitor_id" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="videocard_id">Video Card #</label>
                    <input type="text" name="videocard_id" id="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="mouse_id">Mouse #</label>
                    <input type="text" name="mouse_id" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="keyboard_id">Keyboard #</label>
                    <input type="text" name="keyboard_id" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="headset_id">Headset #</label>
                    <input type="text" name="headset_id" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="speaker_id">Speakers #</label>
                    <input type="text" name="speaker_id" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="ups_id">UPS #</label>
                    <input type="text" name="ups_id" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="os_id">Operating System</label>
                    <input type="text" name="os_id" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="pcosserialno">OS SN #</label>
                    <input type="text" name="pcosserialno" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pcadditionalinfo">Additional Info.</label>
                    <input type="text" name="pcadditionalinfo" id="" class="form-control">
                </div>




                  <div class="form-group">
                    <label for="status">Status</label>
                     <select name="pcstatus" id="pcstatus" class="form-control">
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option>          
                      </select>
               
                </div>

                 <div class="form-group">
                    <label for="status">Type</label>
                     <select name="pctype" id="pctype" class="form-control">
                        <option value="1"> Fast</option>
                        <option  value="2"> Slow</option>          
                      </select>
               
                </div>
            

                  <div class="form-group">
                    <label for="available">Availability</label>

                      <select name="pcavailability" id="pcavailability" class="form-control">
                        <option value="1"> Used</option>
                        <option  value="2"> Available</option>          
                        </select>
               
                </div>

                 <div class="form-group">
                    <label for="pcreceivedate">Additional Info.</label>
                    <input type="date" name="pcreceivedate" id="" class="form-control">
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





   






<!-- EDIT INVENTORY DETAILS -->
<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Inventory']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>

        <form action = "editpc" method ="post">

                <div class="modal-body">
                    <input  name="id"  readonly value="<?php echo  $row['Inventory']['id'];?>"/>
                   
              
                <div class="form-group">
                    <label for="os_id">Operating System</label>
                    <input type="text" name="os_id" id="" value="<?php echo $row['Inventory']['os_id']; ?>"   class="form-control">
                </div>


                <div class="form-group">
                    <label for="pcosserialno">OS SN #</label>
                    <input type="text" name="pcosserialno" id="" value="<?php echo $row['Inventory']['pcosserialno']; ?>"    class="form-control">
                </div>

                <div class="form-group">
                    <label for="pcadditionalinfo">Additional Info.</label>
                    <input type="text" name="pcadditionalinfo" id=""  value="<?php echo $row['Inventory']['pcadditionalinfo']; ?>"  class="form-control">
                </div>



                     
                    
                    <div class="form-group">
                        <label for="pcstatus">Status</label>
                        <select name="pcstatus" id="pcstatus" class="form-control">
                        <?php $pcstatus = $row['inventory']['pcstatus'];
                        if ($pcstatus == 1){?>

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
                        <label for="pctype">Type</label>
                        <select name="pctype" id="pctype" class="form-control">
                        <?php $pctype = $row['inventory']['pctype'];
                        if ($pctype == 1){?>

                        <option value="1"> Fast</option>
                        <option  value="2"> Slow</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Slow</option> 
                        <option value="1"> Fast</option>
                     
                            <?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="pcavailability">Availability</label>
                        <select name="pcavailability" id="pcavailability" class="form-control">
                        <?php $pcavailability = $row['Inventory']['pcavailability'];
                        if ($pcavailability == 1){?>

                        <option value="1"> Used</option>
                        <option  value="2"> Available</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Available</option> 
                        <option  value="1"> Used</option> 


                     
                            <?php 
                        }


                        ?>
                        
                        </select>




                    </div>

                   <div class="form-group">
                    <label for="pcreceivedate">Receive Date</label>
                    <input type="text" name="pcreceivedate" id=""  value="<?php echo $row['Inventory']['pcreceivedate']; ?>"  class="form-control">
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
<?php foreach($inventorys  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Inventory']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="deletepc" method="post">
                <div class="modal-body">
                    <input type="hidden"  name="id" value="<?php echo  $row['Inventory']['id'];?>"/>
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
<?php foreach($inventorys  as $row){ 
    ?>

<div class="modal fade" id="view<?php echo $row['Inventory']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                PC Complete Information 
            </div>
                <div class="modal-body">
                
                <label> Employee Id : <?php echo $row['Inventory']['employee_id'];?> </label> <br/>
                <label> System unit #: <?php echo $row['Inventory']['systemunit_id'];?> </label> <br/>
                <label> Monitor # : <?php echo $row['Inventory']['monitor_id'];?> </label> <br/>
                <label> Videocard No : <?php echo $row['Inventory']['videocard_id'];?> </label> <br/>
                <label> Mouse No : <?php echo $row['Inventory']['mouse_id'];?> </label> <br/>
                <label> Keyboard No : <?php echo $row['Inventory']['keyboard_id'];?> </label> <br/>
                <label> Headset No : <?php echo $row['Inventory']['headset_id'];?> </label> <br/>
                <label> Speakers No : <?php echo $row['Inventory']['speaker_id'];?> </label> <br/> 
                <label> UPS No : <?php echo $row['Inventory']['ups_id'];?> </label> <br/>
                <label> Operating System : <?php echo $row['Inventory']['os_id'];?> </label> <br/>
                <label> OS Serial No.: <?php echo $row['Inventory']['pcosserialno'];?> </label> <br/>
                <label> Additional Info: <?php echo $row['Inventory']['pcadditionalinfo'];?> </label> <br/>

                  <label> Status : <?php $pcstatus = $row['Inventory']['pcstatus'];
                        if ($pcstatus == 1){?> Working
                        <?php }else{ ?> Defective
                            <?php   }   ?>
                  </label> <br/>
                  <label> Type : <?php $pctype = $row['Inventory']['pctype'];
                        if ($pctype == 1){?> Fast
                        <?php }else{ ?> Slow
                            <?php   }   ?>
                  </label> <br/>
                 
                  <label> Availability :  <?php $pcavailability = $row['Inventory']['pcavailability'];
                        if ($pcavailability == 1){?> Used
                        <?php }else{ ?> Available
                            <?php   }   ?>
                  </label> <br/>
                <label> Receive Date: <?php echo $row['Inventory']['pcreceivedate'];?> </label> <br/>
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


<!-- DELETE SCRIPT-->

<script type="text/javascript">
  $(document).ready(function(){
    $('.delete').click(function(){
     var id = $(this).attr("id");
       bootbox.confirm("Are you sure you want to delete this data?", function(result) {
          if(result == true){
           $.ajax({                   
                  url: 'deletepc',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: id
                },
                  success: function () {
                  
                   bootbox.alert("Record successfully deleted.");
                  }
                 });
                  $('.remove'+id).hide('fade');
          }
          

        }); 


      return false;
            
    });

  });

</script>

<!-- EDIT SCRIPT -->

  <script>
     $(document).ready(function(){
      $('#submit').click(function(){
       var search = $('#search').val();
       
       if (search != '') {

                $.ajax({                   
                  url: 'searchInventory',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: search
                },
                  success: function (clients) {
                   $('#inventory).html(clients);
                  }
                 });
              $('.mytable').hide();
              return false;
       } else {
        return false;
       }
              
              
      });

      }
     );

    </script>