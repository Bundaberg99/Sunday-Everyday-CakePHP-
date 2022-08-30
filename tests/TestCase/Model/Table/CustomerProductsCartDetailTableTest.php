<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerProductsCartDetailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerProductsCartDetailTable Test Case
 */
class CustomerProductsCartDetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerProductsCartDetailTable
     */
    protected $CustomerProductsCartDetail;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CustomerProductsCartDetail',
        'app.Products',
        'app.Carts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CustomerProductsCartDetail') ? [] : ['className' => CustomerProductsCartDetailTable::class];
        $this->CustomerProductsCartDetail = $this->getTableLocator()->get('CustomerProductsCartDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CustomerProductsCartDetail);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustomerProductsCartDetailTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CustomerProductsCartDetailTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
