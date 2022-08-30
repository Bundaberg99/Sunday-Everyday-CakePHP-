<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
//PAGE NOT USED
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $enquiry->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enquiries form content">
            <?= $this->Form->create($enquiry) ?>
            <fieldset>
                <legend><?= __('Edit Enquiry') ?></legend>
                <?php
                    echo $this->Form->control('body');
                    echo $this->Form->control('email_sent');
                    echo $this->Form->control('supplier_id', ['options' => $suppliers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
