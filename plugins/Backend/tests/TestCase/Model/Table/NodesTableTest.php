<?php
namespace Backend\Test\TestCase\Model\Table;

use Backend\Model\Table\NodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Backend\Model\Table\NodesTable Test Case
 */
class NodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Backend\Model\Table\NodesTable
     */
    public $Nodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.backend.nodes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Nodes') ? [] : ['className' => NodesTable::class];
        $this->Nodes = TableRegistry::getTableLocator()->get('Nodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nodes);

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
