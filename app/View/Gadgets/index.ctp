
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
                <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>employee/index">Employee<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

                <li ><a href="<?php echo $this->webroot;?>inventory/index">PC <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>



                
             

               
                <li   class="dropdown">
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
                       <li class="active" ><a href="<?php echo $this->webroot;?>gadget/index">Gadget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-phone"></span></a></li>

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
        <li class="active"><a href="#">Gadget Manangement <span class="sr-only">(current)</span></a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Gadget</a></li>
        <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-search"> </i> View All Details</a></li>
          </ul>
        </li>
      </ul>

     
       <form class="navbar-form navbar-left" role="search" method="post" style="margin-top:0px">
        <div class="form-group">
          <input type="text" name ="search" id="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" id="submit" class="btn btn-default " style="margin-top:5px">Search</button>   
      </form>

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


        <div class="panel-heading">
                Gadget Table  
        </div>

        <div class="panel-body" style="background-color:white" >
<?php echo $this->Session->flash('error'); ?>
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('added'); ?>
<div>
        
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
                    <input type="text" name="data[Gadget][ggpropertyno]" id="gdgtpropertyno-input" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ggdescription">Description</label>
                    <input type="text" name="data[Gadget][ggdescription]" id="gdgtdescription-input" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="ggserial">Serial No.</label>
                    <input type="text" name="data[Gadget][ggserial]" id="gdgtserial-input" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="ggstatus">Status</label>

                      <select name="data[Gadget][ggstatus]" id="" class="form-control">
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option>          
                        </select>
               
                </div>
                  <div class="form-group">
                    <label for="ggavailability">Availability</label>

                      <select name="data[Gadget][ggavailability]" id="" class="form-control">
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



<div>
 <div id="message"></div>
<div class="panel-body">
<div>
<div class="container">
<div class="mytable">
<table class=" table table-bordered table-hover" >
	<tr>
		<th><?php echo $this->Paginator->sort('Property No.'); ?></th>
		<th><?php echo $this->Paginator->sort('Description'); ?></th>

        <th><?php echo $this->Paginator->sort('Serial'); ?></th>
        <th><?php echo $this->Paginator->sort('Status'); ?></th>
        <th><?php echo $this->Paginator->sort('Availability'); ?></th>


		<th><?php echo __('Actions'); ?></th>
	</tr>

     
	<?php foreach ($gadgets as $gadget):

     ?>


	   <tr>
		   <td><?php echo $gadget['Gadget']['ggpropertyno']; ?></td>
		    <td><?php echo $gadget['Gadget']['ggdescription']; ?></td>
        <td><?php echo $gadget['Gadget']['ggserial']; ?></td>
        <td><?php echo $gadget['Gadget']['ggstatus']; ?></td>
        <td><?php echo $gadget['Gadget']['ggavailability']; ?></td>
  
      
      

		<td>
    <a href="#view<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-success" title="View"><i class="glyphicon glyphicon-search"> </i></a>

    <button id="<?php echo $gadget['Gadget']['id'];?>" class="btn btn-primary " onclick="editGadget(<?php echo $gadget['Gadget']['id']; ?>, '<?php echo $gadget['Gadget']['ggpropertyno']; ?>','<?php echo $gadget['Gadget']['ggdescription']; ?>','<?php echo $gadget['Gadget']['ggserial']; ?>', <?php echo $gadget['Gadget']['ggstatus']; ?>,<?php echo $gadget['Gadget']['ggavailability']; ?>)" 
      title ="Edit"><i class="glyphicon glyphicon-edit"> </i> 
    Edit
    </button>

		<a href="#delete<?php echo $gadget['Gadget']['id'];?>" data-toggle="modal" class="btn btn-danger"  title="Delete"><i class="glyphicon glyphicon-trash"> </i></a></td>





	</tr>
	<?php endforeach; ?>
</table>

    <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
    </div>

   <div id="gad"> </div>

   
           <div class="text-center">
             <?php if ($allGadgets > 5){ ?>
             <ul class="pagination pagination-large">
              <li><?php  echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
              <li><?php  echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?></li>
              <li> <?php  echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));?></li>
             </ul>
             <?php } ?>
            </div>

   </div>








<!-- Modal to Edit Gadgets -->

