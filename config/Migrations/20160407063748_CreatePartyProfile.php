<?php
use Migrations\AbstractMigration;

class CreatePartyProfile extends AbstractMigration
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
        $table = $this->table('party_profile');

        $table->addColumn('party_id', 'integer', ['limit' => 11, 'null' => false]);
        $table->addColumn('tall', 'decimal', ['precision' => 4,  'scale' => '1', 'null' => false, 'default' => 0.0]);
        $table->addColumn('weight', 'decimal', ['precision' => 4,  'scale' => '1', 'null' => false, 'default' => 0.0]);

        $table->addColumn('create_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
