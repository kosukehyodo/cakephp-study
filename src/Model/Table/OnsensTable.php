<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Onsens Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Budgets
 * @property |\Cake\ORM\Association\BelongsTo $Areas
 * @property |\Cake\ORM\Association\BelongsToMany $Facilities
 * @property |\Cake\ORM\Association\BelongsToMany $Scenes
 *
 * @method \App\Model\Entity\Onsen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Onsen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Onsen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Onsen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Onsen|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Onsen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Onsen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Onsen findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OnsensTable extends Table
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

        $this->setTable('onsens');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->addBehavior('Josegonzalez/Upload.Upload', [
          'img_file1' => [],
          'img_file2' => []
        ]);

        $this->belongsTo('Budgets', [
            'foreignKey' => 'budget_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Facilities', [
            'foreignKey' => 'onsen_id',
            'targetForeignKey' => 'facility_id',
            'joinTable' => 'onsens_facilities'
        ]);
        $this->belongsToMany('Scenes', [
            'foreignKey' => 'onsen_id',
            'targetForeignKey' => 'scene_id',
            'joinTable' => 'onsens_scenes'
        ]);
        
        $this->hasMany('Reviews', [
            'foreignKey' => 'onsen_id',
            'joinType' => 'INNER'
        ]);
        
        
        $this->hasMany('Onsens_Scenes', [
          'foreignKey' => 'onsen_id',
          'joinType' => 'INNER'
        ]);
        
        $this->hasMany('Onsens_Facilities', [
          'foreignKey' => 'onsen_id',
          'joinType' => 'INNER'
        ]);
        
        
       
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->boolean('published')
            ->allowEmpty('published');

        return $validator;
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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['budget_id'], 'Budgets'));
        $rules->add($rules->existsIn(['area_id'], 'Areas'));

        return $rules;
    }
}
