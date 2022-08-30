<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>

    <h1 class="h3 mb-2 text-gray-800">Edit Existing Customer</h1>
<?= $this->Form->create($customer) ?>
<?php
echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z ]+${1-64',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z ]+${1-64}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('username',['pattern'=>'^[A-Za-z ]+${1-64}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('address', ['pattern' => '^[A-Za-z0-9, ]{3,100}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('email',['pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*${5-64}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('phone',['pattern' => '^[0-9]{10,10}',  'style' => 'width:300px;'], ['placeholder'=>'e.g. 0412345678']),'<pre></pre>';
echo $this->Form->control('abn', ['pattern' => '^[0-9]{11,11}',  'style' => 'width:300px;'] ,['placeholder'=>'e.g. 11111111111']),'<pre></pre>';
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

<?php

