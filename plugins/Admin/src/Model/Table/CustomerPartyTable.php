<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\CustomerParty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerParty Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Belongs
 */
class CustomerPartyTable extends Table
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

        $this->table('customer_party');
        $this->displayField('id');
        $this->primaryKey('id');

//        $this->belongsTo('Belongs', [
//            'foreignKey' => 'belong_id',
//            'joinType' => 'INNER',
//            'className' => 'Admin.Belongs'
//        ]);
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
            ->requirePresence('relationship_code', 'create')
            ->notEmpty('relationship_code');

        $validator
            ->requirePresence('firstname_local_01', 'create')
            ->notEmpty('firstname_local_01');

        $validator
            ->allowEmpty('middlename_local_01');

        $validator
            ->requirePresence('lastname_local_01', 'create')
            ->notEmpty('lastname_local_01');

        $validator
            ->allowEmpty('firstname_eng');

        $validator
            ->allowEmpty('middlename_eng');

        $validator
            ->allowEmpty('lastname_eng');

        $validator
            ->allowEmpty('firstname_local_02');

        $validator
            ->allowEmpty('middlename_local_02');

        $validator
            ->allowEmpty('lastname_local_02');

        $validator
            ->dateTime('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->integer('gender')
            ->allowEmpty('gender');

        $validator
            ->allowEmpty('origin_code');

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
//    public function buildRules(RulesChecker $rules)
//    {
//        $rules->add($rules->existsIn(['belong_id'], 'Belongs'));
//        return $rules;
//    }
}
