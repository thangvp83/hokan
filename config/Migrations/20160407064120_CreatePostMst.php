<?php
use Migrations\AbstractMigration;

class CreatePostMst extends AbstractMigration
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
        $table = $this->table('post_mst');

        $table->addColumn('zip', 'string', ['limit' => 7, 'null' => false]);
        $table->addColumn('state_local_02', 'string', ['limit' => 45, 'null' => false]);
        $table->addColumn('city_local_02', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('address_01_local_02', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('state_local_01', 'string', ['limit' => 45, 'null' => false]);
        $table->addColumn('city_local_01', 'string', ['limit' => 100, 'null' => false, 'default' => '1']);
        $table->addColumn('address_01_local_01', 'string', ['limit' => 100, 'null' => false]);
        $table->addColumn('state_local_03', 'string', ['limit' => 100, 'null' => true]);
        $table->addColumn('city_local_03', 'string', ['limit' => 100, 'null' => true]);
        $table->addColumn('address_01_local_03', 'string', ['limit' => 100, 'null' => true]);

        $table->create();
    }
}
