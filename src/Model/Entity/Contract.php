<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity.
 */
class Contract extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
    ];

}
