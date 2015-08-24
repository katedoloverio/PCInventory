<?php $this->paginator->options(array(‘update’ => ‘#content’,’before’ => $this->Js->get(‘#spinner’)->effect(‘fadeIn’, array(‘buffer’ => false)),’complete’ => $this->Js->get(‘#spinner’)->effect(‘fadeOut’, array(‘buffer’ => false))));?>

Showing Page <?php echo $this->paginator->counter(); ?>
<table>
<tr>
<th><?php echo $this->paginator->sort(‘Post.title’, ‘Title’);?></th>
<th><?php echo $this->paginator->sort(‘Post.created’, ‘Created Date’);?></th>
</tr>
<?php foreach($customers as $customer): ?>
<tr>
<td style=”padding-right: 30px;”><?php echo $customer[‘Post’][‘title’]; ?></td>
<td style=”padding-left: 30px;”><?php echo $customer[‘Post’][‘created’]; ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php echo $this->paginator->prev(); ?> – &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $this->paginator->numbers(array(‘separator’=>’ – ‘)); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $this->paginator->next(‘Next Page’); ?>
<?php echo $this->Js->writeBuffer();?>
