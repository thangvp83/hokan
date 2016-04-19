<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\InsuranceMstTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\InsuranceMstTable Test Case
 */
class InsuranceMstTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\InsuranceMstTable
     */
    public $InsuranceMst;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.insurance_mst'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InsuranceMst') ? [] : ['className' => 'Admin\Model\Table\InsuranceMstTable'];
        $this->InsuranceMst = TableRegistry::get('InsuranceMst', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InsuranceMst);

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
