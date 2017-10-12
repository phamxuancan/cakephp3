<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity
 *
 * @property int $id
 * @property string $name
 * @property string $contract_num
 * @property string $slug
 * @property int $user_id
 * @property string $content
 * @property string $type
 * @property \Cake\I18n\FrozenDate $sign_day
 * @property \Cake\I18n\FrozenTime $startdate
 * @property \Cake\I18n\FrozenTime $enddate
 * @property string $data
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Contract extends Entity
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
        'name' => true,
        'contract_num' => true,
        'slug' => true,
        'user_id' => true,
        'content' => true,
        'type' => true,
        'sign_day' => true,
        'startdate' => true,
        'enddate' => true,
        'data' => true,
        'created' => true,
        'modified' => true
    ];
}
