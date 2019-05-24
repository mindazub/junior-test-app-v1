<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('users')->truncate();
        DB::table('employees')->truncate();
        DB::table('companies')->truncate();
         $this->call(UserTableSeeder::class);
         $this->call(EmployeeTableSeeder::class);
    }
}
