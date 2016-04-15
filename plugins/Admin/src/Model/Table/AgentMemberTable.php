<?php
namespace Admin\Model\Table;

use Admin\Model\Entity\AgentMember;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * AgentMember Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AgentMembers
 * @property \Cake\ORM\Association\HasMany $AgentMember
 */
class AgentMemberTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public $_connection;
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->connection = ConnectionManager::get('default');

        $this->table('agent_member');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('agent_mst', [
            'foreignKey' => 'agent_code',
            'joinType' => 'INNER',
//            'className' => 'Admin.AgentMst'
        ]);
        $this->belongsTo('users', [
            'foreignKey' => 'agent_member_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Users'
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
            ->requirePresence('agent_code', 'create')
            ->notEmpty('agent_code');

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
            ->requirePresence('firstname_local_02', 'create')
            ->notEmpty('firstname_local_02');

        $validator
            ->allowEmpty('middlename_local_02');

        $validator
            ->requirePresence('lastname_local_02', 'create')
            ->notEmpty('lastname_local_02');

        $validator
            ->dateTime('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->integer('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->allowEmpty('origin_code');

        $validator
            ->allowEmpty('thumbnail_path');

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
//        $rules->add($rules->existsIn(['agent_member_id'], 'AgentMembers'));
//        return $rules;
//    }


    public function getAgentMemberById($id){
        $query = 'SELECT * FROM agent_member INNER JOIN agent_mst ON agent_member.agent_code = agent_mst.code WHERE agent_member.agent_member_id = '.$id;
        return $this->connection->execute($query)->fetchAll('assoc');
    }
}
