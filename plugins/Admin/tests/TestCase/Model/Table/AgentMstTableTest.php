<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\AgentMstTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\AgentMstTable Test Case
 */
class AgentMstTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\AgentMstTable
     */
    public $AgentMst;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.agent_mst'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AgentMst') ? [] : ['className' => 'Admin\Model\Table\AgentMstTable'];
        $this->AgentMst = TableRegistry::get('AgentMst', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgentMst);

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
}
