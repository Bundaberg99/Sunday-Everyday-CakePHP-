<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
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
                <h1 class="h3 mb-2 text-gray-800">Restocking Details</h1>
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
                                        <b><th><?= __('Staff: ') ?></th></b>
                                        <td><?= $restocking->has('staff') ? $this->Html->link($restocking->staff->first_name,$restocking->staff->last_name, ['controller' => 'Staffs', 'action' => 'view', $restocking->staff->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Payment: ') ?></th></b>
                                        <td><?= h($restocking->payment) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Quantity: ') ?></th></b>
                                        <td><?= $this->Number->format($restocking->quantity) ?></td>
                                    </tr>
                                    </div>

                                <div>
                                    <tr>
                                        <b><th><?= __('Date: ') ?></th></b>
                                        <td><?= h($restocking->date) ?></td>
                                    </tr>
                                </div>

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $restocking->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$restocking->id)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $restocking->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Restock List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Related Orders</h6>
                                <a href="<?= $this->Url->build(['controller'=>'staffsRestockingDetail','action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-user-plus fa-sm text-white-50"></i> Add product to order</a>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($restocking->staffs_restocking_detail)) : ?>
                                <div>
                                    <?php foreach ($restocking->staffs_restocking_detail as $staffsRestockingDetail) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <tr>
                                        <th><?= __('Product name:') ?></th>
                                        <td><?= h($staffsRestockingDetail->product->name) ?></td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <th><?= __('Quantity') ?></th>
                                        <td><?= h($staffsRestockingDetail->quantity) ?></td>
                                    </tr>
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

