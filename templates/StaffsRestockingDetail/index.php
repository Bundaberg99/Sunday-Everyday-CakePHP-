<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Collection\CollectionInterface $staffsRestockingDetail
 */
?>
<div class="staffsRestockingDetail index content">
    <?= $this->Html->link(__('New Staffs Restocking Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staffs Restocking Detail') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('restocking_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffsRestockingDetail as $staffsRestockingDetail): ?>
                <tr>
                    <td><?= h($staffsRestockingDetail->id) ?></td>
                    <td><?= $staffsRestockingDetail->has('product') ? $this->Html->link($staffsRestockingDetail->product->name, ['controller' => 'Products', 'action' => 'view', $staffsRestockingDetail->product->id]) : '' ?></td>
                    <td><?= $staffsRestockingDetail->has('restocking') ? $this->Html->link($staffsRestockingDetail->restocking->id, ['controller' => 'Restockings', 'action' => 'view', $staffsRestockingDetail->restocking->id]) : '' ?></td>
                    <td><?= $this->Number->format($staffsRestockingDetail->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staffsRestockingDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staffsRestockingDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staffsRestockingDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffsRestockingDetail->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
