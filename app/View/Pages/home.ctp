 <?php
echo $this->Form->create('Page', array('controller' => 'Pages', 'action' => 'display', 'type' => 'file')); 
echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control', 'value' => '')); 
echo $this->Form->submit('Update', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to update') );
echo $this->Form->end();
?>
</div>
</div>