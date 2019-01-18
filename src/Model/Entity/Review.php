<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $score
 * @property string $img_file
 * @property int $onsen_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Onsen $onsen
 * @property \App\Model\Entity\User $user
 */
class Review extends Entity
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
        'title' => true,
        'body' => true,
        'score' => true,
        'image_file' => true,
        'image_file2' => true,
        'image_file3' => true,
        'onsen_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'onsen' => true,
        'user' => true
    ];
}
