<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
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
                <h1 class="h3 mb-2 text-gray-800">Staff Details</h1>
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
                                        <b><th><?= __('First Name: ') ?></th> </b>
                                        <td><?= h($staff->first_name) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Last Name: ') ?></th> </b>
                                        <td><?= h($staff->last_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Phone: ') ?></th> </b>
                                        <td><?= h($staff->phone) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Email: ') ?></th> </b>
                                        <td><?= h($staff->email) ?></td>
                                    </tr>                          </div>
                                <div class>
                                    <tr>
                                        <b><th><?= __('Address: ') ?></th> </b>
                                        <td><?= h($staff->address) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Id:') ?></th> </b>
                                        <td><?= h($staff->id) ?></td>
                                    </tr>
                                </div>
                                <br>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-blo\">Delete</i> ", ['action' => 'delete', $staff->id], ['escape' => false,'confirm' => __('Are you sure you want to delete STAFF USER: {0} {1}? ID: {2} ',$staff->first_name, $staff->last_name, $staff->id )]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-blo\">Edit</i> ", ['action' => 'edit', $staff->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Staffs List", ['action' => 'index'], ['class' => 'btn btn-primary btn-blo']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
