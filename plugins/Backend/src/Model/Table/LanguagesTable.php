<?php
namespace Backend\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Languages Model
 *
 * @method \Backend\Model\Entity\Language get($primaryKey, $options = [])
 * @method \Backend\Model\Entity\Language newEntity($data = null, array $options = [])
 * @method \Backend\Model\Entity\Language[] newEntities(array $data, array $options = [])
 * @method \Backend\Model\Entity\Language|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Backend\Model\Entity\Language|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Backend\Model\Entity\Language patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Backend\Model\Entity\Language[] patchEntities($entities, array $data, array $options = [])
 * @method \Backend\Model\Entity\Language findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LanguagesTable extends Table
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

        $this->setTable('languages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('shortcode')
            ->maxLength('shortcode', 10)
            ->allowEmpty('shortcode');

        $validator
            ->integer('online')
            ->allowEmpty('online');

        return $validator;
    }
}
