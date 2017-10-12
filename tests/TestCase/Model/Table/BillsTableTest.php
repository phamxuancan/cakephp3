<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsTable Test Case
 */
class BillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsTable
     */
    public $Bills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bills') ? [] : ['className' => BillsTable::class];
        $this->Bills = TableRegistry::get('Bills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bills);

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
