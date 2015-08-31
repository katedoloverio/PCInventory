
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
   <div class>
   
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
        <li class="active"><a href="#">Keyboard Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Keyboard</a></li>
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
        
        <div class="panel-heading" >Keyboard Table </div>
        <div class="panel-body" style="background-color:navyblue" > <div>


<!--DISPLAY Mouse DETAILS IN TABLE-->
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('error'); ?>
<?php echo $this->Session->flash('keyboard_error'); ?>
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

    <?php foreach ($keyboards as $keyboard):
   $kbstatus =  $keyboard['Keyboard']['kbstatus'];
   $kbavailability =  $keyboard['Keyboard']['kbavailability'];
   $kbtype =  $keyboard['Keyboard']['kbtype'];
    ?>

    <tr>
    
        <td><?php echo $keyboard['Keyboard']['kbpropertyno']; ?></td>
        <td><?php echo $keyboard['Keyboard']['kbdescription']; ?></td>
        <td><?php if($kbstatus==1) { ?> Working
              <?php } else{ ?>Defective
                <?php  }   ?>
        </td>
        <td><?php if($kbtype==1) { ?> New
              <?php } else{ ?>Old
                <?php  }   ?>
        </td>
                <td><?php if($kbavailability ==1){?> Used
           <?php }else{?> Available
           <?php  }?>
         </td>
   
        <td>
        <a href="javascript:void(0);" data-href="#view<?php echo $keyboard['Keyboard']['id'];?>" keyboard-id="<?php echo $keyboard['Keyboard']['id']; ?>" class="btn btn-success keyboard-view-modal"><i class="glyphicon glyphicon-search"> </i>View</a>

        <a href="javascript:void(0);" data-href="#edit<?php echo $keyboard['Keyboard']['id'];?>" keyboard-id="<?php echo $keyboard['Keyboard']['id']; ?>" class="btn btn-primary keyboard-edit-modal"><i class="glyphicon glyphicon-edit"> </i>Edit</a>


        <a href="javascript:void(0);" data-href="#delete<?php echo $keyboard['Keyboard']['id'];?>" keyboard-id="<?php echo $keyboard['Keyboard']['id']; ?>" class="btn btn-danger keyboard-delete-modal"><i class="glyphicon glyphicon-trash"> </i>Delete</a>

       </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

