<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartsTable Test Case
 */
class CartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CartsTable
     */
    protected $Carts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Carts',
        'app.Customers',
        'app.CustomerProductsCartDetail',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carts') ? [] : ['className' => CartsTable::class];
        $this->Carts = $this->getTableLocator()->get('Carts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Carts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CartsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CartsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
