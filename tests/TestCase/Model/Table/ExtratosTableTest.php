<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtratosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtratosTable Test Case
 */
class ExtratosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtratosTable
     */
    protected $Extratos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Extratos',
        'app.Contas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Extratos') ? [] : ['className' => ExtratosTable::class];
        $this->Extratos = $this->getTableLocator()->get('Extratos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Extratos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExtratosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExtratosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
