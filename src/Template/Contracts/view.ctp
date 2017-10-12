<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contracts view large-9 medium-8 columns content">
    <h3><?= h($contract->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contract->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract Num') ?></th>
            <td><?= h($contract->contract_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($contract->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($contract->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($contract->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($contract->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($contract->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sign Day') ?></th>
            <td><?= h($contract->sign_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdate') ?></th>
            <td><?= h($contract->startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enddate') ?></th>
            <td><?= h($contract->enddate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contract->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contract->modified) ?></td>
        </tr>
    </table>
</div>
