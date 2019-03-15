<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FaqquestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FaqquestionsTable Test Case
 */
class FaqquestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FaqquestionsTable
     */
    public $Faqquestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.faqquestions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Faqquestions') ? [] : ['className' => FaqquestionsTable::class];
        $this->Faqquestions = TableRegistry::getTableLocator()->get('Faqquestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Faqquestions);

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
