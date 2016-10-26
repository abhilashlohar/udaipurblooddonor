<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donor Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property int $age
 * @property int $weight
 * @property string $email
 * @property int $mobile
 * @property string $landmark
 * @property string $blood_group
 * @property \Cake\I18n\Time $previous_blood_donation_date
 * @property string $preferred_remider
 */
class Donor extends Entity
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
        '*' => true,
        'id' => false
    ];
}
