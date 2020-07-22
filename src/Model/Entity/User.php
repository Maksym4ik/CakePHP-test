<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $password
 * @property int $active
 */
class User extends Entity
{

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

    protected $_accessible = [
        'id' => false,
        'firstName' => true,
        'lastName' => true,
        'username' => true,
        'password' => true,
        'active' => true,
        'admin' => true,
        'token' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

}
