<?php use Cake\Core\Configure; ?>
<?php $this->Html->addCrumb(__('System'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span> > <?= $this->Html->link(__('List Deputytype Mst'), ['action' => 'index'])?></span>
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
                <h2><h2><?= ($deputytypeMst->isNew())?__('Deputy type add'):__('Deputy type edit'); ?></h2></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">
                    <?php $this->loadHelper('Form', ['templates' => 'Admin.bootstrap_form']); ?>
                    <?= $this->Form->create($deputytypeMst, ['id' => 'smart-form-register', 'class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Main Code') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('main_code', ['options' => $cate,'required' => false, 'placeholder' => __('Main Code'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Code') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('code', ['required' => false, 'placeholder' => __('Code'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Order') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('order', ['required' => false, 'placeholder' => __('Order'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Value 01') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('value_01', ['required' => false, 'placeholder' => __('Value 01'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Value 02') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->input('value_02', ['required' => false, 'placeholder' => __('Value 02'), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?= __('Data flg') ?></label>
                            <div class="col-md-4">
                                <?= $this->Form->checkbox('data_flg', ['class'=>'checkbox', 'label'=>false]); ?>
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