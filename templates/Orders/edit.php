<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="grid">

    <h1 class="h3 mb-2 text-gray-800">Edit Existing Order</h1>
    <div class="short">
    <?= $this->Form->create($order) ?>
    <?php
    echo $this->Form->control('customer_id', ['options' => $customers,  'style' => 'width:300px;']),'<br>';
    echo $this->Form->control('date');
    echo '<br><h6>Payment type:</h6>';
    echo $this->Form->select('payment', ['Credit Card', 'Cash', 'Paypal'], ['style' => 'width:300px;']);
    echo '<pre></pre>', $this->Form->control('quantity', ['max' => 100,  'style' => 'width:300px;']), '<pre></pre>';?>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    </div>

    <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

    <li>
        <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $order->id],
            ['confirm' => __('Are you sure you want to delete order placed on the {0} by customer ID: {1}?', $order->date, $order->customer_id),
            'class' => 'side-nav-item']
        ) ?>
    </li>

    <li>
        <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </li>


</div>
