<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomersOrderDetail Entity
 *
 * @property string $id
 * @property string $product_id
 * @property string $order_id
 * @property string $price
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Order $order
 */
class CustomersOrderDetail extends Entity
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
        'order_id' => true,
        'price' => true,
        'product' => true,
        'order' => true,
    ];
}
