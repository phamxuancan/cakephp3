<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Approve Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $foreign_key
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenDate $approved_day
 *
 * @property \App\Model\Entity\User $user
 */
class Approve extends Entity
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
        'user_id' => true,
        'foreign_key' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'approved_day' => true,
        'user' => true
    ];
}
