<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
<div class="carts index content">
    <h3><?= __('Carts') ?></h3>

    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('id') ?></th>
                <th><?= h('items_no') ?>
                <th><?= h('cost') ?>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($carts as $cart): ?>
                <tr>

                    <td><?= h($cart->id) ?></td>
                    <td><?= $this->Number->format($cart->items_no) ?></td>
                    <td><?= $this->Number->format($cart->cost) ?></td>
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
