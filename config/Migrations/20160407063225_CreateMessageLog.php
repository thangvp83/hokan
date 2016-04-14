<?php
use Migrations\AbstractMigration;

class CreateMessageLog extends AbstractMigration
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
        $table = $this->table('message_log');

        $table->addColumn('message_id', 'integer', ['limit' => 11, 'null' => false]);
        $table->addColumn('confirm_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 0]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('create_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
