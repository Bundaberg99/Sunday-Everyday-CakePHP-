<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomersOrderDetailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomersOrderDetailTable Test Case
 */
class CustomersOrderDetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomersOrderDetailTable
     */
    protected $CustomersOrderDetail;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CustomersOrderDetail',
        'app.Products',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CustomersOrderDetail') ? [] : ['className' => CustomersOrderDetailTable::class];
        $this->CustomersOrderDetail = $this->getTableLocator()->get('CustomersOrderDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CustomersOrderDetail);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustomersOrderDetailTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CustomersOrderDetailTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
