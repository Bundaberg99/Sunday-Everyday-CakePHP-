<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 */
?>
<h1 class="h3 mb-2 text-gray-800">Carts</h1>
<?= $this->Form->create($cart) ?>
<?php
echo $this->Form->control('items_no');
echo $this->Form->control('cost');

?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
