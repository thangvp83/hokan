<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Party'), ['action' => 'edit', $customerParty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Party'), ['action' => 'delete', $customerParty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerParty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Party'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Party'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerParty view large-9 medium-8 columns content">
    <h3><?= h($customerParty->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Relationship Code') ?></th>
            <td><?= h($customerParty->relationship_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname Local 01') ?></th>
            <td><?= h($customerParty->firstname_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Local 01') ?></th>
            <td><?= h($customerParty->middlename_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Local 01') ?></th>
            <td><?= h($customerParty->lastname_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname Eng') ?></th>
            <td><?= h($customerParty->firstname_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Eng') ?></th>
            <td><?= h($customerParty->middlename_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Eng') ?></th>
            <td><?= h($customerParty->lastname_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname Local 02') ?></th>
            <td><?= h($customerParty->firstname_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Local 02') ?></th>
            <td><?= h($customerParty->middlename_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Local 02') ?></th>
            <td><?= h($customerParty->lastname_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Origin Code') ?></th>
            <td><?= h($customerParty->origin_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Create User') ?></th>
            <td><?= h($customerParty->create_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Update User') ?></th>
            <td><?= h($customerParty->update_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerParty->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Belong Id') ?></th>
            <td><?= $this->Number->format($customerParty->belong_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= $this->Number->format($customerParty->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($customerParty->birthday) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Time') ?></th>
            <td><?= h($customerParty->created_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Update Time') ?></th>
            <td><?= h($customerParty->update_time) ?></td>
        </tr>
    </table>
</div>
