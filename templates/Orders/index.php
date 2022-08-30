<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>

      <div class="staffs index content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= __('Customer Orders') ?></h1>
            <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus fa-sm text-white-50"></i> New Order</a>
        </div>
        <div class="table-responsive">
            <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= h('Order ID') ?></th>
                    <th><?= h("Username") ?></th>
                    <th><?= h('Customer Name') ?></th>
                    <th><?= h('Date') ?>
                    <th><?= h('Payment Type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order): ?>
                     <tr>
                    <td><?= h($order->id) ?></td>
                         <td><?= h($order->customer->username)?></td>
                    <td><?= h($order->customer->first_name),' ', h($order->customer->last_name) ?></td>
                    <td><?= h($order->date) ?></td>
                  <!-- add item count here (need to count no of customerOrderDetails listed in each order -->
                    <td><?= h($order->payment) ?></td>
                    <td class="actions">
                        <a href="<?= $this->Url->build(['action'=>'view', $order->id]) ?>" class="btn"><i
                                class="fa fa-eye"></i></a>
                        <a href="<?= $this->Url->build(['action'=>'edit', $order->id]) ?>" class="btn"><i
                                class="fas fa-edit"></i></a>
                        <div class="btn">
                            <?=$this->Form->postLink(__(''), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete order made on the {0} by customer ID: {1}?', $order->date, $order->id), 'class' => 'fas fa-trash']) ?>
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
