<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">

    <aside class="buffer">
        <h4 class="blank"> </h4> <!-- ADD BUFFER HERE FOR FORMATTING -->

    </aside>

    <div class="column-responsive column-80">
        <?= $this->Form->create($supplier) ?>
        <fieldset>
            <h1 class="h3 mb-2 text-gray-800">Create New Supplier</h1><pre></pre>
            <?php
            echo $this->Form->control('business_name',['pattern' => '^[A-Za-z0-9 ]{1,24}',  'style' => 'width:300px;']),'<pre></pre>';
            echo $this->Form->control('contact_name', ['pattern' => '[A-Za-z ]{0-24}',  'style' => 'width:300px;']),'<pre></pre>';
            echo $this->Form->control('address', ['pattern' => '^[A-Za-z0-9, ]{3,100}',  'style' => 'width:300px;']),'<pre></pre>';
            echo $this->Form->control('email', ['pattern' => '^{7,20}',  'style' => 'width:300px;']),'<pre></pre>';
            echo $this->Form->control('phone', ['pattern' => '^[0-9]{10,10}',  'style' => 'width:300px;']),'<pre></pre>';
            echo $this->Form->control('abn', ['pattern' => '^[0-9]{11,11}',  'style' => 'width:300px;']),'<pre></pre>';
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ,'<pre></pre>'?>
        <?= $this->Form->end() ?>

        <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

        <li>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>

    </div>
</div>

