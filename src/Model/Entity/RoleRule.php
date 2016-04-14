<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoleRule Entity.
 *
 * @property int $id
 * @property int $role_id
 * @property \App\Model\Entity\Role $role
 * @property string $component_code
 * @property string $permission_flg
 * @property bool $data_flg
 * @property \Cake\I18n\Time $created_time
 * @property string $create_user
 * @property \Cake\I18n\Time $update_time
 * @property string $update_user
 */
class RoleRule extends Entity
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
