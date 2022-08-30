<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $email
 * @property string $phone
 *
 * @property \App\Model\Entity\Restocking[] $restockings
 */
class Staff extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'password'=>true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'restockings' => true,
    ];
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

}
