<?php
$cell = $this->cell('User');
echo $cell;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADDRESS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AGE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COMPANY_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->ID) ?></td>
                <td><?= h($user->NAME) ?></td>
                <td><?= h($user->ADDRESS) ?></td>
                <td><?= $this->Number->format($user->AGE) ?></td>
                <td><?= $this->Number->format($user->COMPANY_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]) ?>
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
