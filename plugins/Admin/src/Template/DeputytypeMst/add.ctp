<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Deputytype Mst'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deputytypeMst form large-9 medium-8 columns content">
    <?= $this->Form->create($deputytypeMst) ?>
    <fieldset>
        <legend><?= __('Add Deputytype Mst') ?></legend>
        <?php
            echo $this->Form->input('main_code');
            echo $this->Form->input('code');
            echo $this->Form->input('order');
            echo $this->Form->input('value_01');
            echo $this->Form->input('value_02');
            echo $this->Form->input('data_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
