<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail $customersOrderDetail
 */
?>
//THIS PAGE IS NOT USED
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customers Order Detail'), ['action' => 'edit', $customersOrderDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customers Order Detail'), ['action' => 'delete', $customersOrderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersOrderDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers Order Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customers Order Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customersOrderDetail view content">
            <h3><?= h($customersOrderDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($customersOrderDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $customersOrderDetail->has('product') ? $this->Html->link($customersOrderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customersOrderDetail->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $customersOrderDetail->has('order') ? $this->Html->link($customersOrderDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $customersOrderDetail->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($customersOrderDetail->price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
        </div>
    </div>
</div>


<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">

        </div>
    </div>
</div>


<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Customer</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <th><?= __('ID:') ?></th>
                                        <td><?= h($customersOrderDetail->id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Product:') ?></th>
                                        <td><?= $customersOrderDetail->has('product') ? $this->Html->link($customersOrderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customersOrderDetail->product->id]) : '' ?></td>

                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Username:') ?></th>
                                        <td><?= h($customersOrderDetail->username) ?></td>
                                    </tr>                            </div>
                                <div>
                                    <tr>
                                        <th><?= __('Address:') ?></th>
                                        <td><?= h($customer->address) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Email:') ?></th>
                                        <td><?= h($customer->email) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Phone:') ?></th>
                                        <td><?= h($customer->phone) ?></td>
                                    </tr>
                                </div>
                                <div >

                                    <tr>
                                        <th><?= __('Abn:') ?></th>
                                        <td><?= h($customer->abn) ?></td>
                                    </tr>
                                </div>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $customer->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$customer->first_name, $customer->last_name)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $customer->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Customers List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Related Orders</h6>
                                <a href="<?= $this->Url->build(['controller'=>'Orders','action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-plus fa-sm text-white-50"></i>Add </a>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($customer->orders)) : ?>
                                <div>
                                    <?php foreach ($customer->orders as $orders) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <tr>
                                        <th><?= __('Order ID:') ?></th>
                                        <td><?= h($orders->id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Payment:') ?></th>
                                        <td><?= h($orders->payment) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Quantity:') ?></th>
                                        <td><?= h($orders->quantity) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Date:') ?></th>
                                        <td><?= h($orders->date) ?></td>
                                    </tr>
                                    <div>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'orders', 'action' => 'view', $orders->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'orders', 'action' => 'edit', $orders->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete this order? ID: {0}?', $orders->id)]) ?>
                                        </td>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

