<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string|null $abn
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Customer extends Entity
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
        'username'=>true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'abn' => true,
        'orders' => true,
    ];
}
