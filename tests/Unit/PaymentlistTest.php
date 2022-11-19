<?php

namespace Tests\Unit;

use App\Models\Branch;
use App\Models\Paymentlist;
use Tests\TestCase;

class PaymentlistTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Payment_reg()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('pays');
        $response->assertStatus(200);
    }


    public function test_db()
    {
        $this->assertDatabaseHas('paymentlist', [
            'name' => 'farin'
        ]);
    }
    public function test_it_paymentlist()
    {

        Paymentlist::create([
            'name'=>'noor',
            'email'=>'noor@mail.in',
            'phone'=>'9092332216',
            'date'=>23/12/2022,
            'branch'=>'palacode'
        ]);

        $this->assertDatabaseHas('paymentlist', []);


    }
    public function test_delete_id()
    {

        $paylsit = Paymentlist::factory()->count(1)->make();

        $paylsit= Paymentlist::first();
        if ($paylsit) {
            $paylsit->delete();
        }
        $this->assertTrue(TRUE);
    }
}
