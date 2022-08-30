<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>



<h1 class="h3 mb-2 text-gray-800">Make New Supply Order</h1>
<?= $this->Form->create($enquiry) ?>
<?php

//Adds hint underneath input ('help' templateVars is also needed):
$this->Form->setTemplates([ 'inputContainer' => '<div class="input {{type}}{{required}}">
        {{content}} <span class="help">{{help}}</span></div>'
]);

echo $this->Form->control('supplier_id', ['label' => 'Product Name:', 'options' => $suppliers]);
echo $this->Form->control('body', ['label' => 'Order Description:', 'pattern'=>'^[A-Za-z ]+$]{1-32}']);
//echo $this->Form->control('email_sent');
?>
<?= $this->Form->button(__('Request Order'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

</div>




