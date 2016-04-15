<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\AgentMemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\AgentMemberTable Test Case
 */
class AgentMemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\AgentMemberTable
     */
    public $AgentMember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.agent_member',
        'plugin.admin.agent_members'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AgentMember') ? [] : ['className' => 'Admin\Model\Table\AgentMemberTable'];
        $this->AgentMember = TableRegistry::get('AgentMember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgentMember);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
