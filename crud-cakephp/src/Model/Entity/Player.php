<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Player extends Entity
{
    protected $_accessible = [
        'name' => true,
        'position_id' => true, 
    ];
}