<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerBasic Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \Admin\Model\Entity\Customer $customer
 * @property string $firstname_local_01
 * @property string $middlename_local_01
 * @property string $lastname_local_01
 * @property string $firstname_eng
 * @property string $middlename_eng
 * @property string $lastname_eng
 * @property string $firstname_local_02
 * @property string $middlename_local_02
 * @property string $lastname_local_02
 * @property string $zip
 * @property string $phone
 * @property \Cake\I18n\Time $birthday
 * @property int $gender
 * @property string $country_code
 * @property string $state_local_01
 * @property string $state_local_02
 * @property string $city_local_01
 * @property string $city_local_02
 * @property string $address_01_local_01
 * @property string $address_01_local_02
 * @property string $address_02_local_01
 * @property string $address_02_local_02
 * @property string $address_03_local_01
 * @property string $address_03_local_02
 * @property string $origin_code
 * @property string $purpose_code
 * @property \Cake\I18n\Time $created_time
 * @property string $create_user
 * @property \Cake\I18n\Time $update_time
 * @property string $update_user
 */
class CustomerBasic extends Entity
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
