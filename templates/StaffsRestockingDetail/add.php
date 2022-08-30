<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffsRestockingDetail $staffsRestockingDetail
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $restockings
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Staffs Restocking Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffsRestockingDetail form content">
            <?= $this->Form->create($staffsRestockingDetail) ?>
            <fieldset>
                <legend><?= __('Add Staffs Restocking Detail') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('restocking_id', ['options' => $restockings]);
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
