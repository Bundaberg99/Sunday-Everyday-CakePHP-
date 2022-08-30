<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffsRestockingDetailFixture
 */
class StaffsRestockingDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'staffs_restocking_detail';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '8695153a-6d35-4f3a-86d0-1c42f15a27c7',
                'product_id' => 'da227d2c-de2b-4e1d-996d-1f3a433060c8',
                'restocking_id' => '8dca990e-4579-424e-b8a8-d57eb975b7c6',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
