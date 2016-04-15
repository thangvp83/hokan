<?php use Cake\Core\Configure; ?>
<?php $this->Html->addCrumb(__('System'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span> > <?= $this->Html->link(__('Customer Basic'), ['action' => 'index'])?></span>
        </h1>
    </div>
</div>

<div class="row">
    <!-- NEW WIDGET START -->
    <article class="col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2><h2><?= ($customerBasic->isNew())?__('User add'):__('User edit'); ?></h2></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">
                    <?php $this->loadHelper('Form', ['templates' => 'Admin.bootstrap_form']); ?>
                    <?= $this->Form->create($customerBasic, ['id' => 'smart-form-register', 'class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="form-group"></div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('firstname_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('firstname_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('firstname_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('middlename_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('middlename_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('middlename_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('lastname_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('lastname_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('lastname_local_01')]); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('firstname_eng') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('firstname_eng', ['class'=>'form-control', 'required' => false, 'placeholder' => __('firstname_eng')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('middlename_eng') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('middlename_eng', ['class'=>'form-control', 'required' => false, 'placeholder' => __('middlename_eng')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('lastname_eng') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('lastname_eng', ['class'=>'form-control', 'required' => false, 'placeholder' => __('lastname_eng')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('firstname_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('firstname_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('firstname_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('middlename_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('middlename_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('middlename_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('lastname_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('lastname_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('lastname_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('zip') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('zip', ['class'=>'form-control', 'required' => false, 'placeholder' => __('zip')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('phone') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('phone', ['class'=>'form-control', 'required' => false, 'placeholder' => __('phone')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('birthday') ?>:</label>
                            <div class="col-md-3">
                                <?= $this->Form->input('birthday', ['type' => 'text', 'class'=>'form-control hw-date', 'required' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('gender') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('gender', ['type' => 'select', 'options' => Configure::read('Core.Users.gender') , 'required' => false, 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('country_code') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('country_code', ['class'=>'form-control', 'required' => false, 'placeholder' => __('country_code')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('state_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('state_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('state_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('state_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('state_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('state_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('city_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('city_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('city_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('city_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('city_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('city_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_01_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_01_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_01_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_01_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_01_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_01_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_02_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_02_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_02_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_02_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_02_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_02_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_03_local_01') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_03_local_01', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_03_local_01')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('address_03_local_02') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('address_03_local_02', ['class'=>'form-control', 'required' => false, 'placeholder' => __('address_03_local_02')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('origin_code') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('origin_code', ['class'=>'form-control', 'required' => false, 'placeholder' => __('origin_code')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('purpose_code') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('purpose_code', ['class'=>'form-control', 'required' => false, 'placeholder' => __('purpose_code')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('created_time') ?>:</label>
                            <div class="col-md-3">
                                <?= $this->Form->input('created_time', ['type' => 'text', 'value' => $customerBasic->created_time, 'class'=>'form-control hw-date', 'required' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('create_user') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('create_user', ['class'=>'form-control', 'required' => false, 'placeholder' => __('create_user')]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('update_time') ?>:</label>
                            <div class="col-md-3">
                                <?= $this->Form->input('update_time', ['type' => 'text', 'value' => $customerBasic->update_time, 'class'=>'form-control hw-date', 'required' => false]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('update_user') ?>:</label>
                            <div class="col-md-6">
                                <?= $this->Form->input('update_user', ['class'=>'form-control', 'required' => false, 'placeholder' => __('update_user')]); ?>
                            </div>
                        </div>

                    </fieldset>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-11">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Form->button('<i class="fa fa-save"></i> '.__('Submit'), ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
    </article>
    <!-- WIDGET END -->
</div>