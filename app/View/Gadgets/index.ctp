
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('gadget', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min'));
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
              <!--  <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>-->

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>main/index">PC <span style="font-size:16px;" class="
                pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>

                  <li ><a href="<?php echo $this->webroot;?>propertys/index">Properties <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span></a></li>


                       <li  class="active"><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li> 
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
        <li class="active"><a href="#">Gadget Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Gadget</a></li>
       
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
   
      
            <div  class="panel panel-default">
                    <div class="panel-heading">Gadget Table</div>
                    <div class="panel-body"> 

                    <?php echo $this->Session->flash('error'); ?>
                    <?php echo $this->Session->flash('good'); ?>
                    <?php echo $this->Session->flash('added'); ?>

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

                        <td class='text-center'>
                           <a href="javascript:void(0);" data-href="#view<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-success gadget-view-modal"><i class="glyphicon glyphicon-search" title="View"> </i></a>

                           <a href="javascript:void(0);" data-href="#edit<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-primary gadget-edit-modal"><i class="glyphicon glyphicon-edit" title="Edit"> </i></a>


                           <a href="javascript:void(0);" data-href="#delete<?php echo $gadget['Gadget']['id'];?>" gadget-id="<?php echo $gadget['Gadget']['id']; ?>" class="btn btn-danger gadget-delete-modal"><i class="glyphicon glyphicon-trash"  title="Delete"> </i></a> 
                        </td>
                      </tr>
                         <?php endforeach; ?>
                     </table>
                     </div>

        <div id="gad"> </div>

        
        <!--PAGINATION-->
           <div class="text-center">
                   <?php if ($allGadgets > 5){ ?>
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
    
<!-- SEARCH RESULT -->
  <div id="gad"> </div>
      
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

            <form action = "/PCInventory/gadget/addgdgt" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="ggpropertyno">Property Number</label>
                    <input type="text" name="ggpropertyno" id="gdgtpropertyno-input" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ggdescription">Description</label>
                    <input type="text" name="ggdescription" id="gdgtdescription-input" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="ggserial">Serial No.</label>
                    <input type="text" name="ggserial" id="gdgtserial-input" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="ggstatus">Status</label>
                      <select name="ggstatus" id="" class="form-control">
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option>          
                        </select>
               
                </div>
                  <div class="form-group">
                    <label for="ggavailability">Availability</label>
                      <select name="ggavailability" id="" class="form-control">
                        <option value="1"> Available</option>
                        <option  value="2"> Used</option>          
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


<!-- Modal to Edit Gadgets -->

<div class="modal fade" id="edit-gadget-object" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="/PCInventory/gadget/editgdgt" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="gid"/>
                    <div class="form-group">
                        <label for="ggpropertyno">Property No.</label>
                        <input type="text" name="ggpropertyno"  id="gdgtpropertyno_edit-input" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggdescription">Description</label>
                        <input type="text" name="ggdescription" id="gdgtdescription_edit-input" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggserial">Serial No.</label>
                        <input type="text" name="ggserial" id="gdgtserial_edit-input" class="form-control"/>
                    </div>
                   
                    
                    <div class="form-group">
                        <label for="ggstatus">Status</label>
                        <select name="ggstatus" id="gstatus" class="form-control">
                        <option> Working</option>
                        <option > Defective</option> 
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="ggavailability">Availability</label>
                        <select name="ggavailability" id="gavailability" class="form-control">
                        <option>Available</option>
                        <option>Used</option> 
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




<!-- Modal to Delete Gadgets -->

<div class="modal fade"  id="delete-gadget-object" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/gadget/deletegdgt" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="deletegid"/>
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



<!-- Modal for View Gadgets -->


<div class="modal fade" id="view-gadget-object"tabindex="-1" role="dialog">
 <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Gadget Information 
            </div>
            <div class="modal-body">
                <label> Property No : <span class='g-pno'></span> </label> <br/>
                <label> Description : <span class='g-desc'></span> </label> <br/>
                <label> Serial : <span class='g-serial'></span> </label> <br/>
                <label> Status : <span class='g-status'></span></label> <br/>
                <label> Availability : <span class='g-avail'></span></label> <br/>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<!-- GADGET DELETE -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.gadget-delete-modal')
        .off('click')
        .on('click', function(){
            var gId = $.trim($(this).attr('gadget-id'));
            $.get(
                '<?php echo $this->Html->url("/gadgets/viewAjax"); ?>',
                {gadgetId : gId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Gadget;
                      
                           document.getElementById("deletegid").value = gId;
                          
                            $('#delete-gadget-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- GADGET EDIT -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.gadget-edit-modal')
        .off('click')
        .on('click', function(){
            var gId = $.trim($(this).attr('gadget-id'));
            $.get(
                '<?php echo $this->Html->url("/gadgets/viewAjax"); ?>',
                {gadgetId : gId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Gadget;
                          
                            //var elem = document.getElementById("myID");
                            document.getElementById("gid").value = gId;
                            document.getElementById("gdgtpropertyno_edit-input").value = content.ggpropertyno;
                            document.getElementById("gdgtdescription_edit-input").value = content.ggdescription;
                            document.getElementById("gdgtserial_edit-input").value = content.ggserial;
 
                            if (content.ggstatus == 1){
                            document.getElementById("gstatus").value = "Working";
                            } else {
                            document.getElementById("gstatus").value = "Defective";
                            }

                        
                            if (content.ggavailability == 1) {
                            document.getElementById("gavailability").value = "Available";
                            } else {
                            document.getElementById("gavailability").value = "Used";
                            }


                            $('#edit-gadget-object').modal('show');

                        } else {

                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- GADGET VIEW -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.gadget-view-modal')
        .off('click')
        .on('click', function(){
            var gId = $.trim($(this).attr('gadget-id'));
            $.get(
                '<?php echo $this->Html->url("/gadgets/viewAjax"); ?>',
                {gadgetId : gId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Gadget;

                            
                            $('#view-gadget-object').find('.g-pno').html(content.ggpropertyno);
                            $('#view-gadget-object').find('.g-desc').html(content.ggdescription);
                            $('#view-gadget-object').find('.g-serial').html(content.ggserial);

                            if (content.kbstatus == 1) {
                                $('#view-gadget-object').find('.g-status').html("Working");
                            } else {
                                $('#view-gadget-object').find('.g-status').html("Defective");
                            }


                            if (content.kbavailability == 1) {
                                $('#view-gadget-object').find('.g-avail').html("Used");
                            } else {
                                $('#view-gadget-object').find('.g-avail').html("Available");
                            }

                            $('#view-gadget-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>

<!--SEARCH SCRIPT-->

<script>
 $(document).ready(function(){
  $('#submit').click(function(){
   var search = $('#search').val();
   
   if (search != '') {
            $.ajax({                   
              url: 'searchGadss',
              cache: false,
              type: 'POST',
              dataType: 'HTML',
           data: {
             input: search
            },
              success: function (clients) {
               $('#gad').html(clients);
              }
             });
          $('.mytable').hide();
          return false;
   }  else {
    return false;
   }

          
  });

  }
 );
</script>
