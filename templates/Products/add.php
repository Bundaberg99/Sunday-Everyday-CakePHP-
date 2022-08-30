<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>

<h1 class="h3 mb-2 text-gray-800">Create New Product</h1>
<?= $this->Form->create($product,['type'=>'file']) ?>
<?php
echo $this->Form->control('name',['pattern' => '^[A-Za-z0-9 ]{0-24}',  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('image_file',['type'=>'file' ]),'<pre></pre>';
echo $this->Form->control('cost',['max'=>"9999.99", 'min' => "0.00",'step'=>"0.01",  'style' => 'width:300px;'],['pattern' => '^[0-9]{0-10}'] ),'<pre></pre>';
echo $this->Form->control('retail_price',['max'=>"9999.99", 'min' => "0.00",'step'=>"0.01",  'style' => 'width:300px;'],['pattern' => '^[0-9]{0-10}'] ),'<pre></pre>';
echo $this->Form->control('quantity',['max'=>99999, 'default' => 0,  'style' => 'width:300px;']),'<pre></pre>';
echo $this->Form->control('supplier_id', ['options' => $suppliers,  'style' => 'width:150px;']),'<pre></pre>';
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
