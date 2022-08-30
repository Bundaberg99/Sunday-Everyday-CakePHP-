<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property string $id
 * @property string $customer_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $payment
 * @property int $quantity
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\CustomersOrderDetail[] $customers_order_detail
 */
class Order extends Entity
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
        'customer_id' => true,
        'date' => true,
        'payment' => true,
        'quantity' => true,
        'customer' => true,
        'customers_order_detail' => true,
    ];
}
