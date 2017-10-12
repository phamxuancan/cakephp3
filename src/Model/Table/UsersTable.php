<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ApprovesTable|\Cake\ORM\Association\HasMany $Approves
 * @property \App\Model\Table\ContractsTable|\Cake\ORM\Association\HasMany $Contracts
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\HasMany $Files
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Approves', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Contracts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Files', [
            'foreignKey' => 'user_id'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('username')
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('slug')
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('pass_token')
            ->allowEmpty('pass_token');

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->scalar('role')
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->dateTime('last_login')
            ->allowEmpty('last_login');

        $validator
            ->dateTime('last_action')
            ->allowEmpty('last_action');

        $validator
            ->scalar('country')
            ->allowEmpty('country');

        $validator
            ->scalar('department')
            ->allowEmpty('department');

        $validator
            ->scalar('academic_level')
            ->allowEmpty('academic_level');

        $validator
            ->scalar('study_year')
            ->allowEmpty('study_year');

        $validator
            ->scalar('data')
            ->allowEmpty('data');

        $validator
            ->scalar('address')
            ->allowEmpty('address');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
