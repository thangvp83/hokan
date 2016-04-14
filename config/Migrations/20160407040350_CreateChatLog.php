<?php
use Migrations\AbstractMigration;

class CreateChatLog extends AbstractMigration
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
        $table = $this->table('chat_log');

        $table->addColumn('talker_id', 'string', ['limit' => 11, 'null' => false]);
        $table->addColumn('io_type', 'boolean', ['limit' => 1, 'null' => false, 'default' => 0, 'comment' => '1 => Out, 0 => In']);
        $table->addColumn('message', 'text', ['null' => false]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
