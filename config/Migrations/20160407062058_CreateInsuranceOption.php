<?php
use Migrations\AbstractMigration;

class CreateInsuranceOption extends AbstractMigration
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
        $table = $this->table('insurance_option');

        $table->addColumn('insurance_code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('option_name', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
