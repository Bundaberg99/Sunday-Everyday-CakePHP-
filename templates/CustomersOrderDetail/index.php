<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail[]|\Cake\Collection\CollectionInterface $customersOrderDetail
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
    <div class="customers index content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= __('All Ordered Products List') ?></h1>
            <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus fa-sm text-white-50"></i> Order Another Product</a>
        </div>
        <div class="table-responsive">
            <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= h('Product') ?></th>
                    <th><?= h('Price') ?></th>
                    <th><?= h('Prder id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($customersOrderDetail as $detail): ?>
                    <tr>
                        <td><?= h($detail->product->name) ?></td>

                        <td><?= h($detail->price) ?></td>
                        <td><?= h($detail->order_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detail->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete {0} from this order?', $detail->product->name)]) ?>
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
