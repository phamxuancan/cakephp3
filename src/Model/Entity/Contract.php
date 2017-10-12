<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Contract extends Entity
{
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

    const TYPE_CTV  = 1;
    const TYPE_1YEAR = 2;
}
