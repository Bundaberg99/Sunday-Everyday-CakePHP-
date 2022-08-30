<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CustomerProductsCartDetailController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CustomerProductsCartDetailController Test Case
 *
 * @uses \App\Controller\CustomerProductsCartDetailController
 */
class CustomerProductsCartDetailControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CustomerProductsCartDetailController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CustomerProductsCartDetailController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CustomerProductsCartDetailController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CustomerProductsCartDetailController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CustomerProductsCartDetailController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
