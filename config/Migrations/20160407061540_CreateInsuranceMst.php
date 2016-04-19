<?php
use Migrations\AbstractMigration;

class CreateInsuranceMst extends AbstractMigration
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
        $table = $this->table('insurance_mst');

        $table->addColumn('deputytype_code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('insurance_name_local_01', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('insurance_name_local_02', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('insurance_name_eng', 'string', ['limit' => 100, 'null' => true]);
        $table->addColumn('lifetime_flg', 'boolean', ['limit' => 2, 'null' => false, 'default' => -1, 'comment' => 'Non-life = 0, lifetime = 1, the selection formula = -1']);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
