<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    /** @test */
    public function test_register_page_not_found()
    {
        $response = $this->get('/register');
        $response->assertNotFound();
        $response->assertStatus(404);
    }

    /** @test */
    public function test_an_authenticated_user_can_see_employees()
    {
        $this->be($user = factory('App\User')->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]));

        $employee = factory('App\Employee')->create();
        $response = $this->get('/employee');
        $response->assertSee($employee->name);
    }



    /** @test */
    public function test_an_authenticated_user_can_see_companies()
    {
        $this->be($user = factory('App\User')->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]));

        $company = factory('App\Company')->create();
        $response = $this->get('/company');
        $response->assertSee($company->name);
    }

}
