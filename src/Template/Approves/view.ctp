<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Approve $approve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Approve'), ['action' => 'edit', $approve->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Approve'), ['action' => 'delete', $approve->id], ['confirm' => __('Are you sure you want to delete # {0}?', $approve->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Approves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Approve'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="approves view large-9 medium-8 columns content">
    <h3><?= h($approve->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $approve->has('user') ? $this->Html->link($approve->user->name, ['controller' => 'Users', 'action' => 'view', $approve->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($approve->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foreign Key') ?></th>
            <td><?= $this->Number->format($approve->foreign_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($approve->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($approve->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($approve->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Approved Day') ?></th>
            <td><?= h($approve->approved_day) ?></td>
        </tr>
    </table>
</div>
