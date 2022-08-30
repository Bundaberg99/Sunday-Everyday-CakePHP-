<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'id' => '9e6a2814-2fda-48d1-965d-16dad21108ba',
                'customer_id' => '81ce2165-03d6-4d18-bd8f-30f7e47dc5d2',
                'date' => '2022-04-26',
                'payment' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
