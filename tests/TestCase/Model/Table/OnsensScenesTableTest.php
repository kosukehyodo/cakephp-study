<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnsensScenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnsensScenesTable Test Case
 */
class OnsensScenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OnsensScenesTable
     */
    public $OnsensScenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.onsens_scenes',
        'app.onsens',
        'app.scenes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OnsensScenes') ? [] : ['className' => OnsensScenesTable::class];
        $this->OnsensScenes = TableRegistry::getTableLocator()->get('OnsensScenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OnsensScenes);

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
