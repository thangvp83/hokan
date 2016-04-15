<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\CustomerBasic;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerBasic Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 */
class CustomerBasicTable extends Table
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

        $this->table('customer_basic');
        $this->displayField('id');
        $this->primaryKey('id');

        /*$this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Customers'
        ]);*/
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
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('phone');

        $validator
            ->dateTime('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->integer('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->requirePresence('country_code', 'create')
            ->notEmpty('country_code');

        $validator
            ->requirePresence('state_local_01', 'create')
            ->notEmpty('state_local_01');

        $validator
            ->requirePresence('state_local_02', 'create')
            ->notEmpty('state_local_02');

        $validator
            ->requirePresence('city_local_01', 'create')
            ->notEmpty('city_local_01');

        $validator
            ->requirePresence('city_local_02', 'create')
            ->notEmpty('city_local_02');

        $validator
            ->requirePresence('address_01_local_01', 'create')
            ->notEmpty('address_01_local_01');

        $validator
            ->requirePresence('address_01_local_02', 'create')
            ->notEmpty('address_01_local_02');

        $validator
            ->requirePresence('address_02_local_01', 'create')
            ->notEmpty('address_02_local_01');

        $validator
            ->requirePresence('address_02_local_02', 'create')
            ->notEmpty('address_02_local_02');

        $validator
            ->allowEmpty('address_03_local_01');

        $validator
            ->allowEmpty('address_03_local_02');

        $validator
            ->allowEmpty('origin_code');

        $validator
            ->allowEmpty('purpose_code');

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
    /*public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }*/
}
