<?php
namespace Backend\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PagesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('nodes');
        $this->setPrimaryKey('id');

        $this->addBehavior('Translate', ['fields' => ['title', 'body']]);

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('public')
            ->allowEmpty('public');

        return $validator;
    }
}
