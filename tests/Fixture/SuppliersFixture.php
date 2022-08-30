<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuppliersFixture
 */
class SuppliersFixture extends TestFixture
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
                'id' => '840e5d5a-90cf-4272-a8bc-75088b24c1ea',
                'business_name' => 'Lorem ipsum dolor sit amet',
                'contact_name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsu',
                'abn' => '',
            ],
        ];
        parent::init();
    }
}
