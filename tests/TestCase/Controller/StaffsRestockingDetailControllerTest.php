<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\StaffsRestockingDetailController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\StaffsRestockingDetailController Test Case
 *
 * @uses \App\Controller\StaffsRestockingDetailController
 */
class StaffsRestockingDetailControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\StaffsRestockingDetailController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\StaffsRestockingDetailController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\StaffsRestockingDetailController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\StaffsRestockingDetailController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\StaffsRestockingDetailController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