<!--PAGINATION-->
 <div class="text-center">
   
   <?php if ($allKeyboards > 10){ ?>
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
    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, Showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
        </div>
        </div>
  </div>
    
</div>
</div>

<!--MODAL FORMS-->

 
<!--ADD KEYBOARD-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Keyboard
            </div>


        <form action = "/PCInventory/keyboard/addkb" method ="post">

            <div  class="modal-body">
                <div class="form-group">
                    <label for="kbpropertyno">Property No.</label>
                    <input type="text" name="kbpropertyno" id="mypropertyno-input"   class="form-control">
                </div>
                <div class="form-group">
                    <label for="kbdescription">Description</label>
                    <input type="text" name="kbdescription"  id="mydescription-input"    class="form-control">
                </div>
                  <div class="form-group">
                    <label for="available">Status</label>
                     <select name="kbstatus" id="kbstatus" class="form-control">
                        <option value="1" > Working</option>
                        <option  value="2"> Defective</option>          
                      </select>
               
                </div>
                <div class="form-group">
                    <label for="available">Type</label>
                     <select name="kbtype" id="mstype" class="form-control">
                        <option value="1"> New </option>
                        <option  value="2"> Old</option>          
                      </select>
               
                </div>

                  <div class="form-group">
                    <label for="available">Availability</label>

                      <select name="kbavailability" id="kbavailability" class="form-control">
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






<!-- EDIT KEYBOARD DETAILS -->

<div class="modal fade" id="edit-keyboard-object" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
        <form action = "/PCInventory/keyboard/editkb" method ="post">

                <div class="modal-body">
                   <input type="hidden" name="id" id="kid" />
                    </div>
                    <div class="form-group">
                        <label for="kbpropertyno">Property No.</label>
                        <input type="text" name="kbpropertyno" id="mypropertyno_edit-input"  class="form-control" />

                     <div class="form-group">
                        <label for="kbdescription">Description</label>
                        <input type="text" name="kbdescription" id="mydescription_edit-input" class="form-control"/>
                         </div>
                     
                    
                         <div class="form-group">
                        <label for="kbstatus">Status</label>
                        <select name="kbstatus" id="kstatus" class="form-control">
                        <?php 
                        if ($kbstatus == 1){?>

                        <option value="1" selected="selected"> Working</option>
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
                        <label for="kbtype" >Type</label>
                        <select name="kbtype" id="ktype" class="form-control">
                        <?php
                        if ($kbtype == 1){?>

                        <option value="1" selected="selected"> New</option>
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
                        <label for="kbavailability">Availability</label>
                        <select name="kbavailability" id="kavail" class="form-control">
                        <?php 
                        if ($kbavailability == 1){?>

                        <option value="1" selected="selected"> Used</option>
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



<!-- This modal for Delete Keyboard -->


<div class="modal fade"  id="delete-keyboard-object" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/keyboard/deletekb" method="post">
                <div class="modal-body">
                   <input type="hidden" name="id" id="deletekid" />
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





<!-- view headset modal -->
<div class="modal fade" id="view-keyboard-object" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Keyboard Information 
            </div>
            <div class="modal-body">
                <label> Property No : <span class='k-pno'></span> </label> <br/>
                <label> Description : <span class='k-desc'></span> </label> <br/>
                <label> Status : <span class='k-status'></span></label> <br/>
                <label> Type : <span class='k-type'></span></label> <br/>
                <label> Availability : <span class='k-avail'></span></label> <br/>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- /. -->

<!-- KEYBOARD DELETE -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.keyboard-delete-modal')
        .off('click')
        .on('click', function(){
            var kId = $.trim($(this).attr('keyboard-id'));
            $.get(
                '<?php echo $this->Html->url("/keyboards/viewAjax"); ?>',
                {keyboardId : kId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Keyboard;
                      
                           document.getElementById("deletekid").value = kId;
                          
                            $('#delete-keyboard-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>

<!-- KEYBOARD EDIT -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.keyboard-edit-modal')
        .off('click')
        .on('click', function(){
            var kId = $.trim($(this).attr('keyboard-id'));
            $.get(
                '<?php echo $this->Html->url("/keyboards/viewAjax"); ?>',
                {keyboardId : kId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Keyboard;
                            //var elem = document.getElementById("myID");
                            document.getElementById("kid").value = kId;
                            document.getElementById("mypropertyno_edit-input").value = content.kbpropertyno;
                            document.getElementById("mydescription_edit-input").value = content.kbdescription;
                           


                            if (content.kbstatus == 1) {
                               document.getElementById("kstatus").value = "Working";
                             
                            } else {
                                document.getElementById("kstatus").value = "Defective";
                            }

                            if (content.kbtype == 1) {
                                document.getElementById("ktype").value = "New";
                            } else {
                                  document.getElementById("ktype").value = "Old";
                            }

                            if (content.kbavailability == 1) {
                                 document.getElementById("kavail").value = "Available";
                            } else {
                                  document.getElementById("kavail").value = "Used";
                            }

                            $('#edit-keyboard-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>

<!-- KEYBOARD VIEW -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.keyboard-view-modal')
        .off('click')
        .on('click', function(){
            var kId = $.trim($(this).attr('keyboard-id'));
            $.get(
                '<?php echo $this->Html->url("/keyboards/viewAjax"); ?>',
                {keyboardId : kId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Keyboard;
                            $('#view-keyboard-object').find('.k-pno').html(content.kbpropertyno);
                            $('#view-keyboard-object').find('.k-desc').html(content.kbdescription);

                            if (content.kbstatus == 1) {
                                $('#view-keyboard-object').find('.k-status').html("Working");
                            } else {
                                $('#view-keyboard-object').find('.k-status').html("Defective");
                            }

                            if (content.kbtype == 1) {
                                $('#view-keyboard-object').find('.k-type').html("New");
                            } else {
                                $('#view-keyboard-object').find('.k-type').html("Old");
                            }

                            if (content.kbavailability == 1) {
                                $('#view-keyboard-object').find('.k-avail').html("Used");
                            } else {
                                $('#view-keyboard-object').find('.k-avail').html("Available");
                            }

                            $('#view-keyboard-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>
