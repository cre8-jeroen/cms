<?php
namespace Backend\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('password', 'Wachtwoord is verplicht')
            ->notEmpty('role', 'Selecteer een rol')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Selecteer een geldige rol'
            ]);

        $validator->add(
            'email', 
            ['unique' => [
                'rule' => 'validateUnique', 
                'provider' => 'table', 
                'message' => 'E-mailadres reeds in gebruik']
            ]
        );
        return $validator;
    }

}