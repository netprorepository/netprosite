<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Socialmedia Model
 *
 * @method \App\Model\Entity\Socialmedia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Socialmedia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Socialmedia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Socialmedia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Socialmedia|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Socialmedia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Socialmedia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Socialmedia findOrCreate($search, callable $callback = null, $options = [])
 */
class SocialmediaTable extends Table
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

        $this->setTable('socialmedia');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('facebook')
            ->requirePresence('facebook', 'create')
            ->notEmpty('facebook');

        $validator
            ->scalar('twitter')
            ->requirePresence('twitter', 'create')
            ->notEmpty('twitter');

        $validator
            ->scalar('linkedin')
            ->requirePresence('linkedin', 'create')
            ->notEmpty('linkedin');

        return $validator;
    }
}
