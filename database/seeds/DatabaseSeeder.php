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
         $this->call(UsersTableSeeder::class);
         $this->call(Alf_month_authTableSeeder::class);
         $this->call(Alf_role_authTableSeeder::class);
         $this->call(Alf_status_app_authTableSeeder::class);
    }
}
