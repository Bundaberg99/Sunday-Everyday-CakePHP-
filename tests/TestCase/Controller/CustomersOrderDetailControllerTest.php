<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CustomersOrderDetailController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CustomersOrderDetailController Test Case
 *
 * @uses \App\Controller\CustomersOrderDetailController
 */
class CustomersOrderDetailControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CustomersOrderDetailController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CustomersOrderDetailController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CustomersOrderDetailController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CustomersOrderDetailController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CustomersOrderDetailController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
