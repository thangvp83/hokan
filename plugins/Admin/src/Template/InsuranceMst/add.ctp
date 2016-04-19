<?php use Cake\Core\Configure; ?>
<?php $this->Html->addCrumb(__('System'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span> > <?= $this->Html->link(__('List Insurance Mst'), ['action' => 'index'])?></span>
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
                <h2><h2><?= ($insuranceMst->isNew())?__('Insurance Mst type add'):__('Insurance Mst type edit'); ?></h2></h2>
            </header>

            <!-- widget div-->
            <div>
                <?php
                $status = \Cake\Core\Configure::read('Core.System.active');
                $lifetime_flg = \Cake\Core\Configure::read('Core.Insurance.lifetime_flg');

                ?>
                <!-- widget content -->
                <div class="widget-body">
                    <?php $this->loadHelper('Form', ['templates' => 'Admin.bootstrap_form']); ?>
                    <?= $this->Form->create($insuranceMst, ['id' => 'smart-form-register', 'class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Deputytype Code') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('deputytype_code', ['options' => $cate,'required' => false, 'placeholder' => __('Deputytype Code'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Code') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('code', ['required' => false, 'placeholder' => __('Code'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Insurance Name Local 01') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('insurance_name_local_01', ['required' => false, 'placeholder' => __('Insurance Name Local 01'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Insurance Name Local 02') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('insurance_name_local_02', ['required' => false, 'placeholder' => __('Insurance Name Local 02'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Insurance Name Eng') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('insurance_name_eng', ['required' => false, 'placeholder' => __('Insurance Name Eng'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Lifetime Flg') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('lifetime_flg', ['options' => $lifetime_flg,'required' => false, 'placeholder' => __('Lifetime Flg'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Data Flg') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('data_flg', ['options' => $status,'required' => false, 'placeholder' => __('Data Flg'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Created time') ?></label>
                            <div class="col-md-6">
                                <?= $this->Form->input('created_time', ['type' =>'text', 'required' => false, 'class'=>'form-control hw-date']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Create user') ?></label>
                            <div class="col-md-6">
                                <?= $this->Form->input('create_user', ['required' => false, 'placeholder' => __('Create user'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Update time') ?></label>
                            <div class="col-md-6">
                                <?= $this->Form->input('update_time', ['type' =>'text', 'required' => false, 'class'=>'form-control hw-date']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?= __('Update user') ?></label>
                            <div class="col-md-6">
                                <?= $this->Form->input('update_user', ['required' => false, 'placeholder' => __('Update user'), 'class'=>'form-control']); ?>
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