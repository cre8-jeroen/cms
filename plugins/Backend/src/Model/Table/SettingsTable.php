<?php
namespace Backend\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settings Model
 *
 * @method \Backend\Model\Entity\Setting get($primaryKey, $options = [])
 * @method \Backend\Model\Entity\Setting newEntity($data = null, array $options = [])
 * @method \Backend\Model\Entity\Setting[] newEntities(array $data, array $options = [])
 * @method \Backend\Model\Entity\Setting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Backend\Model\Entity\Setting|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Backend\Model\Entity\Setting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Backend\Model\Entity\Setting[] patchEntities($entities, array $data, array $options = [])
 * @method \Backend\Model\Entity\Setting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingsTable extends Table
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

        $this->setTable('settings');
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
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmpty('type');

        $validator
            ->scalar('default')
            ->maxLength('default', 255)
            ->allowEmpty('default');

        $validator
            ->scalar('value')
            ->maxLength('value', 255)
            ->allowEmpty('value');

        return $validator;
    }
}
