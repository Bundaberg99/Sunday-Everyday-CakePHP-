<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Guests Controller
 *
 * @property \App\Model\Table\CartsTable $Guests
 */
class GuestsController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->setLayout('guests_home');

        $products=$this->fetchTable('Products')->find();
        $this->set(compact('products'));

    }

}
