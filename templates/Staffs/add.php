<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
    <h1 class="h3 mb-2 text-gray-800">Create New Staff</h1>
<?= $this->Form->create($staff) ?>
<?php

//Generate random number for user default:
$random = rand(6, 99999);

echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z ]+$',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z ]+$', 'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('username', [ 'style' => 'width:300px;', 'default' => 'newUser{0}', $random]),'<pre></pre>'; //does not work
echo $this->Form->control('password', [ 'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('address', ['pattern' => '^[A-Za-z0-9, ]{3,100}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('email',['pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$', 'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('phone',['pattern' => '^[0-9]{10,10}',  'style' => 'width:300px;'], ['placeholder'=>'e.g. 0412345678']),'<pre></pre>';
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
