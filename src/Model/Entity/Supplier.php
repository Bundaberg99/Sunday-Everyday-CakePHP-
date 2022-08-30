<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property string $id
 * @property string $business_name
 * @property string $contact_name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string|null $abn
 *
 * @property \App\Model\Entity\Product[] $products
 */
class Supplier extends Entity
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
        'business_name' => true,
        'contact_name' => true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'abn' => true,
        'products' => true,
    ];
}
