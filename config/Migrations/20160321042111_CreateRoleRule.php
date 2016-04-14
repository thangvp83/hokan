<?php
use Migrations\AbstractMigration;

class CreateRoleRule extends AbstractMigration
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
        $table = $this->table('role_rule');
        $table->addColumn('role_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('component_code', 'string', ['limit'=> 20, 'null' => false]);
        $table->addColumn('permission_flg', 'string', ['limit'=> 1, 'null' => false, 'default' => 'A', 'comment' => 'A = all , R = view only, N = not view']);
        $table->addColumn('data_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);
        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->create();
    }
}
