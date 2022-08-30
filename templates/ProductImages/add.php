<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage $productImage
 * @var \Cake\Collection\CollectionInterface|string[] $products
 */
?>
<div class="row">

    <aside class="buffer">
    <h4 class="blank"> </h4>

        <div class="column-responsive column-80">
            <?= $this->Form->create($productImage,['type'=>'file']) ?>
            <fieldset>
            <h1 class="h3 mb-2 text-gray-800">Upload Product Image</h1>
            <?php
            $this->Form->setTemplates([ 'inputContainer' => '<div class="input {{type}}{{required}}">
                    {{content}} <span class="help">{{help}}</span></div>'
            ]);
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('image_file',['type'=>'file']);
            ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

</div>
