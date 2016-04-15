<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Deputytype Mst'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deputytypeMst index large-9 medium-8 columns content">
    <h3><?= __('Deputytype Mst') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('main_code') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('order') ?></th>
                <th><?= $this->Paginator->sort('value_01') ?></th>
                <th><?= $this->Paginator->sort('value_02') ?></th>
                <th><?= $this->Paginator->sort('data_flg') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deputytypeMst as $deputytypeMst): ?>
            <tr>
                <td><?= $this->Number->format($deputytypeMst->id) ?></td>
                <td><?= h($deputytypeMst->main_code) ?></td>
                <td><?= h($deputytypeMst->code) ?></td>
                <td><?= $this->Number->format($deputytypeMst->order) ?></td>
                <td><?= h($deputytypeMst->value_01) ?></td>
                <td><?= h($deputytypeMst->value_02) ?></td>
                <td><?= h($deputytypeMst->data_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deputytypeMst->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deputytypeMst->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deputytypeMst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deputytypeMst->id)]) ?>
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
