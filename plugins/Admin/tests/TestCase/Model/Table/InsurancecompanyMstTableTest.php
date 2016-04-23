<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\InsurancecompanyMstTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\InsurancecompanyMstTable Test Case
 */
class InsurancecompanyMstTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\InsurancecompanyMstTable
     */
    public $InsurancecompanyMst;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.insurancecompany_mst'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InsurancecompanyMst') ? [] : ['className' => 'Admin\Model\Table\InsurancecompanyMstTable'];
        $this->InsurancecompanyMst = TableRegistry::get('InsurancecompanyMst', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InsurancecompanyMst);

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
