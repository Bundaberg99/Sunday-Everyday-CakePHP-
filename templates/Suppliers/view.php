<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>


<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Supplier Details</h1>
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
                                        <b><th><?= __('Business: ') ?></th></b>
                                        <td><?= h($supplier->business_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Contact: ') ?></th></b>
                                        <td><?= h($supplier->contact_name) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <b><th><?= __('Phone: ') ?></th> </b>
                                        <td><?= h($supplier->phone) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('ABN: ') ?></th> </b>
                                        <td><?= h($supplier->abn) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Contact Email: ') ?></th> </b>
                                        <td><?= h($supplier->email) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Address: ') ?></th> </b>
                                        <td><?= h($supplier->address) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('ID: ') ?></th> </b>
                                        <td><?= h($supplier->id) ?></td>
                                    </tr>
                                </div>
                                <br>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-blo\">Delete</i> ", ['action' => 'delete', $supplier->id], ['escape' => false,'confirm' => __('Are you sure you want to delete {0} ? ID: {1}?', $supplier->business_name, $supplier->id)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-blo\">Edit</i> ", ['action' => 'edit', $supplier->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Supplier List", ['action' => 'index'], ['class' => 'btn btn-primary btn-blo']) ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
