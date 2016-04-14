<?php
use Migrations\AbstractMigration;

class CreateAgreementBreakdownBeneficiary extends AbstractMigration
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
        $table = $this->table('agreement_breakdown_beneficiary');

        $table->addColumn('breakdown_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('benefittype_code', 'string', ['limit'=> 10, 'null' => false]);
        $table->addColumn('return_flg', 'integer', ['limit'=> 4, 'null' => false, 'default' => 0]);
        $table->addColumn('return_term_value', 'integer', ['limit'=> 11, 'null' => false]);

        $table->addColumn('return_start', 'datetime');
        $table->addColumn('return_end', 'datetime');
        $table->addColumn('return_unit', 'string', ['limit'=> 1, 'null' => false, 'default' => 'M']);
        $table->addColumn('amount', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('currency', 'string', ['limit'=> 3, 'null' => false, 'default' => 'JPY']);
        $table->addColumn('data_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);


        $table->create();
    }
}
