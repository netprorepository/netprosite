<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Admin Entity
 *
 * @property int $id
 * @property string $profilePic
 * @property int $status
 * @property string $fname
 * @property string $lname
 * @property int $user_id
 * @property int $roleid
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Service[] $services
 */
class Admin extends Entity
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
        'profilePic' => true,
        'status' => true,
        'fname' => true,
        'lname' => true,
        'user_id' => true,
        'roleid' => true,
        'user' => true,
        'services' => true
    ];
}
