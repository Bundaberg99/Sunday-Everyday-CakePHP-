<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Restocking Entity
 *
 * @property string $id
 * @property string $staff_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $payment
 * @property int $quantity
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\StaffsRestockingDetail[] $staffs_restocking_detail
 */
class Restocking extends Entity
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
        'staff_id' => true,
        'date' => true,
        'payment' => true,
        'quantity' => true,
        'staff' => true,
        'staffs_restocking_detail' => true,
    ];
}
