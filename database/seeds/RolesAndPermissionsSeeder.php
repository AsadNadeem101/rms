<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		$permissionsByRole = [

		    'super_admin' => [
			    ['name'=>'approver_list'],
			    ['name'=>'approver_create'],
			    ['name'=>'approver_edit'],
			    ['name'=>'approver_show'],
			    ['name'=>'approver_delete'],

				['name'=>'region_list'],
			    ['name'=>'region_create'],
			    ['name'=>'region_edit'],
			    ['name'=>'region_show'],
			    ['name'=>'region_delete'],

			    ['name'=>'request_list'],
			    ['name'=>'request_create'],
			    ['name'=>'request_edit'],
			    ['name'=>'request_show'],
			    ['name'=>'request_delete'],

		    ],
		    
		    'approver' => [

			    ['name'=>'request_list'],
			    ['name'=>'request_create'],
			    ['name'=>'request_edit'],
			    ['name'=>'request_show'],
			    ['name'=>'request_delete'],
		    ],
		    
		];

		foreach ($permissionsByRole as $role => $permissionIds) {
			$permissions = Permission::insert($permissionIds);
		    $_role = Role::create(['name' => $role ]);

		   	$_role->givePermissionTo($permissionIds);
		}
    }
}
