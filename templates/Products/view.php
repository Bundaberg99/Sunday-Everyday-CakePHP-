<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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
                <h1 class="h3 mb-2 text-gray-800">Product Details</h1>
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
                                        <b><th><?= __('Name: ') ?></th> </b>
                                        <td><?= h($product->name) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Cost: ') ?></th> </b>
                                        <td><?= h($product->cost) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Quantity: ') ?></th> </b>
                                        <td><?= h($product->quantity) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Retail price: ') ?></th> </b>
                                        <td><?= h($product->retail_price) ?></td>
                                    </tr>
                                </div>

                                <div class>
                                    <tr>
                                        <b><th><?= __('Supplier: ') ?></th> </b>
                                        <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('ID: ') ?></th> </b>
                                        <td><?= h($product->id) ?></td>
                                    </tr>
                                </div>

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $product->id], ['escape' => false,'confirm' => __('Are you sure you want to delete PRODUCT: {0}? ID: {1}', $product->name, $product->id)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $product->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Products List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                            <h6 class="m-0 font-weight-bold text-primary">Product Images</h6>
                        <a href="<?= $this->Url->build(['controller'=>'productImages','action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-user-plus fa-sm text-white-50"></i> Add new image</a>

                    </div>
                    <div class="card-body">
                        <?php if (!empty($product->product_images)) : ?>
                        <div>
                            <?php foreach ($product->product_images as $image) : ?>
                            <div>
                                <hr class="sidebar-divider d-none d-md-block">
                            </div>
                            <tr>
                                <th><?= __('Image:') ?></th>
                                <td><?= $this->Html->image($image->filename,['style'=>'max-height: 150px; max-width: 150px']) ?></td>
                            </tr>
                        </div>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'productImages', 'action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete the image for {0}?', $product->name)]) ?>
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
