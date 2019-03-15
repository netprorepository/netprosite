<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faqquestions Model
 *
 * @method \App\Model\Entity\Faqquestion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Faqquestion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Faqquestion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faqquestion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faqquestion|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faqquestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Faqquestion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faqquestion findOrCreate($search, callable $callback = null, $options = [])
 */
class FaqquestionsTable extends Table
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

        $this->setTable('faqquestions');
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
            ->scalar('question')
            ->requirePresence('question', 'create')
            ->notEmpty('question');

        $validator
            ->scalar('answer')
            ->maxLength('answer', 4294967295)
            ->requirePresence('answer', 'create')
            ->notEmpty('answer');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
