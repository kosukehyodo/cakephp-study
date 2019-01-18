<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OnsensScenesFixture
 *
 */
class OnsensScenesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'onsen_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'scene_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'scene_key' => ['type' => 'index', 'columns' => ['scene_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['onsen_id', 'scene_id'], 'length' => []],
            'onsens_scenes_ibfk_1' => ['type' => 'foreign', 'columns' => ['onsen_id'], 'references' => ['onsens', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'onsens_scenes_ibfk_2' => ['type' => 'foreign', 'columns' => ['scene_id'], 'references' => ['scenes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'scene_id' => 1
            ],
        ];
        parent::init();
    }
}
