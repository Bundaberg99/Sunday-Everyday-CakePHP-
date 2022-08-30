<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail $customersOrderDetail
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 */
?>

<h1 class="h3 mb-2 text-gray-800">Edit Existing Product in Order</h1>
<?= $this->Form->create($customersOrderDetail) ?>
<?php
echo $this->Form->control('product_id', ['options' => $products]);
echo $this->Form->control('order_id', ['options' => $orders]);
echo $this->Form->control('price', ['max'=>99999],['pattern' => '^[0-9]{0-5}']);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
