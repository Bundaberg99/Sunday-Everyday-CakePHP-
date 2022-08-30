<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerProductsCartDetailFixture
 */
class CustomerProductsCartDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer_products_cart_detail';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '47176efd-cd66-49bf-a801-7d1f3fdb0f24',
                'product_id' => '38e70e48-96aa-4a3b-b270-d8dcc8b049d2',
                'cart_id' => '6ed7367b-f895-4922-af06-e1554f45c6b7',
                'cost' => 1.5,
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
