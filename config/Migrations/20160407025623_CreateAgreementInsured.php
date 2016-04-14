<?php
use Migrations\AbstractMigration;

class CreateAgreementInsured extends AbstractMigration
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
        $table = $this->table('agreement_insured');

        $table->addColumn('party_id', 'integer', ['limit'=> 10, 'null' => false]);
        $table->addColumn('agreement_id', 'integer', ['limit'=> 11, 'null' => false]);
        $table->addColumn('firstname_local_01', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('middlename_local_01', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_local_01', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('firstname_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('middlename_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_eng', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('firstname_local_02', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('middlename_local_02', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('lastname_local_02', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('zip', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('phone', 'string', ['limit'=> 45, 'null' => true]);
        $table->addColumn('mobile_phone', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('birthday', 'datetime');
        $table->addColumn('gender', 'boolean', ['limit'=> 1, 'null' => false]);

        $table->addColumn('country_code', 'string', ['limit'=> 10, 'null' => false]);
        $table->addColumn('state_local_01', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('state_local_02', 'string', ['limit'=> 45, 'null' => false]);
        $table->addColumn('city_local_01', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('city_local_02', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('address_01_local_01', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('address_01_local_02', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('address_02_local_01', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('address_02_local_02', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('address_03_local_01', 'string', ['limit'=> 255, 'null' => true]);
        $table->addColumn('address_03_local_02', 'string', ['limit'=> 255, 'null' => true]);
        $table->addColumn('origin_code', 'string', ['limit'=> 10, 'null' => false]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
