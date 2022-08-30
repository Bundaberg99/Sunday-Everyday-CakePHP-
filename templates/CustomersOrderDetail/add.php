<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail $customersOrderDetail
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<h1 class="h3 mb-2 text-gray-800">Add Product to Order</h1>
<?= $this->Form->create($customersOrderDetail) ?>
<?php

$this->Form->setTemplates([ 'inputContainer' => '<div class="input {{type}}{{required}}">
        {{content}} <span class="help">{{help}}</span></div>'
]);

echo $this->Form->control('product_id', ['options' => $products]);
echo $this->Form->control('order_id', ['options' => $orders]);
echo $this->Form->control('price');
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ;
?>
<?=
$this->Form->end();


?>

    <script>
        $(function (){
            $('#products').change(function()){
                $('#price').val($('#products option:selected').attr('cost'))
            });
        });
    </script>




