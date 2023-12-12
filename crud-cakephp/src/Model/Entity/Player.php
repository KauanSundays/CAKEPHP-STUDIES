<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Player extends Entity
{
    // Permitir atribuição em massa para os campos 'name' e 'position'
    protected $_accessible = [
        'name' => true,
        'position' => true,
    ];
}
