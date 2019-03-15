<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialmediasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialmediasTable Test Case
 */
class SocialmediasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialmediasTable
     */
    public $Socialmedias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.socialmedias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Socialmedias') ? [] : ['className' => SocialmediasTable::class];
        $this->Socialmedias = TableRegistry::getTableLocator()->get('Socialmedias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Socialmedias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
