<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
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
                <div class>
                    <div class="dashboardc">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Information:</h4>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <th><b><?= __('First Name:') ?></b></th>
                                        <td><?= h($customer->first_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Last Name:') ?></b></th>
                                        <td><?= h($customer->last_name) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><b><?= __('Username:') ?></b></th>
                                        <td><?= h($customer->username) ?></td>
                                    </tr>                            </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Address:') ?></b></th>
                                        <td><?= h($customer->address) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Email:') ?></b></th>
                                        <td><?= h($customer->email) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Phone:') ?></b></th>
                                        <td><?= h($customer->phone) ?></td>
                                    </tr>
                                </div>
                                <div >

                                    <tr>
                                        <th><b><?= __('Abn:') ?></b></th>
                                        <td><?= h($customer->abn) ?></td>
                                    </tr>
                                </div>
                                <br>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-blo\">Delete</i> ", ['action' => 'delete', $customer->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$customer->first_name, $customer->last_name)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-blo\">Edit</i> ", ['action' => 'edit', $customer->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Customers List", ['action' => 'index'], ['class' => 'btn btn-primary btn-blo']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Order History:</h4>
                                <a href="<?= $this->Url->build(['controller'=>'Orders','action'=>'add']) ?>" class="btn btn-primary btn-blo"><i
                                        class="fas fa-plus fa-sm text-white-50"></i> Create New Order for Customer </a>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($customer->orders)) : ?>
                                <div>
                                    <?php foreach ($customer->orders as $orders) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <tr>
                                        <th><b><?= __('Order ID:') ?></b></th>
                                        <td><?= h($orders->id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Payment:') ?></b></th>
                                        <td><?= h($orders->payment) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Quantity:') ?></b></th>
                                        <td><?= h($orders->quantity) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b></b><?= __('Date:') ?></th>
                                        <td><?= h($orders->date) ?></td>
                                    </tr>
                                    <div>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'orders', 'action' => 'view', $orders->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'orders', 'action' => 'edit', $orders->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete order ID: {0} for {1} {2}?', $orders->id, $customer->first_name, $customer->last_name)]) ?>
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
