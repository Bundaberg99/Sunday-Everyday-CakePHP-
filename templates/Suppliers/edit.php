<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>

<div class="grid">

    <h1 class="h3 mb-2 text-gray-800">Edit Existing Supplier</h1>
    <?= $this->Form->create($supplier) ?>
    <?php
    echo $this->Form->control('business_name',['pattern'=>'^[A-Za-z0-9 ]{1,24}',  'style' => 'width:300px;']),'<pre></pre>';
    echo $this->Form->control('contact_name', ['pattern' => '[A-Za-z ]{0-24}',  'style' => 'width:300px;']),'<pre></pre>';
    echo $this->Form->control('address', ['pattern' => '^[A-Za-z0-9, ]{3,100}',  'style' => 'width:300px;']),'<pre></pre>';
    echo $this->Form->control('email', ['pattern' => '^{7,20}',  'style' => 'width:300px;']),'<pre></pre>';
    echo $this->Form->control('phone', ['pattern' => '^[0-9]{10,10}',  'style' => 'width:300px;']),'<pre></pre>';
    echo $this->Form->control('abn', ['pattern' => '^[0-9]{11,11}',  'style' => 'width:300px;']),'<pre></pre>';
    ?>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>


    <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

    <li>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id],
            ['confirm' => __('Are you sure you want to delete {0} ? ID: {1}?', $supplier->business_name, $supplier->id),
                'class' => 'side-nav-item']) ?>
    </li>

    <li>
        <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </li>


</div>
