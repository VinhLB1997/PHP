<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        // $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator){
        $validator = new Validator();
        $validator
        ->requirePresence('name')
        ->notEmpty('name', 'Không được để trống')
        ->add('name', [
            'length' => [
                'rule' => ['minLength', 10],
                'message' => 'Tên phải lơn hơn 10 kí tự',
            ]
        ]);

        return $validator;
    }
}
