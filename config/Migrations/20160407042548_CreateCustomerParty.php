<?php
use Migrations\AbstractMigration;

class CreateCustomerParty extends AbstractMigration
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
        $table = $this->table('customer_party');

        $table->addColumn('belong_id', 'integer', ['limit'=> 10, 'null' => false]);
        $table->addColumn('relationship_code', 'string', ['limit'=> 10, 'null' => false]);
        $table->addColumn('firstname_local_01', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('middlename_local_01', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_local_01', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('firstname_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('middlename_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('firstname_local_02', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('middlename_local_02', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_local_02', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('birthday', 'datetime');
        $table->addColumn('gender', 'integer', ['limit' => 4, 'null' => true]);
        $table->addColumn('origin_code', 'string', ['limit'=> 10, 'null' => true]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
