<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '2fd3d59a-657a-46a0-b5dd-89230599e37d',
                'name' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
                'retail_price' => 1.5,
                'quantity' => 1,
                'supplier_id' => '1305cac4-808e-4b22-82fa-5a364d268107',
            ],
        ];
        parent::init();
    }
}
