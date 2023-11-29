// src/Model/Table/PlayersTable.php
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

        $this->setTable('players');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // Adicione outras configurações da tabela, se necessário.
    }

    public function validationDefault(Validator $validator): Validator
    {
        // Adicione regras de validação, se necessário.
        return $validator;
    }
}
