<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accomplishment Entity
 *
 * @property int $id
 * @property string $title
 * @property int $value
 * @property int $status
 */
class Accomplishment extends Entity
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
        'title' => true,
        'value' => true,
        'status' => true
    ];
}
