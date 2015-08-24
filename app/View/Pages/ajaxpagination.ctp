



<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->script(‘http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js&#8217;); ?>
</head>
<body>
<div id=”spinner” style=”display: none; float: right;”>

<?php echo $this->Html->image(‘indicator.gif’, array(‘id’ => ‘busy-indicator’)); ?>
</div>
<div id=”content”>
<?php echo $content_for_layout; ?>
</div>

</body>
</html>

