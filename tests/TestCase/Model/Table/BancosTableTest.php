<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BancosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BancosTable Test Case
 */
class BancosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BancosTable
     */
    protected $Bancos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bancos',
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
        $config = $this->getTableLocator()->exists('Bancos') ? [] : ['className' => BancosTable::class];
        $this->Bancos = $this->getTableLocator()->get('Bancos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bancos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BancosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
