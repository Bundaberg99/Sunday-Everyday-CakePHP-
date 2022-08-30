<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerProductsCartDetail $customerProductsCartDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer Products Cart Detail'), ['action' => 'edit', $customerProductsCartDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer Products Cart Detail'), ['action' => 'delete', $customerProductsCartDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerProductsCartDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customer Products Cart Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer Products Cart Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerProductsCartDetail view content">
            <h3><?= h($customerProductsCartDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($customerProductsCartDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $customerProductsCartDetail->has('product') ? $this->Html->link($customerProductsCartDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customerProductsCartDetail->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cart') ?></th>
                    <td><?= $customerProductsCartDetail->has('cart') ? $this->Html->link($customerProductsCartDetail->cart->id, ['controller' => 'Carts', 'action' => 'view', $customerProductsCartDetail->cart->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($customerProductsCartDetail->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($customerProductsCartDetail->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
