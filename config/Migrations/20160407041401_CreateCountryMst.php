<?php
use Migrations\AbstractMigration;

class CreateCountryMst extends AbstractMigration
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
        $table = $this->table('country_mst');

        $table->addColumn('code', 'string', ['limit' => 10, 'null' => false]);
        $table->addColumn('order', 'integer', ['limit' => 3, 'null' => false]);
        $table->addColumn('value_01', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('value_02', 'string', ['limit' => 255, 'null' => true]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->create();
    }
}
