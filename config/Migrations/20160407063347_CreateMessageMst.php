<?php
use Migrations\AbstractMigration;

class CreateMessageMst extends AbstractMigration
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
        $table = $this->table('message_mst');

        $table->addColumn('msgtype_code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('message_title', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('message_detail', 'text', ['null' => false]);
        $table->addColumn('msgopen_time', 'datetime');
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->create();
    }
}
