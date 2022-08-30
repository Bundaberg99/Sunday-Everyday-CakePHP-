<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductImagesFixture
 */
class ProductImagesFixture extends TestFixture
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
                'id' => 'f7a93cc0-70c9-40bb-9f69-2c4be3f70a93',
                'product_id' => '608b4368-5c9e-4806-bbd5-1ecdf3da2168',
                'filename' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
