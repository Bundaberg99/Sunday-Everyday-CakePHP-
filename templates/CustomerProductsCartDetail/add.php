<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerProductsCartDetail $customerProductsCartDetail
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $carts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Customer Products Cart Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerProductsCartDetail form content">
            <?= $this->Form->create($customerProductsCartDetail) ?>
            <fieldset>
                <legend><?= __('Add Customer Products Cart Detail') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('cart_id', ['options' => $carts]);
                    echo $this->Form->control('cost');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
