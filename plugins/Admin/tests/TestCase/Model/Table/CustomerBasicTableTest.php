<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CustomerBasicTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CustomerBasicTable Test Case
 */
class CustomerBasicTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CustomerBasicTable
     */
    public $CustomerBasic;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.customer_basic',
        'plugin.admin.customers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerBasic') ? [] : ['className' => 'Admin\Model\Table\CustomerBasicTable'];
        $this->CustomerBasic = TableRegistry::get('CustomerBasic', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerBasic);

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
