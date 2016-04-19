<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\InsuranceMst;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InsuranceMst Model
 *
 */
class InsuranceMstTable extends Table
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

        $this->table('insurance_mst');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('deputytype_code', 'create')
            ->notEmpty('deputytype_code');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->requirePresence('insurance_name_local_01', 'create')
            ->notEmpty('insurance_name_local_01');

        $validator
            ->requirePresence('insurance_name_local_02', 'create')
            ->notEmpty('insurance_name_local_02');

        $validator
            ->allowEmpty('insurance_name_eng');

        $validator
//            ->boolean('lifetime_flg')
            ->requirePresence('lifetime_flg', 'create')
            ->notEmpty('lifetime_flg');

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
}
