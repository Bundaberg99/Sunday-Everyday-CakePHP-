<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="grid">

    <h1 class="h3 mb-2 text-gray-800">Edit Restock Order</h1>
    <?= $this->Form->create($restocking) ?>
    <?php
    echo $this->Form->control('staff_id', ['options' => $staffs]);
    echo $this->Form->control('date');
    echo $this->Form->select('payment',['Credit Card', 'Cash', 'Paypal']);
    echo $this->Form->control('quantity',['max'=>99999, 'default' => 100],['pattern' => '^[0-9]{0-5}']);
    ?>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>


    <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

    <li>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restocking->id],
            ['confirm' => __('Are you sure you want to delete restock order placed on {0}?', $restocking->date),
                'class' => 'side-nav-item']) ?>
    </li>

    <li>
        <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </li>


</div>
