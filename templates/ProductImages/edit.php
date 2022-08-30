<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage $productImage
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>


//THIS PAGE IS BROKEN--- DO NOT USE
<h1 class="h3 mb-2 text-gray-800">Edit Product Image</h1>
<?= $this->Form->create($productImage,['type'=>'file']) ?>
<?php
//Adds hint underneath input ('help' templateVars is also needed):
$this->Form->setTemplates([ 'inputContainer' => '<div class="input {{type}}{{required}}">
        {{content}} <span class="help">{{help}}</span></div>'
]);

echo $this->Form->control('product_id', ['options' => $products]);
echo $this->Form->control('image_file',['type'=>'file']);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
