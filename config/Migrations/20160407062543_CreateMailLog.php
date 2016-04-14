<?php
use Migrations\AbstractMigration;

class CreateMailLog extends AbstractMigration
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
        $table = $this->table('mail_log');
        $table->addColumn('mail_id', 'integer', ['limit' => 11, 'null' => false]);
        $table->addColumn('customer_id', 'integer', ['limit' => 11, 'null' => false]);
        $table->addColumn('email', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('data_flg', 'boolean', ['limit' => 1, 'null' => false, 'default' => 1]);

        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
