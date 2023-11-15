<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        'firstName' => true,
        'lastName' => true,
        'email' => true,
        'password' => true,
        'created_at' => true,
        'updated_at' => true,
        'posts' => true,
    ];

    protected $_hidden = [
        'password',
    ];
}
