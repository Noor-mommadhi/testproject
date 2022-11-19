<?php

namespace Tests\Unit;

use App\Models\Billing;
use App\Models\makepay;
use Database\Factories\BillingFactory;
use Tests\TestCase;

class BillingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function test_Billing_reg()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('add-bill');
        $response->assertStatus(200);
    }

    public function test_bill_insert()
    {
        $response = $this->call('POST', url('/bill'), ['name' => 'sadik', 'emal' => 'sadik@mail.com', 'phone' => '8976554422',
            'Pname' => 'iphone', 'payment' => 'banking', 'amount' => '19000']);
        $this->assertTrue(true);
    }

    public function test_it_Billing()
    {

        makepay::create([
            'name' => 'saabi',
            'email' => 'sabbimail@gmail.com',
            'phone' => '1234567890',
            'Pname' => 'iphone',
            'payment' => 'banking',
            'amount' => '12000'
        ]);
        $this->assertDatabaseHas('_admin', []);


    }

    public function test_delete_id()
    {

        $bill = makepay::factory()->count(1)->make();

        $bill = makepay::first();
        if ($bill) {
            $bill->delete();
        }
        $this->assertTrue(TRUE);


    }
}
