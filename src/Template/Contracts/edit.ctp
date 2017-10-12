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
                ['action' => 'delete', $contract->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contracts form large-9 medium-8 columns content">
    <?= $this->Form->create($contract) ?>
    <fieldset>
        <legend><?= __('Edit Contract') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('contract_num');
            echo $this->Form->control('slug');
            echo $this->Form->control('user_id');
            echo $this->Form->control('content');
            echo $this->Form->control('type');
            echo $this->Form->control('sign_day', ['empty' => true]);
            echo $this->Form->control('startdate');
            echo $this->Form->control('enddate');
            echo $this->Form->control('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
