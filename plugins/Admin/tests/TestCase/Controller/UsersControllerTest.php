<?php
namespace Admin\Test\TestCase\Controller;

use Admin\Controller\UsersController;
use Admin\Test\Fixture\UsersFixture;
use App\Model\Entity\User;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * Admin\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.users',
        'plugin.admin.user_auths',
        'plugin.admin.menus',
    ];

    public $firstUser = [];
    
    public $dataPost = [
        'hw_file_errors' => [
            'avatar' => ''
        ],
        'first_name' => 'Hiworld',
        'last_name' => 'Admin',
        'group' => '1',
        'status' => '1',
        'avatar_tmp' => [
            'name' => 'image-test.jpg',
            'type' => 'image/jpeg',
            'tmp_name' => '/tmp/phpMLNxAG',
            'error' => 0,
            'size' => 689092
        ]
    ];
    
    public $dataPostAdd = [
        'email' => 'testuser@hiworld.com.vn',
        'password' => '123123',
        'password_confirm' => '123123',
        'hw_file_errors' => [
            'avatar' => ''
        ],
        'first_name' => 'Hw',
        'last_name' => 'Admin',
        'group' => '1',
        'status' => '1',
        'avatar_tmp' => [
            'name' => 'image-test.jpg',
            'type' => 'image/jpeg',
            'tmp_name' => '/tmp/php9LNYXe',
            'error' => 0,
            'size' => 27296
        ]
    ];

    /**
     * initialize test
     */
    public function setUp()
    {
        $userFixture = new UsersFixture();
        $this->firstUser = $userFixture->records[0];
        $user = new User($userFixture->records[0]);
        $this->session([
            'Core.Users' => (object)$user
        ]);

        $this->UsersController = new UsersController();
        $this->Users = TableRegistry::get('Users');
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get(['controller' => 'Users', 'action' => 'index', 'plugin' => 'Admin']);
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get(['controller' => 'Users', 'action' => 'view', $this->firstUser['id'], 'plugin' => 'Admin']);
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        //form add user
        $this->get(['controller' => 'Users', 'action' => 'form', 'plugin' => 'Admin']);
        $this->assertResponseOk();

        $this->post(['controller' => 'Users', 'action' => 'form', 'plugin' => 'Admin'], $this->dataPostAdd);
        $this->assertResponseSuccess();

        $query = $this->Users->find()->where(['email' => $this->dataPostAdd['email']])->first();
        $this->assertEquals(1, count($query));
    }

    /**
     * Test add user existed
     *
     * @return void
     */
    public function testAddExistedEmail()
    {
        $data = $this->dataPostAdd;
        $data['email'] = $this->firstUser['email'];

        $this->post(['controller' => 'Users', 'action' => 'form', 'plugin' => 'Admin'], $data);
        $this->assertResponseSuccess();
        $this->assertNoRedirect();

        $query = $this->Users->find()->where(['email' => $data['email']])->first();
        $this->assertEquals(1, count($query));
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        //form edit user
        $this->get(['controller' => 'Users', 'action' => 'form', $this->firstUser['id'], 'plugin' => 'Admin']);
        $this->assertResponseOk();

        $data = $this->dataPost;
        $data['first_name'] = 'FirstNameEdit';
        $data['last_name'] = 'LastNameEdit';
        $this->post(['controller' => 'Users', 'action' => 'form', $this->firstUser['id'], 'plugin' => 'Admin'], $data);
        $this->assertResponseSuccess();

        $query = $this->Users->find()->where(['id' => $this->firstUser['id']])->first();
        $this->assertTextEquals('FirstNameEdit', $query->first_name);
        $this->assertTextEquals('LastNameEdit', $query->last_name);
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        //test delete a record
        $this->delete(['controller' => 'Users', 'action' => 'delete', $this->firstUser['id'], 'plugin' => 'Admin']);
        $this->assertResponseSuccess();

        $query = $this->Users->find()->where(['id' => $this->firstUser['id']])->first();
        $this->assertEquals(0, count($query));
    }
}
