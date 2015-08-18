<h2><?php echo h($product['Product']['name']); ?></h2>
<p>
	<?php echo h($product['Product']['details']); ?>
</p>
<dl>
	<dt><?php echo __('Available'); ?></dt>
	<dd><?php echo __((bool)$product['Product']['available'] ? 'Yes' : 'No'); ?></dd>

</dl>