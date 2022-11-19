<?php

namespace Tests\Unit;

use App\Models\Branch;
use App\Models\Client;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_client_reg()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('reg');
        $response->assertStatus(200);
    }
    public function test_db()
    {
        $this->assertDatabaseHas('branch', [
            'name' => 'noor'
        ]);
    }
    public function test_it_client()
    {

        Client::create([
            'name' => 'MOMMI',
           'email'=>'mommadhi1109',
             'password'=>'12341234'

        ]);
        $this->assertDatabaseHas('branch', []);


    }

    public function test_delete_id()
    {

        $client= Client::factory()->count(1)->make();

        $client = Branch::first();
        if ($client) {
            $client->delete();
        }
        $this->assertTrue(TRUE);
    }



}
