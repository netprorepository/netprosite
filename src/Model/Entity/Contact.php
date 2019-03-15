<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string $email
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $url
 */
class Contact extends Entity
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
        'address' => true,
        'telephone' => true,
        'email' => true,
        'seo_title' => true,
        'seo_description' => true,
        'seo_keywords' => true,
        'url' => true
    ];
}
