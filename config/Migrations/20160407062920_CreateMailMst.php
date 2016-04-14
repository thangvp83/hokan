<?php
use Migrations\AbstractMigration;

class CreateMailMst extends AbstractMigration
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
        $table = $this->table('mail_mst');

        $table->addColumn('title', 'string', ['limit' => 45, 'null' => false]);
        $table->addColumn('sentence', 'text', ['null' => false]);
        $table->addColumn('publish_flg', 'string', ['limit' => 2, 'null' => false]);
        $table->addColumn('send_time', 'datetime');
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('create_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
