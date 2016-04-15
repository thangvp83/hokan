<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CustomerPartyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CustomerPartyTable Test Case
 */
class CustomerPartyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CustomerPartyTable
     */
    public $CustomerParty;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.customer_party',
        'plugin.admin.belongs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerParty') ? [] : ['className' => 'Admin\Model\Table\CustomerPartyTable'];
        $this->CustomerParty = TableRegistry::get('CustomerParty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerParty);

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
