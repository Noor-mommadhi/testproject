<?php

namespace Tests\Unit;

use App\Models\Admin;
use App\Models\Students;
use http\Env\Request;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
  //  public function test_admin_reg()
  //  {
    //    $this->withoutExceptionHandling();

    //    $response = $this->get('admin');
       // $response->assertStatus(200);
    //}
 //   public function test_db(){
     //   $this->assertDatabaseHas('_admin', [
       //     'name' => 'raffic'
        //]);

//}


/* public function test_it_admin()
    {

        Admin::create([
            'name' => 'saabi',
            'email' => 'sabbimail@gmail.com',
            'password' => 1234567890,
        ]);
        $this->assertDatabaseHas('_admin',[]);


    }*/


/* public function test_delete_id(){

 $admin=Admin::factory()->count(1)->make();

 $admin=Admin::first();
 if ($admin){
       $admin->delete();
 }
 $this->assertTrue(TRUE);*/
 //}
  /*  public function test_update_students()
    {
        $admin = Admin::factory()->count(1)->make();
        $admin = Admin::first();

        if ($admin) {
            $admin->update();
        }
        $this->assertTrue(true);
    }*/
    /*public function test_update_admin(){
        $response=$this->call('POST', url('register'), ['name' => 'SAD',
            'email' => 'SAD@gamil.com', 'password'=>'123123']);


       $user = Admin::where('email', 'SAD@gmail.com')->first();

        $this->call('post', url('/register'.$user->id) ,['name'=>'SAD','email'=>'SAD@gamil.com','password'=>'123123']);
       $this->assertDatabaseHas('_admin', ['name'=>'sad']);
            $this->assertTrue(TRUE);


    }*/



}
