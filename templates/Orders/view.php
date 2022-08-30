<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
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
                <h1 class="h3 mb-2 text-gray-800">Customer Orders</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="dashboardc">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Information:</h4>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <th><b><?= __('Customer:') ?></b></th>
                                        <td><?= $order->has('customer') ? $this->Html->link($order->customer->username, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Payment:') ?></b></th>
                                        <td><?= h($order->payment) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><b><?= __('Quantity:') ?></b></th>
                                        <td><?= $this->Number->format($order->quantity) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><b><?= __('Date:') ?></b></th>
                                        <td><?= h($order->date) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><b><?= __('Order ID:') ?></b></th>
                                        <td><?= h($order->id) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><b><?= __('Customer ID:') ?></b></th>
                                        <td><?= h($order->customer_id) ?></td>
                                    </tr>
                                </div>
                                <br>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-blo\">Delete</i> ", ['action' => 'delete', $order->id], ['escape' => false,'confirm' => __('Are you sure you want to delete this order? ID: '.$order->id)]) ?>
                                <?= $this->Html->link("Back to Orders List", ['controller'=>'Orders','action' => 'index'], ['class' => 'btn btn-primary btn-blo']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Cart:</h4>
                                <a href="<?= $this->Url->build(['controller'=>'customersOrderDetail','action'=>'add']) ?>" class="btn btn-primary btn-blo"><i
                                        class="fas fa-plus fa-sm text-white-50"></i> Add Item To This Order </a>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($order->customers_order_detail)) : ?>
                                <div>
                                    <?php foreach ($order->customers_order_detail as $customers_order_detail) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div>
                                    <tr>
                                        <th><b><?= __('Product Name:') ?></b></th>
                                        <td><?= h($customers_order_detail->product->name) ?></td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <th><b><?= __('Price: $') ?></b></th>
                                        <td><?= h($customers_order_detail->price) ?></td>

                                    </tr>
                                    <?php endforeach; ?>
                                </div>


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
