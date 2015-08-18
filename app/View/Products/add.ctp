
<h2><?php echo __('add'); ?></h2>




<div class="container">
    
    
    <div class="alert alert-success" style="margin-top: 100px;">
       <a href="#add" class="btn btn-primary" data-toggle="modal"> <i class="glyphicon glyphicon-pencil"> </i> Add Product</a> 
    </div>
    
</div>

<div class="modal fade" id="add" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <i class="glyphicon glyphicon-pencil"></i> Add Product
            </div>

            <form action = "" method ="post">
            <div  class="modal-body">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="data[Product][name]" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Quantity</label>
                    <input type="text" name="data[Product][details]" id="" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="name">Details</label>
                    <input type="text" name="data[Product][available]" id="" class="form-control">
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