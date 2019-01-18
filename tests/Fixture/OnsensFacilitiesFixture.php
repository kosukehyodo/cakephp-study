<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OnsensFacilitiesFixture
 *
 */
class OnsensFacilitiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'onsen_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'facility_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'facility_key' => ['type' => 'index', 'columns' => ['facility_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['onsen_id', 'facility_id'], 'length' => []],
            'onsens_facilities_ibfk_1' => ['type' => 'foreign', 'columns' => ['onsen_id'], 'references' => ['onsens', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'onsens_facilities_ibfk_2' => ['type' => 'foreign', 'columns' => ['facility_id'], 'references' => ['facilities', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'facility_id' => 1
            ],
        ];
        parent::init();
    }
}
