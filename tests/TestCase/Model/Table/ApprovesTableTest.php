<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApprovesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApprovesTable Test Case
 */
class ApprovesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApprovesTable
     */
    public $Approves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.approves',
        'app.users',
        'app.contracts',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Approves') ? [] : ['className' => ApprovesTable::class];
        $this->Approves = TableRegistry::get('Approves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Approves);

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