<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="/PCInventory/gadget/editgdgt" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Gadget']['id'];?>"/>
                    <div class="form-group">
                        <label for="ggpropertyno">Property No.</label>
                        <input type="text" name="ggpropertyno"  id="gdgtpropertyno_edit-input"  value="<?php echo $row['Gadget']['ggpropertyno']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggdescription">Description</label>
                        <input type="text" name="ggdescription" id="gdgtdescription_edit-input"  value="<?php echo $row['Gadget']['ggdescription']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="ggserial">Serial No.</label>
                        <input type="text" name="ggserial" id="gdgtserial_edit-input"    value="<?php echo $row['Gadget']['ggserial']; ?>" class="form-control"/>
                    </div>
                   
                    
                    <div class="form-group">
                        <label for="ggstatus">Status</label>
                        <select name="ggstatus" id="" class="form-control">
                        <?php $ggstatus = $row['Gadget']['ggstatus'];
                        if ($ggstatus == 1){?>
                        <option value="1"> Working</option>
                        <option  value="2"> Defective</option> 
                    <?php}else{?>
                        <option  value="2"> Defective</option> 
                        <option value="1"> Working</option>
                     
                        	<?php 
                        }


                        ?>
                        
                        </select>
                        
                    </div>

                      <div class="form-group">
                        <label for="ggavailability">Availability</label>
                        <select name="ggavailability" id="ggavailability" class="form-control">
                        <?php $ggavailability = $row['Gadget']['ggavailability'];
                        if ($ggavailability == 1){?>

                        <option value="1"> Available</option>
                        <option  value="2"> Used</option> 

<?php
                        }else{
                            ?>
                        <option  value="2"> Used</option> 
                        <option value="1"> Available</option>
                     
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



<!-- Modal to Delete Gadgets -->
<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/gadget/deletegdgt" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Gadget']['id'];?>"/>
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



<!-- Modal for View Gadgets -->
<?php foreach($gadgets  as $row){ ?>

<div class="modal fade" id="view<?php echo $row['Gadget']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                 <?php echo $row['Gadget']['ggdescription'];?> Information 
            </div>
                <div class="modal-body">
                  <label>  Porperty No. : <?php echo $row['Gadget']['ggpropertyno'];?> </label> <br/>
                  <label> Descriptiom : <?php echo $row['Gadget']['ggdescription'];?> </label> <br/>
                  <label> Serial No. : <?php echo $row['Gadget']['ggserial'];?> </label> <br/>
                  <label> Status : 
                    <?php $ggstatus = $row['Gadget']['ggstatus'];
                        if ($ggstatus == 1){ ?>
                        <?php echo 'Working';?>
                        <?php }else{ ?>
                        <?php echo 'Defective';?>
                        <?php }?> </label> <br/>
                  <label> Availability : 
                    <?php $ggavailability = $row['Gadget']['ggavailability'];
                        if ($ggavailability == 1){ ?>
                        <?php echo 'Availabile';?>
                        <?php }else{ ?>
                        <?php echo 'Resign';?>
                        <?php }?> </label> <br/> <br/>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>

<?php } ?>

<!-- DELETE SCRIPT-->

<script type="text/javascript">
  $(document).ready(function(){
    $('.delete').click(function(){
     var id = $(this).attr("id");
       bootbox.confirm("Are you sure you want to delete this data?", function(result) {
          if(result == true){
           $.ajax({                   
                  url: 'deletegdgt',
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

<!-- EDIT SCRIPT-->

<script type="text/javascript">
  

   function editGadget(id, ggpropertyno,ggdescription, ggserial, ggstatus, ggavailability){


        bootbox.dialog({
                title: "<i class='fa fa-pencil'></i> Edit Gadget",
                message: '<div>'+
                            '<form action="" method="post">'+

                                '<div class="form-control">'+
                                    '<input type="hidden" name="id" id="id" value="'+id+'"/>'+ 
                                '</div>'+

                                '<div class="form-control">'+
                                    '<input type="text" name="ggpropertyno" id="ggpropertyno" value="'+ggpropertyno+'" class="form-control"/>'+
                                '</div>'+

                                 '<div class="form-control">'+
                                    '<input type="text" name="ggdescription" id="ggdescription" value="'+ggdescription+'"class="form-control"/>'+
                                  '</div>'+


                                 '<div class="form-control">'+
                                    '<input type="text" name="ggserial" id="ggserial" value="'+ggserial+'" class="form-control"/>'+
                                  '</div>'+

                                  '<div class="form-control">'+
                                    '<input type="text" name="ggstatus" id="ggdescription" value="'+ggstatus+'"class="form-control"/>'+
                                  '</div>'+

                                  
                                 '<div class="form-control">'+
                                    '<input type="text" name="ggavailability" id="ggavailability" value="'+ggavailability+'"class="form-control"/>'+
                                '</div>'+
                            '</form>'+
                         '</div>',
                buttons: {
                    success: {
                        label: "<i class='fa fa-pencil'></i> Update",
                        className: "btn-success",
                        callback: function () {
                            var id = $('#id').val();
                            var ggpropertyno = $('#ggpropertyno').val();
                            var ggdescription = $('#ggdescription').val();
                            var ggserial = $('#ggserial').val();
                            var ggstatus = $('#ggstatus').val();
                            var ggavailability = $('#ggavailability').val();
                            $.ajax({                   
                                    url: 'editgdgt',
                                    type: 'POST',
                                    cache: false,
                                    dataType: 'HTML',
                                    data: {
                                      id: id,
                                      name: name
                                    },
                                    success: function () {
                                     bootbox.alert('Record successfully updated.', function(){
                                            displayPositions(1);
                                     });
                                     
                                    }
                            });
                           
                        }
                        
                    }
                } // close of button
                
            }
                    
        );

  

   }


</script>