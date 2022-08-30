<?php
/**
 * @var \App\View\AppView $this
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
            padding: 15px;
            background: #fff;

        }
    </style>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">

<div
    style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-weight: bold; width:100%;">
    Products
</div>
<a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-plus fa-sm text-white-50"></i> Add Product</a>
<div class="container">
    <div class="row" style="margin-top: 60px">
        <?php $i = 1; ?>
        <?php foreach ($products as $product): ?>
        <div class="row">
            <div class="card card shadow mb-4">
                <?= $this->Html->image($product->image, ['class' => 'card-img-top', 'width' => '400px', 'height' => '250px']) ?>
                <div class="card-body">
                    <h5 class="card-title"><?= h($product->name) ?></h5>
                    <p class="card-text">$<?= h($product->retail_price) ?></p>

                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                            data-bs-target="#myModal-<?php echo $i; // Displaying the increment ?>">
                        View More
                    </button>
                    <a href="<?= $this->Url->build(['action'=>'edit', $product->id]) ?>" class="btn"><i
                            class="fas fa-edit"></i></a>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'products', 'action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete the image for {0}?', $product->name)]) ?>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $i; // Displaying the increment ?>" tabindex="-1"
                         role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLongTitle"><?= h($product->name) ?></h4>
                                    <button type="button" class="fa fa-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-text">
                                    <h5 class="modal-text" >Cost: $<?= h($product->cost) ?></h5>
                                    <h5 class="modal-text" >Retail Price: $<?= h($product->retail_price) ?></h5>
                                    <h5 class="modal-text" >Supplier: <?= h($product->supplier->business_name) ?></h5>

                                </div>
                                    <div class="modal-body">
                                            <div class="row align-items-center">
                                        <div
                                            class="col"><?= $this->Html->image($product->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                            <div style="max-width: 900px; margin-top: 15px">
                                                <?php if (!empty($product->product_images)) : ?>
                                                    <?php foreach ($product->product_images as $image) : ?>
                                                        <tr>
                                                            <td><?= $this->Html->image($image->filename,['style'=>'max-height: 150px; max-width: 150px']) ?></td>

                                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'productImages', 'action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete the image for {0}?', $product->name)]) ?>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
    </div>
</div>



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



</body>


<br>
</html>




