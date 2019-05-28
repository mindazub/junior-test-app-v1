<?php

namespace Tests\Feature;

use App\Company;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
    public function a_user_can_see_all_the_employees()
    {
        $employee = factory('App\Employee')->create();

        $response = $this->get('/employee');

        $response->assertSee($employee->firstName);
    }

    /** @test */
    public function a_user_can_see_all_the_companies()
    {
        $company = factory('App\Company')->create();

        $response = $this->get('/company');

        $response->assertSee($company->name);
    }
}
