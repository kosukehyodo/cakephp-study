<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Onsen Entity
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $budget_id
 * @property int $area_id
 * @property bool $published
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Onsen extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'title' => true,
        'budget_id' => true,
        'area_id' => true,
        'published' => true,
        'created' => true,
        'modified' => true
    ];
}
