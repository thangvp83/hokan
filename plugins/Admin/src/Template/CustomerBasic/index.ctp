<?php
use Cake\Core\Configure;

$this->Html->addCrumb(__('System'));
?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span>&gt;
                <?= __('Customer Basic')?>
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerBasic->id], ['class' => 'btn btn-primary']) ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="true">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2><?= __('Customer Basic')?></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body">

                    <?php
                    $status = \Cake\Core\Configure::read('Core.System.active');
                    $group = \Cake\Core\Configure::read('Core.Users.group');

                    ?>
                    <?= $this->Form->create($customerBasic) ?>
                        <table width="100%" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td><?= __('id') ?></td>
                                    <td><?= $this->Number->format($customerBasic->id) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('customer_id') ?></td>
                                    <td><?= $this->Number->format($customerBasic->customer_id) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('firstname_local_01') ?></td>
                                    <td><?= h($customerBasic->firstname_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('middlename_local_01') ?></td>
                                    <td><?= h($customerBasic->middlename_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('lastname_local_01') ?></td>
                                    <td><?= h($customerBasic->lastname_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('firstname_eng') ?></td>
                                    <td><?= h($customerBasic->firstname_eng) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('middlename_eng') ?></td>
                                    <td><?= h($customerBasic->middlename_eng) ?></td>

                                </tr>
                                <tr>
                                    <td><?= __('lastname_eng') ?></td>
                                    <td><?= h($customerBasic->lastname_eng) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('firstname_local_02') ?></td>
                                    <td><?= h($customerBasic->firstname_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('middlename_local_02') ?></td>
                                    <td><?= h($customerBasic->middlename_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('lastname_local_02') ?></td>
                                    <td><?= h($customerBasic->lastname_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('zip') ?></td>
                                    <td><?= h($customerBasic->zip) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('phone') ?></td>
                                    <td><?= h($customerBasic->phone) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('birthday') ?></td>
                                    <td><?= $customerBasic->birthday;?></td>
                                </tr>
                                <tr>
                                    <td><?= __('gender') ?></td>
                                    <td><?= $this->Number->format($customerBasic->gender) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('country_code') ?></td>
                                    <td><?= h($customerBasic->country_code) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('state_local_01') ?></td>
                                    <td><?= h($customerBasic->state_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('state_local_02') ?></td>
                                    <td><?= h($customerBasic->state_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('city_local_01') ?></td>
                                    <td><?= h($customerBasic->city_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('city_local_02') ?></td>
                                    <td><?= h($customerBasic->city_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_01_local_01') ?></td>
                                    <td><?= h($customerBasic->address_01_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_01_local_02') ?></td>
                                    <td><?= h($customerBasic->address_01_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_02_local_01') ?></td>
                                    <td><?= h($customerBasic->address_02_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_02_local_02') ?></td>
                                    <td><?= h($customerBasic->address_02_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_03_local_01') ?></td>
                                    <td><?= h($customerBasic->address_03_local_01) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('address_03_local_02') ?></td>
                                    <td><?= h($customerBasic->address_03_local_02) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('origin_code') ?></td>
                                    <td><?= h($customerBasic->origin_code) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('purpose_code') ?></td>
                                    <td><?= h($customerBasic->purpose_code) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('created_time') ?></td>
                                    <td><?= $customerBasic->created_time?></td>
                                </tr>
                                <tr>
                                    <td><?= __('create_user') ?></td>
                                    <td><?= h($customerBasic->create_user) ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('update_time') ?></td>
                                    <td><?= $customerBasic->update_time ?></td>
                                </tr>
                                <tr>
                                    <td><?= __('update_user') ?></td>
                                    <td><?= h($customerBasic->update_user) ?></td>
                                </tr>
                            </tbody>
                            <?= $this->Form->end() ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>
