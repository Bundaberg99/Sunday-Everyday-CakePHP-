<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StaffsRestockingDetail Entity
 *
 * @property string $id
 * @property string $product_id
 * @property string $restocking_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Restocking $restocking
 */
class StaffsRestockingDetail extends Entity
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
        'restocking_id' => true,
        'quantity' => true,
        'product' => true,
        'restocking' => true,
    ];
}
