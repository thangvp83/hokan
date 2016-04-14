<?php
use Migrations\AbstractMigration;

class CreateAgreement extends AbstractMigration
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
        $table = $this->table('agreement');

        $table->addColumn('customer_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('deputy_code', 'string', ['limit'=> 10, 'null' => false]);
        $table->addColumn('certificate_id', 'string', ['limit'=> 20, 'null' => false]);
        $table->addColumn('contact_name', 'string', ['limit'=> 100, 'null' => true]);
        $table->addColumn('contact_tel', 'string', ['limit'=> 100, 'null' => true]);
        $table->addColumn('paid_amount', 'integer', ['limit'=> 11, 'null' => false, 'default' => 0]);
        $table->addColumn('payment_method_code', 'string', ['limit'=> 10, 'null' => true]);
        $table->addColumn('data_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
