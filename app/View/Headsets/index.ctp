<?php      
    echo $this->Html->css('stylevalidate.css');
    echo $this->Html->css('validation.css');
    echo $this->Html->script(array('headset', 'jquery-1.9.1.min', 'livevalidation_standalone'));
?>
<div class="container-fluid" background-color="black">
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
                            <a class="navbar-brand" href="#">FDCI PC Inventory <img src="<?php echo $this->Html->url('/img/users/fdci.png', true); ?>"/> </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                            <ul class="nav navbar-nav">
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
                <div class="pull-right" ></div>
            </div>
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
                            <li class="active"><a href="#">Headset Manangement <span class="sr-only">(current)</span></a></li>
                            <li>  <a href="#add" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Headset</a></li>
                           
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
                                    <li>
                                        <a href="#"> 
                                            <?php if ($this->Session->read('Auth.User')): ?>
                                            You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?> <li role="separator" class="divider">   </li> <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                                            <?php else: ?>
                                                <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
     
            <div  class="panel panel-default" >
                <div class="panel-heading" >Headset Table </div>
                <div class="panel-body" style="background-color:navyblue" > 
                    <div>
                        <!--DISPLAY Headset DETAILS IN TABLE-->
                        <?php echo $this->Session->flash('headset'); ?>
                        <?php echo $this->Session->flash('headset_error'); ?>
                        <?php echo $this->Session->flash('good'); ?>
                        <?php echo $this->Session->flash('addeds'); ?>
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

                                <?php 
                                    foreach ($headsets as $headset):
                                       $hsstatus =  $headset['Headset']['hsstatus'];
                                       $hsavailability =  $headset['Headset']['hsavailability'];
                                       $hstype =  $headset['Headset']['hstype'];
                                ?>
                                <tr>
                                    <td><?php echo $headset['Headset']['hspropertyno']; ?></td>
                                    <td><?php echo $headset['Headset']['hsdescription']; ?></td>
                                    <td>
                                        <?php if($hsstatus==1) { ?> 
                                            Working
                                        <?php } else{ ?>
                                            Defective
                                        <?php  }   ?>
                                    </td>
                                    <td>
                                        <?php if($hstype==1) { ?> 
                                            New
                                        <?php } else{ ?>
                                            Old
                                        <?php  }   ?>
                                    </td>
                                    <td>
                                        <?php if($hsavailability ==1) { ?>
                                            Used
                                       <?php } else { ?> 
                                            Available
                                       <?php }?>
                                     </td>
                                    <td class='text-center'>
                                        <a href="javascript:void(0);" data-href="#view<?php echo $headset['Headset']['id'];?>" headset-id="<?php echo $headset['Headset']['id'] ?>" class="btn btn-success headset-view-modal"><i class="glyphicon glyphicon-search"> </i>View</a>
                                        <a href="#edit<?php echo $headset['Headset']['id'];?>" data-toggle="modal" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>
                                        <a href="#delete<?php echo $headset['Headset']['id'];?>" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i>Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                        <!--PAGINATION-->
                        <div class="text-center">
                           <?php if ($allHeadsets > 10){ ?>
                            <ul class="pagination" "text-center">
                                <li><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class' => 'prev disabled'));?></li>
                                <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
                                <li> <?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => 'next disabled')); ?></li>
                            </ul>
                           <?php } ?>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center">
                                <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, Showing {:current} records out of {:count} total, Starting on record {:start}, ending on {:end}'))); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ADD Headset-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Headset
            </div>
            <form action = "addhs" method ="post">
                <div  class="modal-body">
                    <div class="form-group">
                        <label for="hspropertyno">Property No.</label>
                        <input type="text" name="hspropertyno" id="hspropertyno-input"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="hsdescription">Description</label>
                        <input type="text" name="hsdescription" id="hsdescription-input"  class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="available">Status</label>
                        <select name="hsstatus" id="hsstatus" class="form-control">
                            <option value="1"> Working</option>
                            <option  value="2"> Defective</option>          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="available">Type</label>
                        <select name="hstype" id="hstype" class="form-control">
                            <option value="1"> New </option>
                            <option  value="2"> Old</option>          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="available">Availability</label>
                        <select name="hsavailability" id="hsavailability" class="form-control">
                            <option value="1"> Used</option>
                            <option  value="2"> Available</option>          
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /. -->

