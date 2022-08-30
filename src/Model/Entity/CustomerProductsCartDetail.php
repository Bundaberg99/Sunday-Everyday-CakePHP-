<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerProductsCartDetail Entity
 *
 * @property string $id
 * @property string $product_id
 * @property string $cart_id
 * @property string $cost
 * @property int $quantity
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Cart $cart
 */
class CustomerProductsCartDetail extends Entity
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
        'product_id' => true,
        'cart_id' => true,
        'cost' => true,
        'quantity' => true,
        'product' => true,
        'cart' => true,
    ];
}
