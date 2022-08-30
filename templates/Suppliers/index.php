<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>

<div class="supplierIndexPage">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Supplier List') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Supplier</a>
    </div>
    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('Business Name') ?></th>
                <th><?= h('Address') ?></th>
                <th><?= h('Email') ?></th>
                <th><?= h('Phone') ?></th>
                <th><?= h('Contact Name') ?></th>
                <th><?= h('ABN') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= h($supplier->business_name) ?></td>
                    <td><?= h($supplier->address) ?></td>
                    <td><?= h($supplier->email) ?></td>
                    <td><?= h($supplier->phone) ?></td>
                    <td><?= h($supplier->contact_name) ?></td>
                    <td><?= h($supplier->abn) ?></td>

                    <td class="actions">
                        <a href="<?= $this->Url->build(['action'=>'view', $supplier->id]) ?>" class="btn"><i
                                class="fa fa-eye"></i></a>
                        <a href="<?= $this->Url->build(['action'=>'edit', $supplier->id]) ?>" class="btn"><i
                                class="fas fa-edit"></i></a>
                        <div class="btn">
                            <?=$this->Form->postLink(__(''), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete {0} ? ID: {1}?', $supplier->business_name, $supplier->id), 'class' => 'fas fa-trash']) ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function (){
        $('#dataTable').DataTable();
    });
</script>
