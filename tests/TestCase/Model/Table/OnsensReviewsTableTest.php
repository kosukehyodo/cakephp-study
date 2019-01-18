<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnsensReviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnsensReviewsTable Test Case
 */
class OnsensReviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OnsensReviewsTable
     */
    public $OnsensReviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.onsens_reviews',
        'app.onsens',
        'app.reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OnsensReviews') ? [] : ['className' => OnsensReviewsTable::class];
        $this->OnsensReviews = TableRegistry::getTableLocator()->get('OnsensReviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OnsensReviews);

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
