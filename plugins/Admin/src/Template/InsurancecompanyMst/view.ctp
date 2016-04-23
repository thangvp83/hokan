<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Insurancecompany Mst'), ['action' => 'edit', $insurancecompanyMst->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Insurancecompany Mst'), ['action' => 'delete', $insurancecompanyMst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancecompanyMst->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Insurancecompany Mst'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Insurancecompany Mst'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="insurancecompanyMst view large-9 medium-8 columns content">
    <h3><?= h($insurancecompanyMst->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($insurancecompanyMst->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Value 01') ?></th>
            <td><?= h($insurancecompanyMst->value_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Value 02') ?></th>
            <td><?= h($insurancecompanyMst->value_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($insurancecompanyMst->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $this->Number->format($insurancecompanyMst->order) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Flg') ?></th>
            <td><?= $insurancecompanyMst->data_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
