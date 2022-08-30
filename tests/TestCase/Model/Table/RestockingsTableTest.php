<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RestockingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RestockingsTable Test Case
 */
class RestockingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RestockingsTable
     */
    protected $Restockings;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Restockings',
        'app.Staffs',
        'app.StaffsRestockingDetail',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Restockings') ? [] : ['className' => RestockingsTable::class];
        $this->Restockings = $this->getTableLocator()->get('Restockings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Restockings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RestockingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RestockingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
