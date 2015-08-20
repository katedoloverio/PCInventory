<?php echo $this->Form->create('User', array('url' => array('action' => 'create'))); ?>

        


        <?php
echo $this->Form->create('User');
echo $this->Form->inputs();
echo $this->Form->end(__('Register'));
?>
<?php echo $this->Form->create('User', array('url' => array('action' => 'create'), 'enctype' => 'multipart/form-data')); ?>

<?php echo $this->Form->input('image', array('type' => 'file')); ?>

<?php echo $this->Form->input('upload', array('type' => 'file')); ?>

<?php echo $this->Form->end('Save'); ?>