<?php
use Migrations\AbstractMigration;

class CreateAgreementBreakdown extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('agreement_breakdown');

        $table->addColumn('agreement_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('option_code', 'string', ['limit'=> 10, 'null' => false]);

        $table->addColumn('main_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 0, 'comment' => '1 => Primary contract , 0 => Special contract']);
        $table->addColumn('amount', 'integer', ['limit'=> 11, 'null' => false,  'default' => 0, 'comment' => '1 => Primary contract , 0 => Special contract']);
        $table->addColumn('currency', 'string', ['limit'=> 3, 'null' => false,  'default' => 'JPY']);
        $table->addColumn('contract_start', 'datetime');
        $table->addColumn('contract_end', 'datetime');
        $table->addColumn('min_cancellation_period', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('min_payment_period', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('payment_cycle', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('payment_term_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1, 'comment' => '0=終身 ( forever ) ,1=年齢 ( ages ) ,2=期間  ( period )']);
        $table->addColumn('payment_term_value', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('cancel_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);
        $table->addColumn('cancel_date', 'datetime');
        $table->addColumn('data_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
