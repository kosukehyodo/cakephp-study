<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OnsensFacilities Model
 *
 * @property \App\Model\Table\OnsensTable|\Cake\ORM\Association\BelongsTo $Onsens
 * @property \App\Model\Table\FacilitiesTable|\Cake\ORM\Association\BelongsTo $Facilities
 *
 * @method \App\Model\Entity\OnsensFacility get($primaryKey, $options = [])
 * @method \App\Model\Entity\OnsensFacility newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OnsensFacility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OnsensFacility|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OnsensFacility|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OnsensFacility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OnsensFacility[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OnsensFacility findOrCreate($search, callable $callback = null, $options = [])
 */
class OnsensFacilitiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('onsens_facilities');
        $this->setDisplayField('onsen_id');
        $this->setPrimaryKey(['onsen_id', 'facility_id']);

        $this->belongsTo('Onsens', [
            'foreignKey' => 'onsen_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Facilities', [
            'foreignKey' => 'facility_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['onsen_id'], 'Onsens'));
        $rules->add($rules->existsIn(['facility_id'], 'Facilities'));

        return $rules;
    }
}
