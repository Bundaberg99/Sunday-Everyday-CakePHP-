<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
<div class="customers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Customer List') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Customer</a>
    </div>


    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= h('First Name') ?></th>
                <th><?= h('Last Name') ?></th>
                <th><?= h('username') ?></th>
                <th><?= h('email') ?></th>
                <th><?= h('phone') ?></th>
                <th><?= h('abn') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->username) ?></td>
                    <td><?= h($customer->email) ?></td>
                    <td><?= h($customer->phone) ?></td>
                    <td><?= h($customer->abn) ?></td>
                    <td class="actions">
                        <a href="<?= $this->Url->build(['action'=>'view', $customer->id]) ?>" class="btn"><i
                                class="fa fa-eye"></i></a>
                        <a href="<?= $this->Url->build(['action'=>'edit', $customer->id]) ?>" class="btn"><i
                                class="fas fa-edit"></i></a>
                        <div class="btn">
                        <?=$this->Form->postLink(__(''), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'fas fa-trash']) ?>
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
