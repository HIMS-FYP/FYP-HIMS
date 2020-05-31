<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder{

    public function run(){
        Role::create(['guard_name' =>
            'health_care_employee', 'name' => 'doctor']);
        Role::create(['guard_name' =>
            'health_care_employee', 'name' => 'lab']);
        Role::create(['guard_name' =>
            'health_care_employee', 'name' => 'pharmacist']);
        Role::create(['guard_name' =>
            'health_care_employee', 'name' => 'receptionist']);
    }
}
