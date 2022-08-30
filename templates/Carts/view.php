<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
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
                <h1 class="h3 mb-2 text-gray-800">Order Details</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Information:</h6>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <b><th><?= __('Id') ?></th> </b>
                                        <td><?= h($cart->id) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Customer') ?></th> </b>
                                        <td><?= $cart->has('customer') ? $this->Html->link($cart->customer->username, ['controller' => 'Customers', 'action' => 'view', $cart->customer->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Items No') ?></th> </b>
                                        <td><?= $this->Number->format($cart->items_no) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Cost') ?></th> </b>
                                        <td><?= $this->Number->format($cart->cost) ?></td>
                                    </tr>                          </div>
                                <?= $this->Html->link(__('View'), ['controller' => 'Carts', 'action' => 'view', $cart->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Carts', 'action' => 'edit', $cart->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carts', 'action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
