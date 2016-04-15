<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeputytypeMst Entity.
 *
 * @property int $id
 * @property string $main_code
 * @property string $code
 * @property int $order
 * @property string $value_01
 * @property string $value_02
 * @property bool $data_flg
 */
class DeputytypeMst extends Entity
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
