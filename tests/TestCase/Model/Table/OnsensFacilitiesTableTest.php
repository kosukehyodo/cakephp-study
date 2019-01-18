<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnsensFacilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnsensFacilitiesTable Test Case
 */
class OnsensFacilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OnsensFacilitiesTable
     */
    public $OnsensFacilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.onsens_facilities',
        'app.onsens',
        'app.facilities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OnsensFacilities') ? [] : ['className' => OnsensFacilitiesTable::class];
        $this->OnsensFacilities = TableRegistry::getTableLocator()->get('OnsensFacilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OnsensFacilities);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
