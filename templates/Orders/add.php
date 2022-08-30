<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 */
?>
<div class="row">
    <aside class="column">

    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>

                <h1 class="h3 mb-2 text-gray-800">Create New Order</h1>
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

        </div>


            <h2 class="h3 mb-2 text-gray-800">Actions:</h2>
        <li>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>
    </div>
</div>
