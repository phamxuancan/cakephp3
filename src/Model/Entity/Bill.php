<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bill Entity
 *
 * @property int $id
 * @property int $foreign_key
 * @property string $name
 * @property string $bill_num
 * @property float $price
 * @property string $VAT
 * @property string $unit
 * @property int $quantity
 * @property float $total
 * @property int $deleted
 * @property \Cake\I18n\FrozenTime $deleted_date
 * @property int $paid
 * @property string $payment_type
 * @property float $discount
 * @property \Cake\I18n\FrozenTime $created
 */
class Bill extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'foreign_key' => true,
        'name' => true,
        'bill_num' => true,
        'price' => true,
        'VAT' => true,
        'unit' => true,
        'quantity' => true,
        'total' => true,
        'deleted' => true,
        'deleted_date' => true,
        'paid' => true,
        'payment_type' => true,
        'discount' => true,
        'created' => true
    ];
}
