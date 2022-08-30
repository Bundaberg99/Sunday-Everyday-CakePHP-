<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerProductsCartDetail $customerProductsCartDetail
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $carts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerProductsCartDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerProductsCartDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Customer Products Cart Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerProductsCartDetail form content">
            <?= $this->Form->create($customerProductsCartDetail) ?>
            <fieldset>
                <legend><?= __('Edit Customer Products Cart Detail') ?></legend>
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
