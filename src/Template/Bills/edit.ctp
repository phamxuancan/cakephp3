<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bills form large-9 medium-8 columns content">
    <?= $this->Form->create($bill) ?>
    <fieldset>
        <legend><?= __('Edit Bill') ?></legend>
        <?php
            echo $this->Form->control('foreign_key');
            echo $this->Form->control('name');
            echo $this->Form->control('bill_num');
            echo $this->Form->control('price');
            echo $this->Form->control('VAT');
            echo $this->Form->control('unit');
            echo $this->Form->control('quantity');
            echo $this->Form->control('total');
            echo $this->Form->control('deleted');
            echo $this->Form->control('deleted_date', ['empty' => true]);
            echo $this->Form->control('paid');
            echo $this->Form->control('payment_type');
            echo $this->Form->control('discount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
