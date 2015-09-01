<html>
<head>
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('employee', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min','angular.min'));
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
 <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                                <li ><a href="<?php echo $this->webroot;?>inventory/index">PC <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>
                                <li  class="active" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties <span class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span><span style="font-size:16px;" ></span></a>
                                    <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a href="<?php echo $this->webroot;?>monitor/index">Monitor<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>mouse/index">Mouse<span style="font-size:16px;" ></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>keyboard/index">Keyboard<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>systemunit/index">System Unit<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>videocard/index">Videocard<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>headset/index">Headset<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>speaker/index">Speakers<span style="font-size:16px;"></span></a></li>
                                        <li><a href="<?php echo $this->webroot;?>ups/index">UPS<span style="font-size:16px;"></span></a></li>
                                    </ul>
                                </li>
                                <li ><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li>
                            </ul>
                        </div>
                        <!-- /. -->
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
        <li><a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Employee</a></li>
        </ul>
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
                      <div class="panel-heading" > Employee Table </div>
                          <div class="panel-body">


                      <!--alerts-->
                            <?php echo $this->Session->flash('error'); ?>
                            <?php echo $this->Session->flash('good'); ?>
                            <?php echo $this->Session->flash('added'); ?>

                  
              <!--DISPLAY Employee DETAILS IN TABLE-->
            
                  <div class="mytable table-responsive">
                  <table class="table table-bordered table-hover" id="employee" >
                      <tr> 
                         <th><?php echo $this->Paginator->sort('Edit Photo'); ?></th>
                         <th><?php echo $this->Paginator->sort('Photo'); ?></th>
                         <th><?php echo $this->Paginator->sort('Name'); ?></th>
                         <th><?php echo $this->Paginator->sort('PC Type'); ?></th>
                         <th><?php echo $this->Paginator->sort('Monitor/s'); ?></th>
                         <th><?php echo __('Actions'); ?></th>
                      </tr>

                        <?php foreach ($employees as $employee):
                        $imagedisplay= $employee['Employee']['empphoto']; 
                        ?>


                      <tr>
                      <td><a href="#changephoto<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-default"  title ="View"><i class="glyphicon glyphicon-user" > </i></a></td>
                      <td><img src="<?php echo $this->Html->url('/img/users/'.$imagedisplay); ?>" class="img-circle img-for-own-message"></td>
                      <td><?php echo $employee['Employee']['empfirstname']; ?>&nbsp; <?php echo $employee['Employee']['emplastname']; ?></td>
                           <td><?php $pctype =  $employee['Inventory']['pctype'] ;
                           if($pctype==1) { ?> Fast
                                  <?php } else{ ?>Slow
                                    <?php  }   ?>
                            </td>
                        <td><?php echo $employee['Inventory']['monitor_id']; ?></td>
                         <td class='text-center'>
                          <a href="javascript:void(0);" data-href="#view<?php echo $employee['Employee']['id'];?>" employee-id="<?php echo $employee['Employee']['id']; ?>" class="btn btn-success employee-view-modal"><i class="glyphicon glyphicon-search"> </i>View</a>

                          <a href="javascript:void(0);" data-href="#edit<?php echo $employee['Employee']['id'];?>" employee-id="<?php echo $employee['Employee']['id']; ?>" class="btn btn-primary employee-edit-modal"><i class="glyphicon glyphicon-edit"> </i>Edit</a>


                          <a href="javascript:void(0);" data-href="#delete<?php echo $employee['Employee']['id'];?>" employee-id="<?php echo $employee['Employee']['id']; ?>" class="btn btn-danger employee-delete-modal"><i class="glyphicon glyphicon-trash"> </i>Delete</a> 
                        </td>
                      </tr>
            <?php endforeach; ?>
            </table>
          <div>
                <!--PAGINATION-->
               <div class="text-center">
                   <?php if ($allEmployees > 10){ ?>
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
    
  <!-- Show  Search results-->
    <div id="emp">
    </div> 

</div>

 
<!-- ADD EMPLOYEE MODAL FORM-->

<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Employee
            </div>
            <?php echo $this->Form->create('Employee', array('controller' => 'Employee', 'action' => 'add', 'type' => 'file'));?>
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
                    <div class="input file" ><label for="PageImage"></label></div>
                    <div class="input file"><input type="file" name="data[Employee][empphoto]"  class="form-control" id="EmployeeEmpphoto"/></div>              
                </div>
                <div class="form-group">
                <label for="available">Status</label>
                <select name="empstatus" id="available" class="form-control" id="status-input">
                        <option value="1"> Active</option> 
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

<!--CHANGE PHOTO MODAL FORM-->

    <?php foreach($employees  as $row){ 
    $imagedisplay= $row['Employee']['empphoto']; ?>

    <div class="modal fade" id="changephoto<?php echo $row['Employee']['id'];?>" tabindex="-1" role="dialog">
       <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>Edit 
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


<!--EDIT MODAL EMPLOYEE-->



      <div class="modal fade" id="edit-employee-object" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="glyphicon glyphicon-pencil"></i>Edit 
                </div>

         <form action = "/PCInventory/employee/editemp" method ="post">
                <div class="modal-body">

                   <input type="hidden" name="id" id="eid"/>
                    <div class="form-group">
                        <label for="empfirstname">First Name</label>
                        <input type="text" name="empfirstname" id="fname_edit-input" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="emplastname">Last Name</label>
                        <input type="text" name="emplastname" id="lname_edit-input"  class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="empcompanyid">Company ID</label>
                        <input type="text" name="empcompanyid" id="companyID_edit-input"   class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="empstatus">Status</label>
                        <select name="empstatus" id="e-status" class="form-control">
                        <option>Active</option>
                        <option>Resign</option> 
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

<!-- This modal for Delete Employee -->


<div class="modal fade"  id="delete-employee-object" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/employee/deleteemp" method="post">
                <div class="modal-body">
                   <input type="hidden" name="id" id="deleteeid" />
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
<div class="modal fade" id="view-employee-object" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Employee Information 
            </div>
            <div class="text-center"> 
          <div class="modal-body">
                <label><img id="e-photo" src="/PCInventory/img/users/user.png" class="img-circle img-for-own-message"></label> <br/>
                   <label> First Name : <span class='e-firstname'></span>  </label> <br/>
                   <label> Last Name : <span class='e-lastname'></span>  </label> <br/>
                   <label> Company ID : <span class='e-companyid'></span>  </label> <br/>
                  <label> Status : <span class='e-status'></span></label> <br/>    
                </div>
          </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- /. -->


<!-- /. -->

<!-- /. -->

<!-- EMPLOYEE DELETE -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.employee-delete-modal')
        .off('click')
        .on('click', function(){
            var eId = $.trim($(this).attr('employee-id'));
            $.get(
                '<?php echo $this->Html->url("/employees/viewAjax"); ?>',
                {employeeId : eId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Employee;
                      
                           document.getElementById("deleteeid").value = eId;
                          
                            $('#delete-employee-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- EMPLOYEE EDIT -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.employee-edit-modal')
        .off('click')
        .on('click', function(){
            var eId = $.trim($(this).attr('employee-id'));
            $.get(
                '<?php echo $this->Html->url("/employees/viewAjax"); ?>',
                {employeeId : eId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Employee;

                            //var elem = document.getElementById("myID");
                            document.getElementById("eid").value = eId;
                            document.getElementById("fname_edit-input").value = content.empfirstname;
                            document.getElementById("lname_edit-input").value = content.emplastname;
                            document.getElementById("companyID_edit-input").value =content.empcompanyid;
                         
                            if (content.empstatus == 1){
                            document.getElementById("e-status").value = "Active";
                            } else {
                            document.getElementById("e-status").value = "Resign";
                            }

                           
                            $('#edit-employee-object').modal('show');

                        } else {

                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>


<!-- EMPLOYEE VIEW -->
<script>
    "use strict"
    $(document).ready(function(){
        $('.employee-view-modal')
        .off('click')
        .on('click', function(){
            var eId = $.trim($(this).attr('employee-id'));
            $.get(
                '<?php echo $this->Html->url("/employees/viewAjax"); ?>',
                {employeeId : eId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Employee;
                            $('#view-employee-object').find('.e-firstname').html(content.empfirstname);
                            $('#view-employee-object').find('.e-lastname').html(content.emplastname);
                            $('#view-employee-object').find('.e-companyid').html(content.empcompanyid);
                            document.getElementById("e-photo").src ="/PCInventory/img/users/"+content.empphoto;
 
                            if (content.empstatus == 1) {
                                $('#view-employee-object').find('.e-status').html("Active");
                            } else {
                                $('#view-employee-object').find('.e-status').html("Resign");
                            }

                           

                            $('#view-employee-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>



<!-- SEARCH SCRIPT -->

  <script>
     $(document).ready(function(){
      $('#submit').click(function(){
       var search = $('#search').val();
       
       if (search != '') {

                $.ajax({                   
                  url: 'searchEmployee',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: search
                },
                  success: function (clients) {
                   $('#emp').html(clients);
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