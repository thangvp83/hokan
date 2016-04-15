<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerParty Entity.
 *
 * @property int $id
 * @property int $belong_id
 * @property \Admin\Model\Entity\Belong $belong
 * @property string $relationship_code
 * @property string $firstname_local_01
 * @property string $middlename_local_01
 * @property string $lastname_local_01
 * @property string $firstname_eng
 * @property string $middlename_eng
 * @property string $lastname_eng
 * @property string $firstname_local_02
 * @property string $middlename_local_02
 * @property string $lastname_local_02
 * @property \Cake\I18n\Time $birthday
 * @property int $gender
 * @property string $origin_code
 * @property \Cake\I18n\Time $created_time
 * @property string $create_user
 * @property \Cake\I18n\Time $update_time
 * @property string $update_user
 */
class CustomerParty extends Entity
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
        'id' => false,
    ];
}
