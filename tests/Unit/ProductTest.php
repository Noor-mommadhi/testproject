<?php

namespace Tests\Unit;

use App\Models\Client;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_reg()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('add-product');
        $response->assertStatus(200);
    }
    public function test_db()
    {
        $this->assertDatabaseHas('item', [
            'name' => 'raffic'
        ]);
    }
    public function test_it_product()
    {

            Product::create([
            'name' => 'MOMMI',

            'currency'=>'INR',
            'cost'=>'1000',
            'tax'=>'2%',
            'totalcost'=>1200,
            'visibility'=>'admin'

        ]);
        $this->assertDatabaseHas('item', []);


    }

}
