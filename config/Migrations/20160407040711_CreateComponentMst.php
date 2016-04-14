<?php
use Migrations\AbstractMigration;

class CreateComponentMst extends AbstractMigration
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
        $table = $this->table('component_mst');

        $table->addColumn('code', 'string', ['limit' => 20, 'null' => false]);
        $table->addColumn('value_01', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('table', 'string', ['limit' => 255, 'null' => true]);
        $table->addColumn('column', 'string', ['limit' => 255, 'null' => true]);
        $table->addColumn('type', 'string', ['limit' => 20, 'null' => false, 'comment' => 'List,Text,Date,Radio,Upload,Num,Check,Img,TextArea,Button']);
        $table->addColumn('mst', 'string', ['limit' => 255, 'null' => true]);
        $table->addColumn('page', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->create();
    }
}
