 <?php
echo $this->Form->create('Page', array('controller' => 'Pages', 'action' => 'index', 'type' => 'file')); 
echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control', 'value' => '')); 
echo $this->Form->submit('Update', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to update') );
echo $this->Form->end();


  foreach ($myphoto as $row) {
  	$imagedisplay= $row['Page']['photo'] ;
  	echo $row['Page']['firstname'];?>


  <img src="/PCInventory/img/users/<?php echo $imagedisplay; ?>" class="img-circle img-for-own-message">
  	<?php
  	echo $row['Page']['photo'];
  	echo ' </br>';
 }
?>



</div>
</div>