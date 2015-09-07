
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('properties', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min'));
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
                 <ul class="nav navbar-nav">
              <!--  <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>-->

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>main/index">PC <span style="font-size:16px;" class="
                pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>

                  <li  class="active"><a href="<?php echo $this->webroot;?>propertys/index">Properties <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span></a></li>


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
        <li class="active"><a href="#">Property Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Property</a></li>
       
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
                    <div class="panel-heading">Property Table</div>
                    <div class="panel-body"> 

                    <?php echo $this->Session->flash('error'); ?>
                    <?php echo $this->Session->flash('good'); ?>
                    <?php echo $this->Session->flash('added'); ?>

<!-- SEARCH RESULT -->
  <div id="prop"> </div>
      

                <div class="mytable table-responsive">
                    <table class=" table table-bordered table-hover" id="property">
                        <tr>
                            <th><?php echo $this->Paginator->sort('Classification'); ?></th>
                            <th><?php echo $this->Paginator->sort('Description'); ?></th>
                            <th><?php echo $this->Paginator->sort('Property No'); ?></th>
                            <th><?php echo $this->Paginator->sort('Status'); ?></th>
                            <th><?php echo $this->Paginator->sort('Type'); ?></th>
                            <th><?php echo $this->Paginator->sort('Availability'); ?></th>
            

                            <th><?php echo __('Actions'); ?></th>
                        </tr>

                             <?php foreach ($propertys as $property):
                                $pclassification =$property['Property']['pclassification'];
                                $pstatus = $property['Property']['pstatus'];
                                $ptype = $property['Property']['ptype'];
                                 $pavailability = $property['Property']['pavailability'];
                             ?>


                       <tr>
                         <td><?php  if ($pclassification == 1){?> Monitor
                            <?php }?> 
                            <?php  if ($pclassification == 2){?> Mouse
                            <?php }?> 
                             <?php  if ($pclassification == 3){?> Keyboard
                            <?php }?> 
                             <?php  if ($pclassification == 4){?> System Unit
                            <?php }?> 
                             <?php  if ($pclassification == 5){?> Videocard
                            <?php }?> 
                             <?php  if ($pclassification == 6){?> Headset
                            <?php }?> 
                             <?php  if ($pclassification == 7){?> Speaker
                            <?php }?> 
                             <?php  if ($pclassification == 8){?> UPS
                          
                            
                            <?php   }   ?>
                          </td>


                        <td><?php echo $property['Property']['pdescription']; ?></td>
                        <td><?php echo $property['Property']['ppropertyno']; ?></td>

                        <td><?php  if ($pstatus == 1){?> Working
                            <?php }else{ ?> Defective
                            <?php   }   ?></td>
                        <td><?php  if ($ptype == 1){?> New
                            <?php }else{ ?> Old
                            <?php   }   ?></td>    
                        <td><?php  if ($pavailability == 1){?> Available
                            <?php }else{ ?> Used
                            <?php   }   ?></td>

                        <td class='text-center'>
                           <a href="javascript:void(0);" data-href="#view<?php echo $property['Property']['id'];?>" property-id="<?php echo $property['Property']['id']; ?>" class="btn btn-success property-view-modal"><i class="glyphicon glyphicon-search"> </i></a>

                           <a href="javascript:void(0);" data-href="#edit<?php echo $property['Property']['id'];?>" property-id="<?php echo $property['Property']['id']; ?>" class="btn btn-primary property-edit-modal"><i class="glyphicon glyphicon-edit"> </i></a>


                           <a href="javascript:void(0);" data-href="#delete<?php echo $property['Property']['id'];?>" property-id="<?php echo $property['Property']['id']; ?>" class="btn btn-danger property-delete-modal"><i class="glyphicon glyphicon-trash"> </i></a> 
                        </td>
                      </tr>
                         <?php endforeach; ?>
                     </table>
                     </div>

      

        
        <!--PAGINATION-->
           <div class="text-center">
                   <?php if ($allPropertys > 10){ ?>
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
    </div>
</div>





       
<!--ADD Gadget-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Property
            </div>

            <form action = "/PCInventory/property/addprop" method ="post">
            <div  class="modal-body">

                  <div class="form-group">
                    <label for="pclassification">Classification</label>
                      <select name="pclassification" id="" class="form-control">
                        <option value="1"> Monitor</option>
                        <option value="2"> Mouse</option>
                        <option value="3"> Keyboard</option>
                        <option value="4"> System Unit</option>
                        <option value="5"> Videocard</option>
                        <option value="6"> Headset</option>
                        <option value="7"> Speakers</option> 
                        <option value="8"> UPS</option>             
                        </select>
               
                </div>

                 <div class="form-group">
                    <label for="pdescription">Description</label>
                    <input type="text" name="pdescription" id="description-input" class="form-control">
                </div>

                 <div class="form-group">
                    <label for="ppropertyno">Property No</label>
                    <input type="text" name="ppropertyno" id="propertyno-input" class="form-control">
                </div>
               
                 <div class="form-group">
                    <label for="pstatus">Status</label>
                      <select name="pstatus" id="" class="form-control">
                        <option value="1"> Working</option>
                        <option value="2"> Defective</option>          
                        </select>
               
                </div>
                    <div class="form-group">
                    <label for="ptype">Type</label>
                      <select name="ptype" id="" class="form-control">
                        <option value="1"> New</option>
                        <option value="2"> Old</option>          
                        </select>
               
                </div>
                  <div class="form-group">
                    <label for="pavailability">Availability</label>
                      <select name="pavailability" id="" class="form-control">
                        <option value="1"> Available</option>
                        <option value="2"> Used</option>          
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


<!-- Modal to Edit Property -->

<div class="modal fade" id="edit-property-object" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="/PCInventory/property/editprop" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="pid"/>

                     <div class="form-group">
                        <label for="pclassification">Classification</label>
                        <select name="pclassification" id="pclass-input" class="form-control">
                        <option> Monitor</option>
                        <option> Mouse</option>
                        <option> Working</option>
                        <option> System Unit</option>
                        <option> Videocard</option>
                        <option> Headset</option>
                        <option> Speakers</option> 
                        <option> UPS</option>     
                        </select>
                    </div>
                    

  

                     <div class="form-group">
                        <label for="pdescription">Description</label>
                        <input type="text" name="pdescription" id="pdesc-input" class="form-control"/>
                    </div>

                     <div class="form-group">
                        <label for="ppropertyno">Property No.</label>
                        <input type="text" name="ppropertyno" id="pprop-input" class="form-control"/>
                    </div>
               
                    
                    <div class="form-group">
                        <label for="pstatus">Status</label>
                        <select name="pstatus" id="pstat" class="form-control">
                        <option>Working</option>
                        <option>Defective</option> 
                        </select>
                    </div>

                        <div class="form-group">
                        <label for="ptype">Type</label>
                        <select name="ptype" id="ptyp" class="form-control">
                        <option>New</option>
                        <option>Old</option> 
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="pavailability">Availability</label>
                        <select name="pavailability" id="pavail" class="form-control">
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




<!-- Modal to Delete Property -->

<div class="modal fade"  id="delete-property-object" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/property/deleteprop" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="deletepid"/>
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



<!-- Modal for View Property -->


<div class="modal fade" id="view-property-object"tabindex="-1" role="dialog">
 <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Property Information 
            </div>
            <div class="modal-body">
                <label> Classification: <span class='p-class'></span> </label> <br/>
                <label> Property No : <span class='p-propno'></span></label> <br/>
                <label> Description : <span class='p-desc'></span> </label> <br/>
                <label> Status : <span class='p-stat'></span> </label> <br/>
                <label> Type : <span class='p-typ'></span></label> <br/>
                <label> Availability : <span class='p-avail'></span></label> <br/>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<!-- PROPERTY DELETE -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.property-delete-modal')
        .off('click')
        .on('click', function(){
            var pId = $.trim($(this).attr('property-id'));

            $.get(
                '<?php echo $this->Html->url("/propertys/viewAjax"); ?>',
                {propertyId : pId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Property;
                     
                           document.getElementById("deletepid").value = pId;
                          
                            $('#delete-property-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- PROPERTY EDIT -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.property-edit-modal')
        .off('click')
        .on('click', function(){
            var pId = $.trim($(this).attr('property-id'));
            $.get(
                '<?php echo $this->Html->url("/propertys/viewAjax"); ?>',
                {propertyId : pId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Property;
                         // alert(document.getElementById("pclassification-input").value = content.pclassification);
                            //var elem = document.getElementById("myID");
                            document.getElementById("pid").value = pId;
                          //  document.getElementById("pclass-input").value = content.pclassification;

                            document.getElementById("pdesc-input").value = content.pdescription;
                            document.getElementById("pprop-input").value = content.ppropertyno;

                             if (content.pclassification == 1){
                            document.getElementById("pclass-input").value = "Monitor";
                            } 
                             if (content.pclassification == 2){
                            document.getElementById("pclass-input").value = "Mouse";
                            }
                            if (content.pclassification == 3){
                            document.getElementById("pclass-input").value = "Keyboard";
                            } 
                             if (content.pclassification == 4){
                            document.getElementById("pclass-input").value = "System Unit";
                            }
                            if (content.pclassification == 5){
                            document.getElementById("pclass-input").value = "Videocard";
                            } 
                             if (content.pclassification == 6){
                            document.getElementById("pclass-input").value = "Headset";
                            }
                            if (content.pclassification == 7){
                            document.getElementById("pclass-input").value = "Speakers";
                            } 
                             if (content.pclassification == 8){
                            document.getElementById("pclass-input").value = "Speakers";
                            }

                            if (content.pstatus == 1){
                            document.getElementById("pstat").value = "Working";
                            } else {
                            document.getElementById("pstat").value = "Defective";
                            }

                            if (content.ptype == 1){
                            document.getElementById("ptyp").value = "New";
                            } else {
                            document.getElementById("ptyp").value = "Old";
                            }

                        
                            if (content.pavailability == 1) {
                            document.getElementById("pavail").value = "Available";
                            } else {
                            document.getElementById("pavail").value = "Used";
                            }


                            $('#edit-property-object').modal('show');

                        } else {

                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- Property VIEW -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.property-view-modal')
        .off('click')
        .on('click', function(){
            var pId = $.trim($(this).attr('property-id'));
            $.get(
                '<?php echo $this->Html->url("/propertys/viewAjax"); ?>',
                {propertyId : pId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Property;

                            
                            $('#view-property-object').find('.p-class').html(content.pclassification);
                            $('#view-property-object').find('.p-desc').html(content.pdescription);
                            $('#view-property-object').find('.p-propno').html(content.ppropertyno);
                            
                            if (content.pstatus == 1) {
                                $('#view-property-object').find('.p-stat').html("Working");
                            } else {
                                $('#view-property-object').find('.p-stat').html("Defective");
                            }


                            if (content.ptype == 1) {
                                $('#view-property-object').find('.p-typ').html("New");
                            } else {
                                $('#view-property-object').find('.p-typ').html("Old");
                            }


                            if (content.pavailability == 1) {
                                $('#view-property-object').find('.p-avail').html("New");
                            } else {
                                $('#view-property-object').find('.p-avail').html("Old");
                            }




                            $('#view-property-object').modal('show');
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
              url: 'searchProperty',
              cache: false,
              type: 'POST',
              dataType: 'HTML',
           data: {
             input: search
            },
              success: function (clients) {
               
               $('#prop').html(clients);
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
