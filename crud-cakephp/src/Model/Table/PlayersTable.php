<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlayersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Em src/Model/Table/PlayersTable.php
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
            'joinType' => 'INNER',
        ]);

    }

    public function validationDefault(Validator $validator): Validator
    {
        // Adicione regras de validação, se necessário.
        return $validator;
    }
}
