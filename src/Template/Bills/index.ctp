<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill[]|\Cake\Collection\CollectionInterface $bills
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bills index large-9 medium-8 columns content">
    <h3><?= __('Bills') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foreign_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bill_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VAT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bills as $bill): ?>
            <tr>
                <td><?= $this->Number->format($bill->id) ?></td>
                <td><?= $this->Number->format($bill->foreign_key) ?></td>
                <td><?= h($bill->name) ?></td>
                <td><?= h($bill->bill_num) ?></td>
                <td><?= $this->Number->format($bill->price) ?></td>
                <td><?= h($bill->VAT) ?></td>
                <td><?= h($bill->unit) ?></td>
                <td><?= $this->Number->format($bill->quantity) ?></td>
                <td><?= $this->Number->format($bill->total) ?></td>
                <td><?= $this->Number->format($bill->deleted) ?></td>
                <td><?= h($bill->deleted_date) ?></td>
                <td><?= $this->Number->format($bill->paid) ?></td>
                <td><?= h($bill->payment_type) ?></td>
                <td><?= $this->Number->format($bill->discount) ?></td>
                <td><?= h($bill->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bill->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bill->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
