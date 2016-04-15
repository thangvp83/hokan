<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\DeputytypeMst;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeputytypeMst Model
 *
 */
class DeputytypeMstTable extends Table
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

        $this->table('deputytype_mst');
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
            ->requirePresence('main_code', 'create')
            ->notEmpty('main_code');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->integer('order')
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        $validator
            ->requirePresence('value_01', 'create')
            ->notEmpty('value_01');

        $validator
            ->allowEmpty('value_02');

        $validator
            ->boolean('data_flg')
            ->requirePresence('data_flg', 'create')
            ->notEmpty('data_flg');

        return $validator;
    }
}
