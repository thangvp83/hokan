<?php
namespace App\Model\Table;

use App\Model\Entity\RoleRule;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoleRules Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Roles
 */
class RoleRulesTable extends Table
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

        $this->table('role_rules');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('component_code', 'create')
            ->notEmpty('component_code');

        $validator
            ->requirePresence('permission_flg', 'create')
            ->notEmpty('permission_flg');

        $validator
            ->boolean('data_flg')
            ->requirePresence('data_flg', 'create')
            ->notEmpty('data_flg');

        $validator
            ->dateTime('created_time')
            ->requirePresence('created_time', 'create')
            ->notEmpty('created_time');

        $validator
            ->requirePresence('create_user', 'create')
            ->notEmpty('create_user');

        $validator
            ->dateTime('update_time')
            ->requirePresence('update_time', 'create')
            ->notEmpty('update_time');

        $validator
            ->requirePresence('update_user', 'create')
            ->notEmpty('update_user');

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
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        return $rules;
    }
}
