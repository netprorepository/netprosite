<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testimonial Entity
 *
 * @property int $id
 * @property string $test_name
 * @property string $person_type
 * @property string $description
 * @property int $status
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $url
 */
class Testimonial extends Entity
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
        'test_name' => true,
        'person_type' => true,
        'description' => true,
        'status' => true,
        'seo_title' => true,
        'seo_keywords' => true,
        'seo_description' => true,
        'url' => true
    ];
}
