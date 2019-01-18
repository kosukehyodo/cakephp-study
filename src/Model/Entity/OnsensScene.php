<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OnsensScene Entity
 *
 * @property int $onsen_id
 * @property int $scene_id
 *
 * @property \App\Model\Entity\Onsen $onsen
 * @property \App\Model\Entity\Scene $scene
 */
class OnsensScene extends Entity
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
        'onsen' => true,
        'scene' => true
    ];
}
