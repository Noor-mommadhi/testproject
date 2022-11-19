<?php

namespace Tests\Unit;

use App\Models\Branch;
use Tests\TestCase;

class BranchTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_barnch_reg()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('add-branch');
        $response->assertStatus(200);
    }

    public function test_db()
    {
        $this->assertDatabaseHas('branch', [
            'name' => 'noor'
        ]);
    }

    public function test_it_barnch()
    {

        Branch::create([
            'name' => 'saabi',
            "Address" => 'palacode',
            "city" => 'dharmapuri',
            "state" => 'Tn',
            "pincode" => '636808',
            "country" => 'ind'
        ]);
        $this->assertDatabaseHas('branch', []);


    }

    public function test_delete_id()
    {

        $branch = Branch::factory()->count(1)->make();

        $branch = Branch::first();
        if ($branch) {
            $branch->delete();
        }
        $this->assertTrue(TRUE);
    }
}
