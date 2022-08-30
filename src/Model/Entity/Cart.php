<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property string $id

 * @property int $items_no
 * @property string $cost
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\CustomerProductsCartDetail[] $customer_products_cart_detail
 */
class Cart extends Entity
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
        'items_no' => true,
        'cost' => true,
        'customer_products_cart_detail' => true,
    ];
}
