<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\InsuranceOptionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\InsuranceOptionTable Test Case
 */
class InsuranceOptionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\InsuranceOptionTable
     */
    public $InsuranceOption;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.insurance_option'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InsuranceOption') ? [] : ['className' => 'Admin\Model\Table\InsuranceOptionTable'];
        $this->InsuranceOption = TableRegistry::get('InsuranceOption', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InsuranceOption);

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
