<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage $productImage
 */
?>
//THIS PAGE IS NOT IN USE
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Image'), ['action' => 'edit', $productImage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Image'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productImages view content">
            <h3><?= h($productImage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($productImage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Filename') ?></th>
                    <td><?= h($productImage->filename) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
