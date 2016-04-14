<?php
use Migrations\AbstractMigration;

class CreateAdminRole extends AbstractMigration
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
        $table = $this->table('admin_roles');
        $table->addColumn('role_name', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('data_flg', 'boolean', ['default' => 1]);
        $table->addColumn('create_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->create();
    }
}
