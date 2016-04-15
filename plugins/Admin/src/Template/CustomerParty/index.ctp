<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Party'), ['action' => 'add']) ?></li>
    </ul>
</nav>


<div class="customerParty index large-9 medium-8 columns content">
    <h3><?= __('Customer Party') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('belong_id') ?></th>
                <th><?= $this->Paginator->sort('relationship_code') ?></th>
                <th><?= $this->Paginator->sort('firstname_local_01') ?></th>
                <th><?= $this->Paginator->sort('middlename_local_01') ?></th>
                <th><?= $this->Paginator->sort('lastname_local_01') ?></th>
                <th><?= $this->Paginator->sort('firstname_eng') ?></th>
                <th><?= $this->Paginator->sort('middlename_eng') ?></th>
                <th><?= $this->Paginator->sort('lastname_eng') ?></th>
                <th><?= $this->Paginator->sort('firstname_local_02') ?></th>
                <th><?= $this->Paginator->sort('middlename_local_02') ?></th>
                <th><?= $this->Paginator->sort('lastname_local_02') ?></th>
                <th><?= $this->Paginator->sort('birthday') ?></th>
                <th><?= $this->Paginator->sort('gender') ?></th>
                <th><?= $this->Paginator->sort('origin_code') ?></th>
                <th><?= $this->Paginator->sort('created_time') ?></th>
                <th><?= $this->Paginator->sort('create_user') ?></th>
                <th><?= $this->Paginator->sort('update_time') ?></th>
                <th><?= $this->Paginator->sort('update_user') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerParty as $customerParty): ?>
            <tr>
                <td><?= $this->Number->format($customerParty->id) ?></td>
                <td><?= $this->Number->format($customerParty->belong_id) ?></td>
                <td><?= h($customerParty->relationship_code) ?></td>
                <td><?= h($customerParty->firstname_local_01) ?></td>
                <td><?= h($customerParty->middlename_local_01) ?></td>
                <td><?= h($customerParty->lastname_local_01) ?></td>
                <td><?= h($customerParty->firstname_eng) ?></td>
                <td><?= h($customerParty->middlename_eng) ?></td>
                <td><?= h($customerParty->lastname_eng) ?></td>
                <td><?= h($customerParty->firstname_local_02) ?></td>
                <td><?= h($customerParty->middlename_local_02) ?></td>
                <td><?= h($customerParty->lastname_local_02) ?></td>
                <td><?= h($customerParty->birthday) ?></td>
                <td><?= $this->Number->format($customerParty->gender) ?></td>
                <td><?= h($customerParty->origin_code) ?></td>
                <td><?= h($customerParty->created_time) ?></td>
                <td><?= h($customerParty->create_user) ?></td>
                <td><?= h($customerParty->update_time) ?></td>
                <td><?= h($customerParty->update_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerParty->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerParty->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerParty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerParty->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
