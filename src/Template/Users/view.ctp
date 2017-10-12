<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Approves'), ['controller' => 'Approves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Approve'), ['controller' => 'Approves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($user->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass Token') ?></th>
            <td><?= h($user->pass_token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($user->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($user->department) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Academic Level') ?></th>
            <td><?= h($user->academic_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Study Year') ?></th>
            <td><?= h($user->study_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($user->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($user->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($user->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Action') ?></th>
            <td><?= h($user->last_action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Approves') ?></h4>
        <?php if (!empty($user->approves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Foreign Key') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Approved Day') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->approves as $approves): ?>
            <tr>
                <td><?= h($approves->id) ?></td>
                <td><?= h($approves->user_id) ?></td>
                <td><?= h($approves->foreign_key) ?></td>
                <td><?= h($approves->status) ?></td>
                <td><?= h($approves->created) ?></td>
                <td><?= h($approves->modified) ?></td>
                <td><?= h($approves->approved_day) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Approves', 'action' => 'view', $approves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Approves', 'action' => 'edit', $approves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Approves', 'action' => 'delete', $approves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $approves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contracts') ?></h4>
        <?php if (!empty($user->contracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Contract Num') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Sign Day') ?></th>
                <th scope="col"><?= __('Startdate') ?></th>
                <th scope="col"><?= __('Enddate') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->contracts as $contracts): ?>
            <tr>
                <td><?= h($contracts->id) ?></td>
                <td><?= h($contracts->name) ?></td>
                <td><?= h($contracts->contract_num) ?></td>
                <td><?= h($contracts->slug) ?></td>
                <td><?= h($contracts->user_id) ?></td>
                <td><?= h($contracts->content) ?></td>
                <td><?= h($contracts->type) ?></td>
                <td><?= h($contracts->sign_day) ?></td>
                <td><?= h($contracts->startdate) ?></td>
                <td><?= h($contracts->enddate) ?></td>
                <td><?= h($contracts->data) ?></td>
                <td><?= h($contracts->created) ?></td>
                <td><?= h($contracts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contracts', 'action' => 'view', $contracts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contracts', 'action' => 'edit', $contracts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contracts', 'action' => 'delete', $contracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contracts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($user->files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Size Correct') ?></th>
                <th scope="col"><?= __('Size Optimize') ?></th>
                <th scope="col"><?= __('Origin Name') ?></th>
                <th scope="col"><?= __('Width') ?></th>
                <th scope="col"><?= __('Height') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Foreign Key') ?></th>
                <th scope="col"><?= __('Resized') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->files as $files): ?>
            <tr>
                <td><?= h($files->id) ?></td>
                <td><?= h($files->name) ?></td>
                <td><?= h($files->model) ?></td>
                <td><?= h($files->type) ?></td>
                <td><?= h($files->size) ?></td>
                <td><?= h($files->size_correct) ?></td>
                <td><?= h($files->size_optimize) ?></td>
                <td><?= h($files->origin_name) ?></td>
                <td><?= h($files->width) ?></td>
                <td><?= h($files->height) ?></td>
                <td><?= h($files->user_id) ?></td>
                <td><?= h($files->foreign_key) ?></td>
                <td><?= h($files->resized) ?></td>
                <td><?= h($files->url) ?></td>
                <td><?= h($files->description) ?></td>
                <td><?= h($files->data) ?></td>
                <td><?= h($files->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
