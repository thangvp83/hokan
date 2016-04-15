<?php use Cake\Core\Configure; ?>
<?php $this->Html->addCrumb(__('System'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span> > <?= $this->Html->link(__('List of Agent Members'), ['action' => 'index'])?></span>
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
                <h2><h2><?= __('Agent edit'); ?></h2></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">
                    <?php $this->loadHelper('Form', ['templates' => 'Admin.bootstrap_form']); ?>
                    <?= $this->Form->create($agent_member, ['id' => 'smart-form-register', 'class' => 'form-horizontal']) ?>
                        <fieldset>
                            <div class="form-group"></div>
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Agent code') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('agent_code', [
                                        'type' => 'select', 'options' => $agent_mst, 'empty' => __('Select Agent Code'),
                                        'class'=>'form-control', 'required' => false, 'placeholder' => __('Agent Code')
                                    ]); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('FirstName Local 01') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('firstname_local_01', ['required' => false, 'placeholder' => __('FirstName Local 01'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('MiddleName local 01') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('middlename_local_01', ['required' => false, 'placeholder' => __('MiddleName local 01'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('LastName local 01') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('lastname_local_01', ['required' => false, 'placeholder' => __('LastName local 01'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('FirstName eng') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('firstname_eng', ['required' => false, 'placeholder' => __('FirstName eng'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('MiddleName eng') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('middlename_eng', ['required' => false, 'placeholder' => __('MiddleName eng'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('LastName eng') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('lastname_eng', ['required' => false, 'placeholder' => __('LastName eng'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('FirstName local 02') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('firstname_local_02', ['required' => false, 'placeholder' => __('FirstName local 02'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('LastName local 02') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('lastname_local_02', ['required' => false, 'placeholder' => __('LastName local 02'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('MiddleName local 02') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('middlename_local_02', ['required' => false, 'placeholder' => __('MiddleName local 02'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Birthday') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('birthday', ['type' =>'text', 'required' => false, 'class'=>'form-control hw-date']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Gender') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('gender', ['type' => 'select', 'options' => \Cake\Core\Configure::read('Core.Agent.gender'), 'empty' => __('Select Agent Gender'),
                                        'class'=>'form-control', 'required' => false, 'placeholder' => __('Agent Code')]); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Origin code') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('origin_code', ['required' => false, 'placeholder' => __('Origin code'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Thumbnail path') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('thumbnail_path', ['required' => false, 'placeholder' => __('Thumbnail path'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Created time') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('created_time', ['type' =>'text', 'required' => false, 'class'=>'form-control hw-date']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Create user') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('create_user', ['required' => false, 'placeholder' => __('Create user'), 'class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Update time') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('update_time', ['type' =>'text', 'required' => false, 'class'=>'form-control hw-date']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?= __('Update user') ?></label>
                                <div class="col-md-6">
                                    <?= $this->Form->input('update_user', ['required' => false, 'placeholder' => __('Update user'), 'class'=>'form-control']); ?>
                                </div>
                            </div>

                        </fieldset>
                    
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-11">
                                    <?= $this->Html->link(__('Cancel'), ['action' => 'agentMembersList'], ['class' => 'btn btn-default']) ?>
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