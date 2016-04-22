<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Insurance Mst'), ['action' => 'edit', $insuranceMst->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Insurance Mst'), ['action' => 'delete', $insuranceMst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceMst->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Insurance Mst'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Insurance Mst'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="insuranceMst view large-9 medium-8 columns content">
    <h3><?= h($insuranceMst->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Deputytype Code') ?></th>
            <td><?= h($insuranceMst->deputytype_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($insuranceMst->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Name Local 01') ?></th>
            <td><?= h($insuranceMst->insurance_name_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Name Local 02') ?></th>
            <td><?= h($insuranceMst->insurance_name_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Name Eng') ?></th>
            <td><?= h($insuranceMst->insurance_name_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Create User') ?></th>
            <td><?= h($insuranceMst->create_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Update User') ?></th>
            <td><?= h($insuranceMst->update_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($insuranceMst->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Time') ?></th>
            <td><?= h($insuranceMst->created_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Update Time') ?></th>
            <td><?= h($insuranceMst->update_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Lifetime Flg') ?></th>
            <td><?= $insuranceMst->lifetime_flg ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Data Flg') ?></th>
            <td><?= $insuranceMst->data_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
