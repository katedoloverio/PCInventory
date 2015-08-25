<h1>Awesome heroes in the making...</h1>

<div class="pagination-nav">
    <?php echo $this->Paginator->numbers(array('separator'=>' - ')); ?>
</div>

<table>
<?php foreach ($gadgets as $gadget): ?>
    <tr>
        <td><?php echo $html->image('gadgets/'.$gadget['Gadget']['gdgtpropertyno']) . ' ' . $gadget['Gadget']['gdgtdescription'] . ' (Power: ' . $gadget['Gadget']['gdgtserial'] . ')' ?></td>
    </tr>
<?php endforeach; ?>
</table>