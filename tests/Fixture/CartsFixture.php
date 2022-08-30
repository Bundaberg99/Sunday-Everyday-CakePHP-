<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CartsFixture
 */
class CartsFixture extends TestFixture
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
                'id' => '5f37ae35-0d98-4bca-a872-698f4829ac9d',
                'customer_id' => '83e0ca09-9a5e-42aa-9614-ce0410bd834b',
                'items_no' => 1,
                'cost' => 1.5,
            ],
        ];
        parent::init();
    }
}
