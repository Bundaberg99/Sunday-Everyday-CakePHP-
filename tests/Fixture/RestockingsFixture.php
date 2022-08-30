<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RestockingsFixture
 */
class RestockingsFixture extends TestFixture
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
                'id' => '322c0f4d-c330-4cf4-b113-df223bf800f5',
                'staff_id' => '47059fd5-470d-4fed-bf5a-ba6c824de5e6',
                'date' => '2022-04-26',
                'payment' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
