<?php
namespace Admin\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InsuranceMstFixture
 *
 */
class InsuranceMstFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'insurance_mst';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'deputytype_code' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'code' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'insurance_name_local_01' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'insurance_name_local_02' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'insurance_name_eng' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'lifetime_flg' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '-1', 'comment' => 'Non-life = 0, lifetime = 1, the selection formula = -1', 'precision' => null],
        'data_flg' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'create_user' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'update_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'update_user' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'deputytype_code' => 'Lorem ip',
            'code' => 'Lorem ip',
            'insurance_name_local_01' => 'Lorem ipsum dolor sit amet',
            'insurance_name_local_02' => 'Lorem ipsum dolor sit amet',
            'insurance_name_eng' => 'Lorem ipsum dolor sit amet',
            'lifetime_flg' => 1,
            'data_flg' => 1,
            'created_time' => '2016-04-19 08:40:45',
            'create_user' => 'Lorem ipsum dolor sit amet',
            'update_time' => '2016-04-19 08:40:45',
            'update_user' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
