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
                <?= __('List of Insurance mst')?>
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <?= $this->Html->link(__('Add new'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
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
                <h2><?= __('List of Insurance Mst')?></h2>
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
                    $lifetime_flg = \Cake\Core\Configure::read('Core.Insurance.lifetime_flg');

                    ?>
                    <table id="" class="table table-striped table-bordered" width="100%">
                        <?=
                        $this->element('filter_table', [
                            'fields' => [
                                'deputytype_code',
                                'code',
                                'insurance_name_local_01',
                                'insurance_name_local_02',
                                'insurance_name_eng',
                                'lifetime_flg' => [
                                    'options' => $lifetime_flg,
                                    'hw-select' => true,
                                    'sort' => false
                                ],
                                'data_flg' => [
                                    'options' => $status,
                                    'hw-select' => true,
                                    'sort' => false
                                ],
//                                'create_time',
//                                'create_user',
//                                'update_time',
//                                'update_user',
                            ]
                        ]);
                        ?>
                        <tbody>
                        <?php foreach ($insuranceMst as $item): ?>
                            <tr>
                                <td><?= h($item->deputytype_code) ?></td>
                                <td><?= h($item->code) ?></td>
                                <td><?= h($item->insurance_name_local_01) ?></td>
                                <td><?= h($item->insurance_name_local_02) ?></td>
                                <td><?= h($item->insurance_name_eng) ?></td>
                                <td><?= h($lifetime_flg[$item->lifetime_flg]) ?></td>
                                <td><center><?= $this->Core->active($item, 'data_flg')?></center></td>
                                <td>
                                    <center>
                                        <?= $this->Html->link('<i class="fa fa-eye"></i> ', ['action' => 'view', $item->id], ['title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default'] ); ?>
                                        <?= $this->Html->link('<i class="fa fa-edit"></i> ', ['action' => 'edit', $item->id], ['title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default'] ); ?>
                                        <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $item->id], ['title' => __('Delete'), 'data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure', $item->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]); ?>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->element('Admin.paginator_cake') ?>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
    <!-- WIDGET END -->
</div>