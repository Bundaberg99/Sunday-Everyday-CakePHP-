<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */


/** PRODUCT ECHOES (Populate table*/
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>

<!-- UNDERSTOCK TABLE -->
<div class="card-body">

</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><!--TITLE --></h6>

        <!-- Table implementation: -->
        <div class="products index content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-red-800"><?= __('Under-Stock Products:') ?></h1>
                <?=$this->Html->link(__('.'), ['controller'=>'Products','action' => 'understock']) ;
                ?>

            </div>
            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>

                        <th><?= h('Name') ?></th>
                        <th><?= h('Cost') ?></th>
                        <th><?= h('Quantity') ?></th>

                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= h($product->name) ?></td>
                            <td><?= h($product->cost) ?></td>

                            <td><?= h($product->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Restock'), ['controller'=>'enquiries','action' => 'add']) ?>
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


<!-- OVERSTOCK TABLE: -->
<?php /*
    <div class="card-body">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Over-Stock Products</h6>
        </div>
        <div class="card-body">

        </div>
 </div>
 */
 ?>





