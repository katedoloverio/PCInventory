
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
         <th><?php echo $this->Paginator->sort('Employee ID'); ?></th>
         <th><?php echo $this->Paginator->sort('Property ID'); ?></th>
        <th><?php echo $this->Paginator->sort('Employee'); ?></th>
        <th><?php echo $this->Paginator->sort('Mouse'); ?></th>
        <th><?php echo $this->Paginator->sort('Monitor'); ?></th>
        <th><?php echo $this->Paginator->sort('Keyboard'); ?></th>
        <th><?php echo $this->Paginator->sort('System Unit'); ?></th>
        <th><?php echo $this->Paginator->sort('Videocard'); ?></th>
        <th><?php echo $this->Paginator->sort('Speaker'); ?></th>
        <th><?php echo $this->Paginator->sort('Headset'); ?></th>
        <th><?php echo $this->Paginator->sort('UPS'); ?></th>
        <th><?php echo $this->Paginator->sort('OS'); ?></th>
        <th><?php echo $this->Paginator->sort('OS SN#'); ?></th>
        <th><?php echo $this->Paginator->sort('Additional Info '); ?></th>
       
        <th><?php echo __('Actions'); ?></th>

    </tr>

    <?php foreach ($mains as $main):



    ?>

<tr>
        <td><?php echo $main['Main']['employee_id'] ?> </td>            
       <td><?php echo $main['Main']['property_id'] ?> </td>  
       <td><?php echo $main['Employee']['empfirstname'] ?> </td>  
       <td><?php echo $main['Main']['mouse_propertyid'] ?> </td>    
       <td><?php echo $main['Property']['ppropertyno'] ?> </td> 


        <td><a href="#viewem<?php echo $inventory['Inventory']['employee_id']?>" data-toggle="modal"><?php echo $inventory['Employee']['empfirstname'] ?></a></td>  


       <td><?php echo $main['Property']['id'] ?> </td>  

       <td><?php echo $main['Property']['id'] ?> </td>  


       <td>
          </td>    
       <td><?php echo $main['Main']['speaker_propertyid'] ?> </td>  
       <td><?php echo $main['Main']['headset_propertyid'] ?> </td>  
       <td><?php echo $main['Main']['up_propertyid'] ?> </td> 
        <td><?php echo $main['Main']['os']; ?></td>
        <td><?php echo $main['Main']['os_serial']; ?></td>
        <td><?php echo $main['Main']['additionalinfo']; ?></td>


        <td>
       <i class="glyphicon glyphicon-search"> </i>View

        <i class="glyphicon glyphicon-edit"> </i>Edit

        <i class="glyphicon glyphicon-trash"> </i>Delete</td>
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