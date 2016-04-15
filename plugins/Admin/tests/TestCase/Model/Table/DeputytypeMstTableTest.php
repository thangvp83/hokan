<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\DeputytypeMstTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\DeputytypeMstTable Test Case
 */
class DeputytypeMstTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\DeputytypeMstTable
     */
    public $DeputytypeMst;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.deputytype_mst'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeputytypeMst') ? [] : ['className' => 'Admin\Model\Table\DeputytypeMstTable'];
        $this->DeputytypeMst = TableRegistry::get('DeputytypeMst', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeputytypeMst);

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
