<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity
 *
 * @property string $id
 * @property string $body
 * @property \Cake\I18n\FrozenTime|null $created
 * @property bool $email_sent
 * @property string $supplier_id
 *
 * @property \App\Model\Entity\Supplier $supplier
 */
class Enquiry extends Entity
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
        'body' => true,
        'created' => true,
        'email_sent' => true,
        'supplier_id' => true,
        'supplier' => true,
    ];
}
