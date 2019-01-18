<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OnsensReviewsFixture
 *
 */
class OnsensReviewsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'onsen_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'review_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'scene_key' => ['type' => 'index', 'columns' => ['review_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['onsen_id', 'review_id'], 'length' => []],
            'onsens_reviews_ibfk_1' => ['type' => 'foreign', 'columns' => ['onsen_id'], 'references' => ['onsens', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'onsens_reviews_ibfk_2' => ['type' => 'foreign', 'columns' => ['review_id'], 'references' => ['reviews', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'onsen_id' => 1,
                'review_id' => 1
            ],
        ];
        parent::init();
    }
}
