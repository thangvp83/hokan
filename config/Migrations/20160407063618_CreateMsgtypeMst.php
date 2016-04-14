<?php
use Migrations\AbstractMigration;

class CreateMsgtypeMst extends AbstractMigration
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
        $table = $this->table('msgtype_mst');

        $table->addColumn('code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('value', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('publish_flg', 'string', ['limit' => 2, 'null' => false, 'default' => 'O']);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->create();
    }
}
