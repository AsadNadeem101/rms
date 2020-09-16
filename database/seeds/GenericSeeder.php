<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Region;

class GenericSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creating super admin
        $super_admin = User::create([
            'name'     => 'Super Admin',
            'email'    => 'super_admin@rms.com',
            'type'     => 'super_admin',
            'password' => Hash::make('12345678'),
        ]);
        //Assigning role
        $super_admin->assignRole('super_admin');

        //Creating approver
        $approver = User::create([
            'name'     => 'Approver1',
            'email'    => 'approver@rms.com',
            'type'     => 'approver',
            'password' => Hash::make('12345678'),
        ]);
        //Assigning role
        $approver->assignRole('approver');

        //Creating region
        $region = Region::create([
            'name'        => 'Region1',
            'description' => 'Region1 Description',
        ]);
        
    }
}
