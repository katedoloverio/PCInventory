<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('property', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min'));
?>

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
        <li class="active"><a href="#">Monitor Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Mointor</a></li>
       
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
   
      
 
<div  class="panel panel-info" >


        <div class="panel-heading" >
                Monitor Table
        </div>
        <div class="panel-body" style="background-color:navyblue" >

<div>


<!--DISPLAY MONITOR DETAILS IN TABLE-->
<?php echo $this->Session->flash('monitor'); ?>
<?php echo $this->Session->flash('monitor_error'); ?>
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('added'); ?>




<div class="mytable table-responsive">

<table class="table table-bordered table-hover" >
    <tr>
       <th><?php echo $this->Paginator->sort('Property Number'); ?></th>
        <th><?php echo $this->Paginator->sort('Description'); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Type'); ?></th>
       <th><?php echo $this->Paginator->sort('Availability'); ?></th>
      

        <th><?php echo __('Actions'); ?></th>
    </tr>

    <?php foreach ($monitors as $monitor):
        $mostatus = $monitor['Monitor']['mostatus'];
        $moavailability = $monitor['Monitor']['moavailability'];
        $motype = $monitor['Monitor']['motype'];
    ?>

    <tr>
    
        <td> <?php echo $monitor['Monitor']['mopropertyno']; ?></td>
        <td><?php echo $monitor['Monitor']['modescription']; ?></td>
        <td><?php  if ($mostatus == 1){?> Working
            <?php }else{ ?> Defective
            <?php   }   ?></td>
         <td><?php  if ($motype == 1){?> New
            <?php }else{ ?> Old
            <?php   }   ?></td>
        <td>  <?php 
                        if ($moavailability == 1){?> Used
                        <?php }else{ ?> Available
                            <?php   }   ?></td>

        <td>
        <a href="#view<?php echo $monitor['Monitor']['id'];?>" data-toggle="modal" class="btn btn-success" title="View"><i class="glyphicon glyphicon-search"> </i></a>

        <a href="#edit<?php echo $monitor['Monitor']['id'];?>" data-toggle="modal" class="btn btn-primary" title="Edit"> <i class="glyphicon glyphicon-edit"> </i></a>
 
        <button id="<?php echo $monitor['Monitor']['id'];?>" data-toggle="modal" class="btn btn-danger delete" title ="Delete"><i class="glyphicon glyphicon-trash"> </i></button>




    </tr>
    <?php endforeach; ?>
</table>
</div>




 <div class="text-center">
   
   <?php if ($allMonitors > 10){ ?>
    <ul class="pagination pagination-large">

        <li><?php  echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
        <li><?php  echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?></li>
        <li> <?php  echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
       
   </ul>
   <?php } ?>
</div>


        <div class="panel-footer">
        <div class="text-center">
    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
</div>
   
        </div>
    
<!-- Show  Search results-->
   <div id="mon"> </div>

    </div>
    
</div>
</div>


 
<!--ADD MONITOR-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Monitor
            </div>
<form action = "/PCInventory/monitor/addmon" method ="post">

            <div  class="modal-body">
                <div class="form-group">
                    <label for="mopropertyno">Property No.</label>
                    <input type="text" name="mopropertyno" id="mypropertyno-input" class="form-control">
                </div>
                <div class="form-group">
                    <label for="modescription">Description</label>
                    <input type="text" name="modescription" id="mydescription-input"  class="form-control">
                </div>
                  <div class="form-group">
                    <label for="available">Status</label>

                      <select name="mostatus" id="mostatus" class="form-control">
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option>          
                        </select>
               
                </div>
                    <div class="form-group">
                    <label for="available">Type</label>

                      <select name="motype" id="motype" class="form-control">
                        <option value="1"> New  </option>
                        <option  value="2"> Old</option>          
                        </select>
               
                </div>


                  <div class="form-group">
                    <label for="available">Availability</label>

                      <select name="moavailability" id="moavailability" class="form-control">
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





   






<!-- EDIT MONITOR DETAILS -->
<?php foreach($monitors  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Monitor']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
        <form action = "/PCInventory/monitor/editmon" method ="post">

                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Monitor']['id'];?>"/>
                    <div class="form-group">
                        <label for="mopropertyno">Property No.</label>
                        <input type="text" name="mopropertyno"  id="mypropertyno_edit-input"  value="<?php echo $row['Monitor']['mopropertyno']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="modescription">Description</label>
                        <input type="text" name="modescription" id="mydescription_edit-input"  value="<?php echo $row['Monitor']['modescription']; ?>" class="form-control"/>
                    </div>
                     
                    
                    <div class="form-group">
                        <label for="mostatus">Status</label>
                        <select name="mostatus" id="mostatus" class="form-control">
                        <?php $mostatus = $row['Monitor']['mostatus'];
                        if ($mostatus == 1){?>

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
                        <label for="motype">Type</label>
                        <select name="motype" id="motype" class="form-control">
                        <?php $motype = $row['Monitor']['motype'];
                        if ($motype == 1){?>

                        <option value="1"> New</option>
                        <option  value="2"> Old</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Old</option> 
                        <option value="1"> New</option>
                     
                            <?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="moavailability">Availability</label>
                        <select name="moavailability" id="moavailability" class="form-control">
                        <?php $moavailability = $row['Monitor']['moavailability'];
                        if ($moavailability == 1){?>

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

<!-- This modal for Delete Member 
<?php foreach($monitors  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Monitor']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/monitor/deletemon" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Monitor']['id'];?>"/>
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
-->
<!-- This modal for View Monitor -->
<?php foreach($monitors  as $row){ 
    ?>

<div class="modal fade" id="view<?php echo $row['Monitor']['id'];?>" tabindex="-1" role="dialog">

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
                  <label> Type :      <?php $motype = $row['Monitor']['motype'];
                        if ($motype == 1){?> New
                        <?php }else{ ?> Old
                            <?php   }   ?>
                  </label> <br/>
                
                  <label> Availability :      <?php $moavailability = $row['Monitor']['moavailability'];
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
                  url: 'deletemon',
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

<!-- SEARCH SCRIPT-->

 <script>
     $(document).ready(function(){
      $('#submit').click(function(){
       var search = $('#search').val();
       
       if (search != '') {

                $.ajax({                   
                  url: 'searchMonitor',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: search
                },
                  success: function (clients) {
                   $('#mon').html(clients);
                   
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
