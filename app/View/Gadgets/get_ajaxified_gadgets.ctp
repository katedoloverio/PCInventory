<h1>Awesome heroes in the making...</h1>

<div id="paginated-content-container">
<?php echo $this->Paginator->numbers(array('separator'=>' - ')); ?>
</div>
<table>
<?php foreach ($heroes as $hero): ?>
    <tr>
        <td><?php echo $html->image('heroes/'.$hero['Hero']['url']) . ' ' . $hero['Hero']['name'] . ' (Power: ' . $hero['Hero']['power'] . ')' ?></td>
    </tr>
<?php endforeach; ?>
</table>