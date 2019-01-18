<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnsensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnsensTable Test Case
 */
class OnsensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OnsensTable
     */
    public $Onsens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.onsens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Onsens') ? [] : ['className' => OnsensTable::class];
        $this->Onsens = TableRegistry::getTableLocator()->get('Onsens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Onsens);

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
}
