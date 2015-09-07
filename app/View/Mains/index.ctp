
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
              <!--  <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>-->

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li  class="active"><a href="<?php echo $this->webroot;?>main/index">PC <span style="font-size:16px;" class="
                pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>

                  <li ><a href="<?php echo $this->webroot;?>propertys/index">Properties <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span></a></li>


                       <li ><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li> 
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
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add PC set</a></li>
       
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
        <!--   <th><?php echo $this->Paginator->sort('Employee ID'); ?></th>
         <th><?php echo $this->Paginator->sort('Property ID'); ?></th>-->
        <th><?php echo $this->Paginator->sort('User'); ?></th>
        <th colspan="2"><?php echo $this->Paginator->sort('Monitor'); ?></th>
        <th><?php echo $this->Paginator->sort('Mouse'); ?></th> 
        <th><?php echo $this->Paginator->sort('Keyboard'); ?></th>
        <th><?php echo $this->Paginator->sort('System Unit'); ?></th>
        <th><?php echo $this->Paginator->sort('Videocard'); ?></th>
        <th><?php echo $this->Paginator->sort('Headset'); ?></th>
         <th><?php echo $this->Paginator->sort('Speaker'); ?></th>
        <th><?php echo $this->Paginator->sort('UPS'); ?></th>
        <th><?php echo $this->Paginator->sort('OS'); ?></th>
        <th><?php echo $this->Paginator->sort('OS SN#'); ?></th>
        <th><?php echo $this->Paginator->sort('Additional Info '); ?></th>  
      <!--  <th><?php echo __('Actions'); ?></th> -->

    </tr>

    <?php foreach ($mains as $main):



    ?>

<tr>
        <!--  <td><?php $employee = $main['Main']['employee_id'];  echo $employee; ?> </td>            
       <td><?php $property = $main['Main']['property_id']; echo $property; ?> </td>  -->
        <td><?php echo $main['Employee']['empfirstname']; ?> </td>   
        <td><?php $monitor = $main['Main']['monitor_propertyid'];  echo $main['Property']['0']['ppropertyno']; ?> </td> 
        <td><?php $monitor = $main['Main']['monitor_propertyid'];  echo $main['Property']['0']['ppropertyno']; ?> </td> 
        <td><?php $mouse = $main['Main']['mouse_propertyid'];  echo $main['Property']['1']['ppropertyno']; ?> </td>  
        <td><?php $keyboard = $main['Main']['keyboard_propertyid'];  echo $main['Property']['2']['ppropertyno']; ?> </td> 
        <td><?php $systemunit = $main['Main']['systemunit_propertyid'];  echo $main['Property']['3']['ppropertyno']; ?> </td> 
        <td><?php $videocard = $main['Main']['videocard_propertyid'];  echo $main['Property']['4']['ppropertyno']; ?> </td> 
        <td><?php $headset = $main['Main']['headset_propertyid'];  echo $main['Property']['5']['ppropertyno']; ?> </td> 
        <td><?php $speaker = $main['Main']['speaker_propertyid'];  $speakers = $main['Property']['6']['ppropertyno']; if ($speakers==''){ echo "None"; }?> </td> 
        <td><?php $up = $main['Main']['up_propertyid'];  echo $main['Property']['7']['ppropertyno']; ?> </td> 
        <td><?php echo $main['Main']['os']; ?></td>
        <td><?php echo $main['Main']['os_serial']; ?></td>
        <td><?php echo $main['Main']['additionalinfo']; ?></td>


        <!--<td>
       <i class="glyphicon glyphicon-search"> </i>View

        <i class="glyphicon glyphicon-edit"> </i>Edit

        <i class="glyphicon glyphicon-trash"> </i>Delete</td>-->
    </tr>
    <?php endforeach; ?>
</table>



<!--PAGINATION-->
            <div class="text-center">
             <?php if ($allMains > 10){ ?>
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
    <div id="main">
    </div> 

  </div>
 </div>
</div>
</div>
<!--MODAL FORMS


<!-- ADD EMPLOYEE MODAL FORM-->

<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add PC Set
            </div>
            <?php echo $this->Form->create('Main', array('controller' => 'Main', 'action' => 'add', 'type' => 'file'));?>
            <div  class="modal-body">
                <div class="form-group">
                    <label for="mouse_propertyid">Mouse</label>
                    <input  type="text" name="mouse_propertyid"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="monitor_propertyid">Monitor</label>
                    <input  type="text" name="monitor_propertyid"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="keyboard_propertyid">Keyboard</label>
                    <input  type="text" name="keyboard_propertyid"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="systemunit_propertyid">System Unit</label>
                    <input  type="text" name="systemunit_propertyid"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="videocard_propertyid">Video card</label>
                    <input  type="text" name="videocard_propertyid"  class="form-control" >
                </div>
                <div class="form-group">
                    <label for="speaker_propertyid">Speaker</label>
                    <input  type="text" name="speaker_propertyid"  class="form-control" >
                </div>
                 <div class="form-group">
                    <label for="headset_propertyid">Headset</label>
                    <input  type="text" name="headset_propertyid"  class="form-control" >
                </div>
                 <div class="form-group">
                    <label for="up_propertyid">Ups</label>
                    <input  type="text" name="up_propertyid"  class="form-control" >
                </div>
                 <div class="form-group">
                    <label for="os">OS</label>
                    <input  type="text" name="os"  class="form-control" >
                </div>
                 <div class="form-group">
                    <label for="os_serial">OS SN#</label>
                    <input  type="text" name="os_serial"  class="form-control" >
                </div>
                 <div class="form-group">
                    <label for="additionalinfo">Additional Info</label>
                    <input  type="text" name="additionalinfo"  class="form-control" >
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