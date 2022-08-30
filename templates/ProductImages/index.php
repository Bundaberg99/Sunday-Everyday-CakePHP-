<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>

<div class="customers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Product Images') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Add Product Image</a>
    </div>
    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('Image') ?></th>
                <th><?= h('Product Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($productImages as $image): ?>
                <tr>
                    <td><?= $this->Html->image($image->filename,['style'=>'max-height: 150px; max-width: 150px']) ?></td>
                    <td><?= h($image->product->name) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?> <!-- Broken DO NOT USE -->
                        <div class="btn">
                            <?=$this->Form->postLink(__(''), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete this image?'), 'class' => 'fas fa-trash']) ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function (){
            $('#dataTable').DataTable();
        });
    </script>
</div>
