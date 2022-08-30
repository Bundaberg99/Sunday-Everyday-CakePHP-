<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaffsRestockingDetailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaffsRestockingDetailTable Test Case
 */
class StaffsRestockingDetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StaffsRestockingDetailTable
     */
    protected $StaffsRestockingDetail;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StaffsRestockingDetail',
        'app.Products',
        'app.Restockings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StaffsRestockingDetail') ? [] : ['className' => StaffsRestockingDetailTable::class];
        $this->StaffsRestockingDetail = $this->getTableLocator()->get('StaffsRestockingDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StaffsRestockingDetail);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StaffsRestockingDetailTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StaffsRestockingDetailTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
