<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testimonials Model
 *
 * @method \App\Model\Entity\Testimonial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testimonial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Testimonial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testimonial|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testimonial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial findOrCreate($search, callable $callback = null, $options = [])
 */
class TestimonialsTable extends Table
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

        $this->setTable('testimonials');
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
            ->scalar('test_name')
            ->maxLength('test_name', 200)
            ->requirePresence('test_name', 'create')
            ->notEmpty('test_name');

        $validator
            ->scalar('person_type')
            ->maxLength('person_type', 200)
            ->requirePresence('person_type', 'create')
            ->notEmpty('person_type');

        $validator
            ->scalar('description')
            ->maxLength('description', 200)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->scalar('seo_title')
            ->maxLength('seo_title', 200)
            ->requirePresence('seo_title', 'create')
            ->notEmpty('seo_title');

        $validator
            ->scalar('seo_keywords')
            ->maxLength('seo_keywords', 200)
            ->requirePresence('seo_keywords', 'create')
            ->notEmpty('seo_keywords');

        $validator
            ->scalar('seo_description')
            ->maxLength('seo_description', 200)
            ->requirePresence('seo_description', 'create')
            ->notEmpty('seo_description');

        $validator
            ->scalar('url')
            ->maxLength('url', 200)
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        return $validator;
    }
}
