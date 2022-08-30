<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffsRestockingDetail $staffsRestockingDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staffs Restocking Detail'), ['action' => 'edit', $staffsRestockingDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staffs Restocking Detail'), ['action' => 'delete', $staffsRestockingDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffsRestockingDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs Restocking Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staffs Restocking Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffsRestockingDetail view content">
            <h3><?= h($staffsRestockingDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($staffsRestockingDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $staffsRestockingDetail->has('product') ? $this->Html->link($staffsRestockingDetail->product->name, ['controller' => 'Products', 'action' => 'view', $staffsRestockingDetail->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Restocking') ?></th>
                    <td><?= $staffsRestockingDetail->has('restocking') ? $this->Html->link($staffsRestockingDetail->restocking->id, ['controller' => 'Restockings', 'action' => 'view', $staffsRestockingDetail->restocking->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($staffsRestockingDetail->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
