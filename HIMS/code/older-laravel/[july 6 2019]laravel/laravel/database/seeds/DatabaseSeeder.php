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
        // $this->call(PermissionsSeeder::class); #req
        // $this->call(PeopleSeeder::class);
         $this->call(VitalSignsSeeder::class);
    }
}
