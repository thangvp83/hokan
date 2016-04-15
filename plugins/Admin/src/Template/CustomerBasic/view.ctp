<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Basic'), ['action' => 'edit', $customerBasic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Basic'), ['action' => 'delete', $customerBasic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerBasic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Basic'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Basic'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerBasic view large-9 medium-8 columns content">
    <h3><?= h($customerBasic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Firstname Local 01') ?></th>
            <td><?= h($customerBasic->firstname_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Local 01') ?></th>
            <td><?= h($customerBasic->middlename_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Local 01') ?></th>
            <td><?= h($customerBasic->lastname_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname Eng') ?></th>
            <td><?= h($customerBasic->firstname_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Eng') ?></th>
            <td><?= h($customerBasic->middlename_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Eng') ?></th>
            <td><?= h($customerBasic->lastname_eng) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname Local 02') ?></th>
            <td><?= h($customerBasic->firstname_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Middlename Local 02') ?></th>
            <td><?= h($customerBasic->middlename_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname Local 02') ?></th>
            <td><?= h($customerBasic->lastname_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($customerBasic->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($customerBasic->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Country Code') ?></th>
            <td><?= h($customerBasic->country_code) ?></td>
        </tr>
        <tr>
            <th><?= __('State Local 01') ?></th>
            <td><?= h($customerBasic->state_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('State Local 02') ?></th>
            <td><?= h($customerBasic->state_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('City Local 01') ?></th>
            <td><?= h($customerBasic->city_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('City Local 02') ?></th>
            <td><?= h($customerBasic->city_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 01 Local 01') ?></th>
            <td><?= h($customerBasic->address_01_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 01 Local 02') ?></th>
            <td><?= h($customerBasic->address_01_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 02 Local 01') ?></th>
            <td><?= h($customerBasic->address_02_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 02 Local 02') ?></th>
            <td><?= h($customerBasic->address_02_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 03 Local 01') ?></th>
            <td><?= h($customerBasic->address_03_local_01) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 03 Local 02') ?></th>
            <td><?= h($customerBasic->address_03_local_02) ?></td>
        </tr>
        <tr>
            <th><?= __('Origin Code') ?></th>
            <td><?= h($customerBasic->origin_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Purpose Code') ?></th>
            <td><?= h($customerBasic->purpose_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Create User') ?></th>
            <td><?= h($customerBasic->create_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Update User') ?></th>
            <td><?= h($customerBasic->update_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerBasic->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($customerBasic->customer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= $this->Number->format($customerBasic->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($customerBasic->birthday) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Time') ?></th>
            <td><?= h($customerBasic->created_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Update Time') ?></th>
            <td><?= h($customerBasic->update_time) ?></td>
        </tr>
    </table>
</div>
