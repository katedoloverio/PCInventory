

	<div class="container">
    
    
    <div class="alert alert-success" style="margin-top: 50px;">
       <a href="#add" class="btn btn-primary" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Product</a> 
        <a href="#addemp" class="btn btn-primary" data-toggle="modal"> <i class="glyphicon glyphicon-plus"> </i> Add Employee</a> 
<p>
<!--    check if user is logged, show user name and logout link or login link -->
    <?php if ($this->Session->read('Auth.User')): ?>
        You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?>. <?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>
    <?php else: ?>
        <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
    <?php endif; ?>
</p>

 
        
    </div>
    
</div>
<!--ADD PRODUCT-->
<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Product
            </div>

            <form action = "addprod" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="data[Product][name]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Details</label>
                    <input type="text" name="data[Product][details]" id="" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="name">Available</label>

                      <select name="data[Product][available]" id="available" class="form-control">
                        <option value="1"> Active</option>
                        <option  value="2"> Resign</option>          
                        </select>
               
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add Product</button>
                <button data-dismiss="modal" class="btn btn-default">Cancel</button>
            </div>

        </div>
        </form>
    </div>
</div>
</div>

<!--ADD EMPLOYEE-->
<div class="modal fade" id="addemp" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-plus"></i> Add Product
            </div>

            <form action = "addemp" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="data[User][username]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" name="data[User][password]" id="" class="form-control">
                </div>
                  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add Employee</button>
                <button data-dismiss="modal" class="btn btn-default">Cancel</button>
            </div>

        </div>
        </form>
    </div>
</div>
</div>



<div>



<?php echo $this->Session->flash('good'); ?>
<div class="container">
<table class="table table-bordered table-hover" >
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>

		<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo $product['Product']['id']; ?></td>
		<td><?php echo $product['Product']['name']; ?></td>


		<td>
        <a href="#view<?php echo $product['Product']['id'];?>" data-toggle="modal" class="btn btn-success"><i class="glyphicon glyphicon-search"> </i>View</a>

		<a href="#edit<?php echo $product['Product']['id'];?>" data-toggle="modal" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

		<a href="#delete<?php echo $product['Product']['id'];?>" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> </i>Delete</a></td>





	</tr>
	<?php endforeach; ?>
</table>
</div>
<div>
	<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
</div>
<div>
	<?php
	echo $this->Paginator->prev(__('< previous'), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(__('next >'), array(), null, array('class' => 'next disabled'));
	?>
 <div>
</div>



<!-- This modal for Edit Member -->
<?php foreach($products  as $row){ ?>

<div class="modal fade" id="edit<?php echo $row['Product']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Edit 
            </div>
            <form action="editprod" method="post">
                <div class="modal-body">
                    <input type="text" name="id" value="<?php echo  $row['Product']['id'];?>"/>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" value="<?php echo $row['Product']['name']; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <input type="text" name="details" id="" value="<?php echo $row['Product']['details'];?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="available">Available</label>
                        <select name="available" id="" class="form-control">
                        <?php $available = $row['Product']['available'];
                        if ($available == 1){?>

                        <option value="1"> Active</option>
                        <option  value="2"> Resign</option> 

<?php
                        }else{
                        	?>
                        <option  value="2"> Resign</option> 
                        <option value="1"> Active</option>
                     
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

<!-- This modal for Delete Member -->
<?php foreach($products  as $row){ ?>

<div class="modal fade" id="delete<?php echo $row['Product']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
            <form action="deleteprod" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo  $row['Product']['id'];?>"/>
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

<!-- This modal for View Member -->
<?php foreach($products  as $row){ ?>

<div class="modal fade" id="view<?php echo $row['Product']['id'];?>" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="glyphicon glyphicon-pencil"></i>
                Delete 
            </div>
                <div class="modal-body">
                 <label> Product Name : <?php echo $row['Product']['name'];?> </label> <br/>
                  <label>  Product Details : <?php echo $row['Product']['details'];?> </label> <br/>
                    <label> Availability:  <?php echo $row['Product']['available'];?></label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>

<?php } ?>
