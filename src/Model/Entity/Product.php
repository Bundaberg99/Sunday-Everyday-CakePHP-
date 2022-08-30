<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property string $id
 * @property string $name
 * @property string|null $image
 * @property string $cost
 * @property string $retail_price
 * @property int $quantity
 * @property string $supplier_id

 *
 * @property \App\Model\Entity\Supplier $supplier
 * @property \App\Model\Entity\CustomersOrderDetail[] $customers_order_detail
 * @property \App\Model\Entity\StaffsRestockingDetail[] $staffs_restocking_detail
 * @property \App\Model\Entity\ProductImage[] $product_images
 */
class Product extends Entity
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
        'name' => true,
        'image'=>true,
        'cost' => true,
        'retail_price' => true,
        'quantity' => true,
        'supplier_id' => true,
        'supplier' => true,
        'customers_order_detail' => true,
        'staffs_restocking_detail' => true,
        'product_images'=>true,
    ];
}
