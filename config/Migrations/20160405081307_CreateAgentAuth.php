<?php
use Migrations\AbstractMigration;

class CreateAgentAuth extends AbstractMigration
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
        $table = $this->table('agent_auth');

        $table->addColumn('email', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('password', 'string', ['limit'=> 255, 'null' => false]);
        $table->addColumn('status', 'integer', ['limit'=> 3, 'null' => false,
            'comment' => '(Registered（have ID/PASSWORD）=2, Registered (only SSO)=1, Not complete by some thing wrong = 0）']);
        $table->addColumn('data_flg', 'boolean', ['limit'=> 1, 'null' => false, 'default' => 1]);
        $table->addColumn('created_time', 'datetime');
        $table->addColumn('create_user', 'string', ['limit'=> 100, 'null' => false]);
        $table->addColumn('update_time', 'datetime');
        $table->addColumn('update_user', 'string', ['limit'=> 100, 'null' => false]);

        $table->create();
    }
}
