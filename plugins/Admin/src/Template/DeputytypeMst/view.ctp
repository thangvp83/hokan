<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deputytype Mst'), ['action' => 'edit', $deputytypeMst->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deputytype Mst'), ['action' => 'delete', $deputytypeMst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deputytypeMst->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deputytype Mst'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deputytype Mst'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deputytypeMst view large-9 medium-8 columns content">
    <h3><?= h($deputytypeMst->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Main Code') ?></th>
            <td><?= h($deputytypeMst->main_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($deputytypeMst->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Value 01') ?></th>
            <td><?= h($deputytypeMst->value_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Value 02') ?></th>
            <td><?= h($deputytypeMst->value_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($deputytypeMst->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $this->Number->format($deputytypeMst->order) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Flg') ?></th>
            <td><?= $deputytypeMst->data_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
