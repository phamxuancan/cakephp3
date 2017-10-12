<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bill'), ['action' => 'edit', $bill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bill'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bills view large-9 medium-8 columns content">
    <h3><?= h($bill->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bill->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bill Num') ?></th>
            <td><?= h($bill->bill_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VAT') ?></th>
            <td><?= h($bill->VAT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= h($bill->unit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Type') ?></th>
            <td><?= h($bill->payment_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foreign Key') ?></th>
            <td><?= $this->Number->format($bill->foreign_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($bill->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($bill->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($bill->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $this->Number->format($bill->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid') ?></th>
            <td><?= $this->Number->format($bill->paid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($bill->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($bill->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bill->created) ?></td>
        </tr>
    </table>
</div>