<!-- EDIT Headset DETAILS -->
<?php foreach($headsets  as $row){ ?>
<div class="modal fade" id="edit<?php echo $row['Headset']['id'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action = "/PCInventory/headset/ediths" method ="post">
                <div class="modal-body">
                    <input type="text" name="id" value="<?php echo  $row['Headset']['id'];?>"/>
                    <div class="form-group">
                        <label for="hspropertyno">Property No.</label>
                        <input type="text"  name="hspropertyno" id="hspropertyno_edit-input"  value="<?php echo $row['Headset']['hspropertyno']; ?>" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <label for="hsdescription">Description</label>
                        <input type="text"  name="hsdescription" id="hsdescription_edit-input"  value="<?php echo $row['Headset']['hsdescription']; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="hsstatus">Status</label>
                        <select name="hsstatus" id="hsstatus" class="form-control">
                        <?php $hsstatus = $row['Headset']['hsstatus'];
                        if ($hsstatus == 1){?>
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
                        <label for="hstype">Type</label>
                        <select name="hstype" id="hstype" class="form-control">
                        <?php $hstype = $row['Headset']['hstype'];
                        if ($hstype == 1){?>
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
                        <label for="hsavailability">Availability</label>
                        <select name="hsavailability" id="hsavailability" class="form-control">
                        <?php $hsavailability = $row['Headset']['hsavailability'];
                        if ($hsavailability == 1){?>

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

<!--  Delete modal Headset -->
<?php foreach($headsets  as $row){ ?>
<div class="modal fade" id="delete<?php echo $row['Headset']['id'];?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="/PCInventory/headset/deletehs" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Headset']['id'];?>"/>
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

<!-- view headset modal -->
<div class="modal fade" id="view-headset-object" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Headset Information 
            </div>
            <div class="modal-body">
                <label> Property No : <span class='h-pno'></span> </label> <br/>
                <label> Description : <span class='h-desc'></span> <?php echo $row['Headset']['hsdescription'];?> </label> <br/>
                <label> Status : <span class='h-status'></span></label> <br/>
                <label> Type : <span class='h-type'></span></label> <br/>
                <label> Availability : <span class='h-avail'></span></label> <br/>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- /. -->

<script>
    "use strict"
    $(document).ready(function(){
        $('.headset-view-modal')
        .off('click')
        .on('click', function(){
            var hId = $.trim($(this).attr('headset-id'));
            $.get(
                '<?php echo $this->Html->url("/employees/viewAjax"); ?>',
                {headsetId : hId},
                function(data){
                    try {
                        data = JSON.parse(data);
                        if (data.error == false) {
                            var content = data.content.Headset;
                            $('#view-headset-object').find('.h-pno').html(content.hspropertyno);
                            $('#view-headset-object').find('.h-desc').html(content.hsdescription);

                            if (content.hsstatus == 1) {
                                $('#view-headset-object').find('.h-status').html("Working");
                            } else {
                                $('#view-headset-object').find('.h-status').html("Defective");
                            }

                            if (content.hstype == 1) {
                                $('#view-headset-object').find('.h-type').html("New");
                            } else {
                                $('#view-headset-object').find('.h-type').html("Old");
                            }

                            if (content.hsavailability == 1) {
                                $('#view-headset-object').find('.h-avail').html("Used");
                            } else {
                                $('#view-headset-object').find('.h-avail').html("Available");
                            }

                            $('#view-headset-object').modal('show');
                        } else {
                            alert("An error occurred while we were loading the request.");
                        }
                    } catch (e) {}
                }
            );
        });
    });
</script>