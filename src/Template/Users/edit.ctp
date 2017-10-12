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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Approves'), ['controller' => 'Approves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Approve'), ['controller' => 'Approves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('slug');
            echo $this->Form->control('password');
            echo $this->Form->control('pass_token');
            echo $this->Form->control('dob');
            echo $this->Form->control('email');
            echo $this->Form->control('active');
            echo $this->Form->control('role');
            echo $this->Form->control('last_login', ['empty' => true]);
            echo $this->Form->control('last_action', ['empty' => true]);
            echo $this->Form->control('country');
            echo $this->Form->control('department');
            echo $this->Form->control('academic_level');
            echo $this->Form->control('study_year');
            echo $this->Form->control('data');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
