<?php
namespace App\Model\Table;

use App\Model\Entity\InsuranceOption;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InsuranceOption Model
 *
 */
class InsuranceOptionTable extends Table
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

        $this->table('insurance_option');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('insurance_mst', [
            'foreignKey' => 'insurance_code',
            'joinType' => 'INNER',
            'className' => 'InsuranceMst'
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
            ->requirePresence('insurance_code', 'create')
            ->notEmpty('insurance_code');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->requirePresence('option_name', 'create')
            ->notEmpty('option_name');

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
