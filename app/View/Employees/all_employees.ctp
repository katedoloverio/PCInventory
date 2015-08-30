<head>
<?php      
   echo $this->Html->css('stylevalidate.css');
   echo $this->Html->css('validation.css');
  echo $this->Html->script(array('employee', 'jquery-1.9.1.min', 'livevalidation_standalone', 'bootbox.min'));
?> 

</head>

    <div class="table-responsive">
      <table class="table table-bordered table-hover" id="employee">
          <tr> 
             <th><?php echo $this->Paginator->sort('Edit Photo'); ?></th>
             <th><?php echo $this->Paginator->sort('Photo'); ?></th>
             <th><?php echo $this->Paginator->sort('Name'); ?></th>
             <th><?php echo $this->Paginator->sort('PC Type'); ?></th>
             <th><?php echo $this->Paginator->sort('Monitor/s'); ?></th>
            <th><?php echo __('Actions'); ?></th>
          </tr>

      <?php foreach ($employees as $employee):
      $imagedisplay= $employee['Employee']['empphoto']; ?>


      <tr class="remove<?php echo $employee['Employee']['id'];?>">
      <td><a href="#changephoto<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-default"  title ="View"><i class="glyphicon glyphicon-user" > </i></a></td>
      <td>
        <img src="<?php echo $this->Html->url('/img/users/'.$imagedisplay); ?>" class="img-circle img-for-own-message">
      </td>
        <td><?php echo $employee['Employee']['empfirstname']; ?>&nbsp; <?php echo $employee['Employee']['emplastname']; ?></td>
           <td><?php $pctype =  $employee['Inventory']['pctype'] ;
           if($pctype==1) { ?> Fast
                  <?php } else{ ?>Slow
                    <?php  }   ?>
            </td>
        <td><?php echo $employee['Inventory']['monitor_id']; ?></td>

        <td>
        <a href="#view<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-success"  title ="View"><i class="glyphicon glyphicon-search" > </i>View</a>


        <a href="#edit<?php echo $employee['Employee']['id'];?>" data-toggle="modal" class="btn btn-primary" title ="Edit"> <i class="glyphicon glyphicon-edit"> </i>Edit</a>

        <button id="<?php echo $employee['Employee']['id'];?>" class="deleteGad" title ="Delete"><i class="glyphicon glyphicon-trash"> </i>Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
      </table>
    </div>

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
      <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
      </div>
    </div>

<button class="showAlert">Click me</button>
<script>
 $(document).ready(function(){
  $('.showAlert').click(function(){
   alert("Hello world");
  })
 });
</script>


<!-- DELETE SCRIPT-->

<script type="text/javascript">
  $(document).ready(function(){
    $('.deleteGad').click(function(){
     var id = $(this).attr("id");
       bootbox.confirm("Are you sure you want to delete this data?", function(result) {
          if(result == true){
           $.ajax({                   
                  url: 'deleteemp',
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