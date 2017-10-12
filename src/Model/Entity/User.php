<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $slug
 * @property string $password
 * @property string $pass_token
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $email
 * @property int $active
 * @property string $role
 * @property \Cake\I18n\FrozenTime $last_login
 * @property \Cake\I18n\FrozenTime $last_action
 * @property string $country
 * @property string $department
 * @property string $academic_level
 * @property string $study_year
 * @property string $data
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Approve[] $approves
 * @property \App\Model\Entity\Contract[] $contracts
 * @property \App\Model\Entity\File[] $files
 */
class User extends Entity
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
        'username' => true,
        'slug' => true,
        'password' => true,
        'pass_token' => true,
        'dob' => true,
        'email' => true,
        'active' => true,
        'role' => true,
        'last_login' => true,
        'last_action' => true,
        'country' => true,
        'department' => true,
        'academic_level' => true,
        'study_year' => true,
        'data' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'approves' => true,
        'contracts' => true,
        'files' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
