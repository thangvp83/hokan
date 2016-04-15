<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Basic'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customerBasic form large-9 medium-8 columns content">
    <?= $this->Form->create($customerBasic) ?>
    <fieldset>
        <legend><?= __('Add Customer Basic') ?></legend>
        <?php
            echo $this->Form->input('customer_id');
            echo $this->Form->input('firstname_local_01');
            echo $this->Form->input('middlename_local_01');
            echo $this->Form->input('lastname_local_01');
            echo $this->Form->input('firstname_eng');
            echo $this->Form->input('middlename_eng');
            echo $this->Form->input('lastname_eng');
            echo $this->Form->input('firstname_local_02');
            echo $this->Form->input('middlename_local_02');
            echo $this->Form->input('lastname_local_02');
            echo $this->Form->input('zip');
            echo $this->Form->input('phone');
            echo $this->Form->input('birthday');
            echo $this->Form->input('gender');
            echo $this->Form->input('country_code');
            echo $this->Form->input('state_local_01');
            echo $this->Form->input('state_local_02');
            echo $this->Form->input('city_local_01');
            echo $this->Form->input('city_local_02');
            echo $this->Form->input('address_01_local_01');
            echo $this->Form->input('address_01_local_02');
            echo $this->Form->input('address_02_local_01');
            echo $this->Form->input('address_02_local_02');
            echo $this->Form->input('address_03_local_01');
            echo $this->Form->input('address_03_local_02');
            echo $this->Form->input('origin_code');
            echo $this->Form->input('purpose_code');
            echo $this->Form->input('created_time');
            echo $this->Form->input('create_user');
            echo $this->Form->input('update_time');
            echo $this->Form->input('update_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
