<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersOrderDetailFixture
 */
class CustomersOrderDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customers_order_detail';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '372f7dc3-7b22-4e18-90fe-0b40c4d75b60',
                'product_id' => 'aabf1762-28a0-4245-b99a-49343ffff9c3',
                'order_id' => '33f2ad1a-376a-4a91-860a-856cd159543d',
                'price' => 1.5,
            ],
        ];
        parent::init();
    }
}
