<?php
use Migrations\AbstractMigration;

class CreateComponentAuthen extends AbstractMigration
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
        $table = $this->table('component_auths');
        $table->addColumn('component_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('controller', 'string', ['limit'=> 20, 'null' => false]);
        $table->addColumn('action', 'string', ['limit'=> 20, 'null' => false]);
        $table->create();
    }
}
