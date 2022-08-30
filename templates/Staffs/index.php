<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
<div class="staffs index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Staff List') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Staff</a>
    </div>


    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('First Name') ?></th>
                <th><?= h('Last Name') ?></th>
                <th><?= h('Email') ?>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($staffs as $staff): ?>
                <tr>

                    <td><?= h($staff->first_name) ?></td>
                    <td><?= h($staff->last_name) ?></td>
                    <td><?= h($staff->email) ?></td>


                    <td class="actions">
                        <a href="<?= $this->Url->build(['action'=>'view', $staff->id]) ?>" class="btn"><i
                                class="fa fa-eye"></i></a>
                        <a href="<?= $this->Url->build(['action'=>'edit', $staff->id]) ?>" class="btn"><i
                                class="fas fa-edit"></i></a>
                        <div class="btn">
                            <?=$this->Form->postLink(__(''), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete STAFF USER: {0} {1}? ID: {2}', $staff->first_name, $staff->last_name, $staff->id), 'class' => 'fas fa-trash']) ?>
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
